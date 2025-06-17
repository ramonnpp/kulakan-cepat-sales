<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerVisitNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SalesController extends Controller
{
    /**
     * Display a listing of the customers.
     */
    public function index(Request $request)
    {
        $query = Customer::query();

        // Search filter
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name_store', 'like', '%' . $search . '%')
                    ->orWhere('name_owner', 'like', '%' . $search . '%')
                    ->orWhere('id_customer', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('no_phone', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%');
            });
        }

        // Area filter (assuming 'address' can be used for simple area filtering for now)
        if ($area = $request->input('area')) {
            $query->where('address', 'like', '%' . $area . '%');
        }

        // Status filter
        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        // Last Order Filter (more complex, requires joining with transactions)
        if ($lastOrderFilter = $request->input('last_order')) {
            $query->whereHas('transactions', function ($q) use ($lastOrderFilter) {
                if ($lastOrderFilter === 'last_month') {
                    $q->where('date_transaction', '>=', now()->subMonth());
                } elseif ($lastOrderFilter === 'last_3_months') {
                    $q->where('date_transaction', '>=', now()->subMonths(3));
                } elseif ($lastOrderFilter === 'last_6_months') {
                    $q->where('date_transaction', '>=', now()->subMonths(6));
                }
            });
        }

        // Pagination: Get 10 customers per page
        $customers = $query->paginate(10);

        return view('sales.customers', compact('customers'));
    }


    /**
     * Show the form for creating a new resource (Lead).
     */
    public function createLead()
    {
        // Mengambil semua customer dari database
        // Anda bisa menambahkan filter atau pagination jika daftar customer sangat banyak
        $customers = Customer::orderBy('name_store')->get(); // Mengambil semua customer, diurutkan berdasarkan nama toko

        return view('sales.leads', compact('customers')); // Meneruskan data customer ke view
    }

    /**
     * Store a newly created resource (Lead/Customer) in storage.
     */
    public function storeLead(Request $request)
    {
        $validatedData = $request->validate([
            'name_store' => 'required|string|max:255',
            'name_owner' => 'required|string|max:255',
            'no_phone' => 'required|string|max:20',
            'email' => 'nullable|email|unique:customer,email|max:100',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'notes' => 'nullable|string', // This 'notes' is for the lead form, not visit notes.
        ]);

        try {
            $customer = new Customer();
            $customer->name_store = $validatedData['name_store'];
            $customer->name_owner = $validatedData['name_owner'];
            $customer->no_phone = $validatedData['no_phone'];
            $customer->email = $validatedData['email'];
            $customer->address = $validatedData['address'];
            $customer->password = Hash::make($validatedData['password']);
            $customer->status = 'PENDING_APPROVE';
            // $customer->id_sales = auth('sales')->id(); // Uncomment if you have sales authentication

            $customer->save();

            return redirect()->route('leads.create')->with('success', 'New customer (lead) added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to add new customer: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified customer detail.
     */
    public function show($id)
    {
        // Load customer with their transactions, transaction details, products, AND visit notes
        $customer = Customer::with(['transactions.details.product', 'visitNotes'])->findOrFail($id);

        // Eloquent method to get most bought products
        $mostBoughtProducts = $customer->transactions()
            ->join('transaction_detail', 'transaction.id_transaction', '=', 'transaction_detail.id_transaction')
            ->join('products', 'transaction_detail.id_product', '=', 'products.id_product')
            ->select('products.name_product')
            ->selectRaw('SUM(transaction_detail.quantity) as total_quantity')
            ->groupBy('products.name_product')
            ->orderByDesc('total_quantity')
            ->limit(5)
            ->get();

        return view('sales.customer-detail', compact('customer', 'mostBoughtProducts'));
    }

    /**
     * Store a new visit note for a customer.
     */
    public function storeVisitNote(Request $request, $id)
    {
        $validatedData = $request->validate([
            'note_text' => 'required|string|max:1000',
            'interaction_type' => 'required|string|max:255',
        ]);

        try {
            $customer = Customer::findOrFail($id);

            $note = new CustomerVisitNote();
            $note->id_customer = $customer->id_customer;
            $note->note_text = $validatedData['note_text'];
            $note->interaction_type = $validatedData['interaction_type'];
            // $note->id_sales = auth('sales')->id(); // Uncomment if you have sales authentication
            $note->save();

            return redirect()->back()->with('success', 'Catatan kunjungan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan catatan kunjungan: ' . $e->getMessage());
        }
    }

    // BARU: Metode untuk mengedit status customer
    public function editStatus($id)
    {
        $customer = Customer::findOrFail($id); // Temukan customer berdasarkan ID
        $statuses = ['PENDING_APPROVE', 'ACTIVE', 'INACTIVE']; // Daftar status yang tersedia (sesuai migrasi customer table)

        return view('sales.edit-customer-status', compact('customer', 'statuses')); // Tampilkan form edit status
    }

    // BARU: Metode untuk memperbarui status customer
    public function updateStatus(Request $request, $id)
    {
        $customer = Customer::findOrFail($id); // Temukan customer berdasarkan ID

        // Validasi input status
        $validatedData = $request->validate([
            'status' => ['required', 'string', Rule::in(['PENDING_APPROVE', 'ACTIVE', 'INACTIVE'])], // Pastikan status sesuai dengan enum di DB
        ]);

        try {
            $customer->status = $validatedData['status']; // Update status customer
            $customer->save(); // Simpan perubahan ke database

            return redirect()->route('customers.index')->with('success', 'Status pelanggan berhasil diperbarui!'); // Redirect kembali ke daftar customer
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui status pelanggan: ' . $e->getMessage()); // Tangani error
        }
    }
}
