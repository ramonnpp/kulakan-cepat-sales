@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Manajemen Customers</h1>

    <div class="bg-white p-6 rounded-lg shadow-sm mb-8 flex flex-col md:flex-row gap-4 items-center">
        <form action="{{ route('customers.index') }}" method="GET" class="w-full flex flex-wrap gap-4 items-center">
            <div class="w-full md:w-1/3">
                <label for="search_customer" class="block text-sm font-medium text-gray-700 mb-1">Cari Pelanggan:</label>
                <input type="text" id="search_customer" name="search" placeholder="Nama pelanggan, ID..."
                    value="{{ request('search') }}"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="w-full md:w-1/4">
                <label for="area_filter" class="block text-sm font-medium text-gray-700 mb-1">Area:</label>
                <select id="area_filter" name="area"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Semua Area</option>
                    <option value="Jakarta" {{ request('area') == 'Jakarta' ? 'selected' : '' }}>Jakarta</option>
                    <option value="Bandung" {{ request('area') == 'Bandung' ? 'selected' : '' }}>Bandung</option>
                    <option value="Surabaya" {{ request('area') == 'Surabaya' ? 'selected' : '' }}>Surabaya</option>
                    {{-- Add more dynamic options if available from a distinct list of areas --}}
                </select>
            </div>
            <div class="w-full md:w-1/4">
                <label for="status_filter" class="block text-sm font-medium text-gray-700 mb-1">Status:</label>
                <select id="status_filter" name="status"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Semua Status</option>
                    <option value="ACTIVE" {{ request('status') == 'ACTIVE' ? 'selected' : '' }}>Aktif</option>
                    <option value="INACTIVE" {{ request('status') == 'INACTIVE' ? 'selected' : '' }}>Tidak Aktif</option>
                    <option value="PENDING_APPROVE" {{ request('status') == 'PENDING_APPROVE' ? 'selected' : '' }}>Baru
                    </option>
                </select>
            </div>
            <div class="w-full md:w-1/4">
                <label for="last_order_filter" class="block text-sm font-medium text-gray-700 mb-1">Order Terakhir:</label>
                <select id="last_order_filter" name="last_order"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Semua Waktu</option>
                    <option value="last_month" {{ request('last_order') == 'last_month' ? 'selected' : '' }}>Bulan Terakhir
                    </option>
                    <option value="last_3_months" {{ request('last_order') == 'last_3_months' ? 'selected' : '' }}>3 Bulan
                        Terakhir</option>
                    <option value="last_6_months" {{ request('last_order') == 'last_6_months' ? 'selected' : '' }}>6 Bulan
                        Terakhir</option>
                </select>
            </div>
            <button type="submit"
                class="mt-4 md:mt-0 px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200 shadow-md w-full md:w-auto">Terapkan
                Filter</button>
        </form>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Customers Anda</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Toko
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kontak
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Area</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order
                            Terakhir</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($customers as $customer)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $customer->name_store }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $customer->name_owner }} ({{ $customer->no_phone }})
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $customer->address }} {{-- Simplified for 'Area' --}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($customer->status == 'ACTIVE')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                                @elseif ($customer->status == 'INACTIVE')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Tidak
                                        Aktif</span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Baru</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $customer->transactions->last()->date_transaction ?? 'N/A' }}
                                {{-- Display the latest transaction date --}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('customer.detail', ['id' => $customer->id_customer]) }}"
                                    class="text-blue-600 hover:text-blue-900">Lihat Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">No customers found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $customers->links('pagination::tailwind') }} {{-- Use Tailwind CSS pagination links --}}
        </div>
    </div>
@endsection
