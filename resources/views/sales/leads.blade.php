@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Add Customers</h1>
    <div class="mb-6 flex justify-end">
        <button id="add_lead_button"
            class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200 shadow-md">Add
            New Customer</button>
    </div>

    <div id="new_lead_form" class="bg-white p-6 rounded-lg shadow-sm mb-8 hidden">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Form New Customers </h2>
        <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="lead_name" class="block text-sm font-medium text-gray-700 mb-1">Nama Prospek
                        (Toko/Perusahaan):</label>
                    <input type="text" id="lead_name"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="pic_name" class="block text-sm font-medium text-gray-700 mb-1">Nama PIC:</label>
                    <input type="text" id="pic_name"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="pic_phone" class="block text-sm font-medium text-gray-700 mb-1">Telepon PIC:</label>
                    <input type="tel" id="pic_phone"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="lead_email" class="block text-sm font-medium text-gray-700 mb-1">Email (Opsional):</label>
                    <input type="email" id="lead_email"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>
            <div class="mb-4">
                <label for="lead_address" class="block text-sm font-medium text-gray-700 mb-1">Alamat Prospek:</label>
                <textarea id="lead_address" rows="3"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div class="mb-6">
                <label for="lead_notes" class="block text-sm font-medium text-gray-700 mb-1">Catatan Tambahan:</label>
                <textarea id="lead_notes" rows="3"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" id="cancel_add_lead"
                    class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Batal</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan
                    Prospek</button>
            </div>
        </form>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Customers Anda</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                            Prospek</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PIC &
                            Kontak</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat
                            Singkat</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Toko Baru Makmur</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bpk. Andi (087812345678)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jl. Pahlawan No. 5</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Baru</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="#" class="text-green-600 hover:text-green-900">Konversi</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Kios Sembako Untung</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Ibu Mia (081398765432)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pasar Tradisional A</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Menunggu
                                Persetujuan</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="#"
                                class="text-green-600 hover:text-green-900 opacity-50 cursor-not-allowed">Konversi</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-4 text-center">
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Previous</button>
            <span class="px-4 py-2">1 / 3</span>
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Next</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addLeadButton = document.getElementById('add_lead_button');
            const newLeadForm = document.getElementById('new_lead_form');
            const cancelAddLeadButton = document.getElementById('cancel_add_lead');

            if (addLeadButton && newLeadForm && cancelAddLeadButton) {
                addLeadButton.addEventListener('click', function() {
                    newLeadForm.classList.remove('hidden');
                    this.classList.add('hidden'); // Hide the add button
                });

                cancelAddLeadButton.addEventListener('click', function() {
                    newLeadForm.classList.add('hidden');
                    addLeadButton.classList.remove('hidden'); // Show the add button again
                });
            }
        });
    </script>
@endpush
