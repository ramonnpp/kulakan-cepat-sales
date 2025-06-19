@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Jadwal Kunjungan</h1>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Jadwal Kunjungan Anda Minggu Ini</h2>

        <div class="mb-4">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah Jadwal Baru</button>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pelanggan
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tujuan
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2025-06-20</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10:00 - 11:00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Toko Jaya Abadi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jl. Contoh No. 123, Jakarta</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Follow-up Penawaran</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-900">Batal</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2025-06-21</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14:00 - 15:00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Warung Barokah</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jl. Damai No. 45, Bandung</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Presentasi Produk Baru</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Lihat Catatan</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
