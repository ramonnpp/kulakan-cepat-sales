@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Profil Pelanggan</h1>

    <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
        <div class="flex items-center mb-4">
            <div class="flex-shrink-0">
                <img class="h-16 w-16 rounded-full" src="https://via.placeholder.com/150/0000FF/FFFFFF?text=TA"
                    alt="{{ $customer->name_store }}">
            </div>
            <div class="ml-4">
                <h2 class="text-2xl font-semibold text-gray-800">{{ $customer->name_store }}</h2>
                <p class="text-gray-600">ID Pelanggan: {{ $customer->id_customer }}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
            <div>
                <p class="font-semibold">Info Kontak:</p>
                <p>Nama Owner: {{ $customer->name_owner }}</p>
                <p>Telepon: {{ $customer->no_phone }}</p>
                <p>Email: {{ $customer->email }}</p>
            </div>
            <div>
                <p class="font-semibold">Alamat:</p>
                <p>{{ $customer->address }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <button id="tab-riwayat-pesanan"
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-blue-600 border-blue-500 focus:outline-none">Riwayat
                    Pesanan</button>
                <button id="tab-produk-favorit"
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none">Produk
                    Paling Sering Dibeli</button>
                <button id="tab-catatan-kunjungan"
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none">Catatan
                    Kunjungan</button>
            </nav>
        </div>

        <div id="content-riwayat-pesanan" class="py-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Riwayat Pesanan Lengkap</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID
                                Pesanan</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tanggal</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Detail</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($customer->transactions as $transaction)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $transaction->id_transaction }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $transaction->date_transaction->format('Y-m-d') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">Rp
                                    {{ number_format($transaction->total_price, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @php
                                        $statusClass = '';
                                        switch ($transaction->status) {
                                            case 'FINISH':
                                                $statusClass = 'bg-green-100 text-green-800';
                                                break;
                                            case 'CANCEL':
                                                $statusClass = 'bg-red-100 text-red-800';
                                                break;
                                            case 'PROCESS':
                                                $statusClass = 'bg-blue-100 text-blue-800';
                                                break;
                                            case 'WAITING_CONFIRMATION':
                                                $statusClass = 'bg-yellow-100 text-yellow-800';
                                                break;
                                            case 'SEND':
                                                $statusClass = 'bg-purple-100 text-purple-800';
                                                break;
                                            default:
                                                $statusClass = 'bg-gray-100 text-gray-800';
                                                break;
                                        }
                                    @endphp
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                        {{ str_replace('_', ' ', $transaction->status) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="#" class="text-blue-600 hover:text-blue-900">Lihat</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada riwayat pesanan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div id="content-produk-favorit" class="py-6 hidden">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Produk Paling Sering Dibeli</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                @forelse ($mostBoughtProducts as $product)
                    <li>{{ $product->name_product }} ({{ $product->total_quantity }} unit)</li>
                @empty
                    <li>Tidak ada produk favorit yang tercatat.</li>
                @endforelse
            </ul>
        </div>

        <div id="content-catatan-kunjungan" class="py-6 hidden">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Catatan Kunjungan</h3>
            <div class="space-y-4 mb-6">
                @forelse ($customer->visitNotes as $note)
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                        <p class="text-sm text-gray-500 mb-2">
                            {{ $note->created_at->format('Y-m-d H:i') }} |
                            {{ $note->interaction_type }}
                            @if ($note->salesPerson)
                                ({{ $note->salesPerson->name }})
                            @endif
                        </p>
                        <p class="text-gray-800">{{ $note->note_text }}</p>
                    </div>
                @empty
                    <p class="text-gray-500">Belum ada catatan kunjungan untuk pelanggan ini.</p>
                @endforelse
            </div>
            <button id="show_add_note_form_button"
                class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition duration-200">Tambah
                Catatan Baru</button>

            <div id="add_note_form" class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200 hidden">
                <h3 class="text-lg font-semibold text-blue-800 mb-3">Tambah Catatan Kunjungan Baru</h3>
                <form action="{{ route('customer.storeVisitNote', ['id' => $customer->id_customer]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="interaction_type" class="block text-sm font-medium text-gray-700 mb-1">Tipe
                            Interaksi:</label>
                        <select name="interaction_type" id="interaction_type" required
                            class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 @error('interaction_type') border-red-500 @enderror">
                            <option value="">Pilih Tipe Interaksi</option>
                            <option value="Kunjungan Langsung"
                                {{ old('interaction_type') == 'Kunjungan Langsung' ? 'selected' : '' }}>Kunjungan Langsung
                            </option>
                            <option value="Telepon" {{ old('interaction_type') == 'Telepon' ? 'selected' : '' }}>Telepon
                            </option>
                            <option value="Email" {{ old('interaction_type') == 'Email' ? 'selected' : '' }}>Email
                            </option>
                            <option value="WhatsApp" {{ old('interaction_type') == 'WhatsApp' ? 'selected' : '' }}>WhatsApp
                            </option>
                            <option value="Lainnya" {{ old('interaction_type') == 'Lainnya' ? 'selected' : '' }}>Lainnya
                            </option>
                        </select>
                        @error('interaction_type')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="note_text" class="block text-sm font-medium text-gray-700 mb-1">Catatan:</label>
                        <textarea name="note_text" id="note_text"
                            class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 @error('note_text') border-red-500 @enderror"
                            rows="4" placeholder="Tulis catatan Anda di sini..." required>{{ old('note_text') }}</textarea>
                        @error('note_text')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end gap-2">
                        <button type="button" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400"
                            onclick="document.getElementById('add_note_form').classList.add('hidden'); document.getElementById('show_add_note_form_button').classList.remove('hidden');">Batal</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan
                            Catatan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('nav button');
            const contents = {
                'tab-riwayat-pesanan': 'content-riwayat-pesanan',
                'tab-produk-favorit': 'content-produk-favorit',
                'tab-catatan-kunjungan': 'content-catatan-kunjungan'
            };

            function showContent(tabId) {
                // Remove active styles from all tabs
                tabs.forEach(tab => {
                    tab.classList.remove('text-blue-600', 'border-blue-500');
                    tab.classList.add('text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
                });

                // Hide all content divs
                for (const key in contents) {
                    document.getElementById(contents[key]).classList.add('hidden');
                }

                // Add active styles to the clicked tab
                document.getElementById(tabId).classList.remove('text-gray-500', 'hover:text-gray-700',
                    'hover:border-gray-300');
                document.getElementById(tabId).classList.add('text-blue-600', 'border-blue-500');

                // Show the corresponding content div
                document.getElementById(contents[tabId]).classList.remove('hidden');
            }

            // Set default active tab
            showContent('tab-riwayat-pesanan');

            // Add event listeners for tabs
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    showContent(this.id);
                });
            });

            // Toggle add note form
            const showAddNoteFormButton = document.getElementById('show_add_note_form_button');
            const addNoteForm = document.getElementById('add_note_form');
            if (showAddNoteFormButton && addNoteForm) {
                showAddNoteFormButton.addEventListener('click', function() {
                    addNoteForm.classList.remove('hidden');
                    this.classList.add('hidden'); // Hide the add button
                });
            }

            // If there's an error from form submission, show the form and activate the tab
            @if ($errors->any() || (session('error') && old('note_text'))) // Changed 'note' to 'note_text'
                document.getElementById('content-catatan-kunjungan').classList.remove('hidden');
                document.getElementById('add_note_form').classList.remove('hidden');
                document.getElementById('show_add_note_form_button').classList.add('hidden');
                showContent('tab-catatan-kunjungan');
            @endif
        });
    </script>
@endpush
