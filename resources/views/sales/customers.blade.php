@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Manajemen Pelanggan</h1>

    <div class="bg-white p-6 rounded-lg shadow-sm mb-8 flex flex-col md:flex-row gap-4 items-center">
        <div class="w-full md:w-1/3">
            <label for="search_customer" class="block text-sm font-medium text-gray-700 mb-1">Cari Pelanggan:</label>
            <input type="text" id="search_customer" placeholder="Nama pelanggan, ID..."
                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="w-full md:w-1/4">
            <label for="area_filter" class="block text-sm font-medium text-gray-700 mb-1">Area:</label>
            <select id="area_filter"
                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="">Semua Area</option>
                <option value="jakarta">Jakarta</option>
                <option value="bandung">Bandung</option>
                <option value="surabaya">Surabaya</option>
            </select>
        </div>
        <div class="w-full md:w-1/4">
            <label for="status_filter" class="block text-sm font-medium text-gray-700 mb-1">Status:</label>
            <select id="status_filter"
                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="">Semua Status</option>
                <option value="active">Aktif</option>
                <option value="inactive">Tidak Aktif</option>
                <option value="new">Baru</option>
            </select>
        </div>
        <div class="w-full md:w-1/4">
            <label for="last_order_filter" class="block text-sm font-medium text-gray-700 mb-1">Order Terakhir:</label>
            <select id="last_order_filter"
                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="">Semua Waktu</option>
                <option value="last_month">Bulan Terakhir</option>
                <option value="last_3_months">3 Bulan Terakhir</option>
                <option value="last_6_months">6 Bulan Terakhir</option>
            </select>
        </div>
        <button
            class="mt-4 md:mt-0 px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200 shadow-md w-full md:w-auto">Terapkan
            Filter</button>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Pelanggan Anda</h2>
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
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Toko Jaya Abadi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pak Budi (08123456789)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jakarta Pusat</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-06-10</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('customer.detail', ['id' => 1]) }}"
                                class="text-blue-600 hover:text-blue-900">Lihat Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Warung Bu Siti</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Ibu Siti (08561234567)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bandung Utara</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Tidak
                                Aktif</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-03-15</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('customer.detail', ['id' => 2]) }}"
                                class="text-blue-600 hover:text-blue-900">Lihat Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-4 text-center">
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Previous</button>
            <span class="px-4 py-2">1 / 5</span>
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Next</button>
        </div>
    </div>
@endsection
