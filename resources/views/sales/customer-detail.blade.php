@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Profil Pelanggan</h1>

    <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
        <div class="flex items-center mb-4">
            <div class="flex-shrink-0">
                <img class="h-16 w-16 rounded-full" src="https://via.placeholder.com/150/0000FF/FFFFFF?text=TA"
                    alt="Toko Abadi">
            </div>
            <div class="ml-4">
                <h2 class="text-2xl font-semibold text-gray-800">Toko Jaya Abadi</h2>
                <p class="text-gray-600">ID Pelanggan: CUST001</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
            <div>
                <p class="font-semibold">Info Kontak:</p>
                <p>Nama PIC: Pak Budi</p>
                <p>Telepon: 0812-3456-7890</p>
                <p>Email: budi@jayaabadi.com</p>
            </div>
            <div>
                <p class="font-semibold">Alamat:</p>
                <p>Jl. Merdeka No. 10</p>
                <p>RT 01 RW 02, Kel. Sukamaju, Kec. Cempaka Putih</p>
                <p>Jakarta Pusat, 10510</p>
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
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">ORD00123</td>
                            <td class="px-6 py-4 whitespace-nowrap">2025-06-10</td>
                            <td class="px-6 py-4 whitespace-nowrap">Rp 5.000.000</td>
                            <td class="px-6 py-4 whitespace-nowrap"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"><a href="#"
                                    class="text-blue-600 hover:text-blue-900">Lihat</a></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">ORD00122</td>
                            <td class="px-6 py-4 whitespace-nowrap">2025-05-20</td>
                            <td class="px-6 py-4 whitespace-nowrap">Rp 3.500.000</td>
                            <td class="px-6 py-4 whitespace-nowrap"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"><a href="#"
                                    class="text-blue-600 hover:text-blue-900">Lihat</a></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">ORD00121</td>
                            <td class="px-6 py-4 whitespace-nowrap">2025-04-01</td>
                            <td class="px-6 py-4 whitespace-nowrap">Rp 2.000.000</td>
                            <td class="px-6 py-4 whitespace-nowrap"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Dibatalkan</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"><a href="#"
                                    class="text-blue-600 hover:text-blue-900">Lihat</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="content-produk-favorit" class="py-6 hidden">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Produk Paling Sering Dibeli</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Sabun Cair Wangi (250 unit)</li>
                <li>Pembersih Lantai Super (180 unit)</li>
                <li>Shampoo Anti Ketombe (150 unit)</li>
            </ul>
        </div>

        <div id="content-catatan-kunjungan" class="py-6 hidden">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Catatan Kunjungan</h3>
            <div class="space-y-4 mb-6">
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <p class="text-sm text-gray-500 mb-2">2025-06-12 | Interaksi Telepon</p>
                    <p class="text-gray-800">Pak Budi berencana membuka cabang baru bulan depan di area Pondok Indah.
                        Meminta penawaran khusus untuk produk X dan Y.</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <p class="text-sm text-gray-500 mb-2">2025-06-05 | Kunjungan Langsung</p>
                    <p class="text-gray-800">Ibu Siti menanyakan promo Lebaran yang akan datang. Perlu dikirimkan katalog
                        promo terbaru via WhatsApp.</p>
                </div>
            </div>
            <button class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition duration-200">Tambah
                Catatan Baru</button>

            <div id="add_note_form" class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200 hidden">
                <h3 class="text-lg font-semibold text-blue-800 mb-3">Tambah Catatan Kunjungan Baru</h3>
                <textarea class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 mb-3"
                    rows="4" placeholder="Tulis catatan Anda di sini..."></textarea>
                <div class="flex justify-end gap-2">
                    <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400"
                        onclick="document.getElementById('add_note_form').classList.add('hidden')">Batal</button>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan Catatan</button>
                </div>
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
            const addNoteButton = document.querySelector('#content-catatan-kunjungan button.bg-green-600');
            const addNoteForm = document.getElementById('add_note_form');
            if (addNoteButton && addNoteForm) {
                addNoteButton.addEventListener('click', function() {
                    addNoteForm.classList.remove('hidden');
                });
            }
        });
    </script>
@endpush
