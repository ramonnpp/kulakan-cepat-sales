@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Dashboard Utama</h1>

    {{-- Grid Responsif dengan Efek --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div
            class="bg-white p-6 rounded-lg shadow-sm border border-blue-200 transform transition duration-300 hover:shadow-lg hover:scale-105 cursor-pointer">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Progres Target Penjualan</h2>
            <div class="flex items-center">
                <div class="relative w-24 h-24">
                    <div
                        class="w-full h-full rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-2xl font-bold">
                        75%</div>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Target: Rp 200.000.000</p>
                    <p class="text-lg font-bold text-blue-700">Rp 150.000.000</p>
                </div>
            </div>
            <p class="text-xs text-gray-500 mt-2">Update terakhir: Hari ini</p>
        </div>

        <div
            class="bg-white p-6 rounded-lg shadow-sm border border-green-200 transform transition duration-300 hover:shadow-lg hover:scale-105 cursor-pointer">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Estimasi Komisi</h2>
            <p class="text-4xl font-bold text-green-600">Rp 15.000.000</p>
            <p class="text-sm text-gray-500 mt-2">Berdasarkan penjualan bulan ini</p>
        </div>

        <div
            class="bg-white p-6 rounded-lg shadow-sm border border-purple-200 transform transition duration-300 hover:shadow-lg hover:scale-105 cursor-pointer">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Pesanan Baru (Bulan Ini)</h2>
            <p class="text-4xl font-bold text-purple-600">125</p>
            <p class="text-sm text-gray-500 mt-2">Peningkatan 10% dari bulan lalu</p>
        </div>

        <div
            class="bg-white p-6 rounded-lg shadow-sm border border-yellow-200 transform transition duration-300 hover:shadow-lg hover:scale-105 cursor-pointer">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Potensi Pendapatan</h2>
            <p class="text-4xl font-bold text-yellow-600">Rp 25.000.000</p>
            <p class="text-sm text-gray-500 mt-2">Dari prospek aktif</p>
        </div>
    </div>

    {{-- Grid Responsif untuk Bagian Bawah --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-sm transform transition duration-300 hover:shadow-lg hover:scale-105">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Penjualan Bulanan</h2>
            <div class="h-64 bg-gray-50 flex items-center justify-center text-gray-400">
                Grafik Penjualan Bulanan (akan diisi dengan library JS)
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm transform transition duration-300 hover:shadow-lg hover:scale-105">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Produk Terlaris</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Produk A <span class="float-right font-semibold text-blue-600">120 Unit</span></li>
                <li>Produk B <span class="float-right font-semibold text-blue-600">95 Unit</span></li>
                <li>Produk C <span class="float-right font-semibold text-blue-600">80 Unit</span></li>
                <li>Produk D <span class="float-right font-semibold text-blue-600">70 Unit</span></li>
                <li>Produk E <span class="float-right font-semibold text-blue-600">65 Unit</span></li>
            </ul>
            <button
                class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 hover:brightness-95 transition duration-300">Lihat
                Semua Produk</button>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm transform transition duration-300 hover:shadow-lg hover:scale-105">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Pelanggan Kontributor Terbesar</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>PT Abadi Jaya <span class="float-right font-semibold text-green-600">Rp 50.000.000</span></li>
                <li>CV Maju Bersama <span class="float-right font-semibold text-green-600">Rp 35.000.000</span></li>
                <li>UD Sejahtera <span class="float-right font-semibold text-green-600">Rp 20.000.000</span></li>
                <li>Toko Ramai <span class="float-right font-semibold text-green-600">Rp 15.000.000</span></li>
            </ul>
            <button
                class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 hover:brightness-95 transition duration-300">Lihat
                Semua Pelanggan</button>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm transform transition duration-300 hover:shadow-lg hover:scale-105">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Wawasan & Rekomendasi</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Fokus pada penjualan Produk F, permintaannya meningkat 20% minggu ini.</li>
                <li>Hubungi pelanggan "PT Makmur Jaya" yang sudah 3 bulan tidak melakukan pembelian.</li>
                <li>Perluas jangkauan ke area "Depok", potensinya belum tergarap maksimal.</li>
            </ul>
            <button
                class="mt-4 px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 hover:brightness-95 transition duration-300">Lihat
                Lebih Banyak Wawasan</button>
        </div>
    </div>
@endsection
