{{-- File: resources/views/sales/leads.blade.php --}}

@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Add Customers</h1>
    <div class="mb-6 flex justify-end">
        <button id="add_lead_button"
            class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200 shadow-md">Add
            New Customer</button>
    </div>
    {{-- BARU: Bagian untuk menampilkan daftar customer yang sudah ada sebagai referensi --}}
    <div class="bg-white p-6 rounded-lg shadow-sm mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Pelanggan yang Sudah Terdaftar</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Toko
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                            Owner
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telepon
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($customers as $customer)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $customer->name_store }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $customer->name_owner }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $customer->no_phone }}</td>
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
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Menunggu
                                        Persetujuan</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('customer.editStatus', ['id' => $customer->id_customer]) }}"
                                    class="text-indigo-600 hover:text-indigo-900 mr-2">Edit Status</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada pelanggan terdaftar.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{-- AKHIR BARU --}}



    <div id="new_lead_form" class="bg-white p-6 rounded-lg shadow-sm mb-8 hidden">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Form New Customers </h2>
        <form action="{{ route('leads.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="name_store" class="block text-sm font-medium text-gray-700 mb-1">Nama Prospek
                        (Toko/Perusahaan):</label>
                    <input type="text" id="name_store" name="name_store" value="{{ old('name_store') }}" required
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('name_store') border-red-500 @enderror">
                    @error('name_store')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="name_owner" class="block text-sm font-medium text-gray-700 mb-1">Nama PIC:</label>
                    <input type="text" id="name_owner" name="name_owner" value="{{ old('name_owner') }}" required
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('name_owner') border-red-500 @enderror">
                    @error('name_owner')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="no_phone" class="block text-sm font-medium text-gray-700 mb-1">Telepon PIC:</label>
                    <input type="tel" id="no_phone" name="no_phone" value="{{ old('no_phone') }}" required
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('no_phone') border-red-500 @enderror">
                    @error('no_phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email (Opsional):</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password:</label>
                <input type="password" id="password" name="password" required
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat Prospek:</label>
                <textarea id="address" name="address" rows="3" required
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('address') border-red-500 @enderror">{{ old('address') }}</textarea>
                @error('address')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Catatan Tambahan:</label>
                <textarea id="notes" name="notes" rows="3"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('notes') }}</textarea>
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" id="cancel_add_lead"
                    class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Batal</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan
                    Prospek</button>
            </div>
        </form>
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

                    // Display form if there are validation errors
                    @if ($errors->any() || session('error'))
                        newLeadForm.classList.remove('hidden');
                        addLeadButton.classList.add('hidden');
                    @endif
                }
            });
        </script>
    @endpush
