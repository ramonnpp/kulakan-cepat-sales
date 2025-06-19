@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Materi Penjualan</h1>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Dokumen & Materi Pendukung Penjualan</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="border border-gray-200 rounded-lg p-4 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow duration-200">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Panduan Produk Terbaru Q3 2025</h3>
                    <p class="text-sm text-gray-600 mb-3">Dokumen ini berisi informasi detail produk baru, fitur unggulan,
                        dan keunggulan kompetitif.</p>
                </div>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span><i class="fas fa-file-pdf mr-1"></i> PDF</span>
                    <a href="#" class="text-blue-600 hover:underline">Unduh</a>
                </div>
            </div>

            <div
                class="border border-gray-200 rounded-lg p-4 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow duration-200">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Presentasi Penawaran Grosir</h3>
                    <p class="text-sm text-gray-600 mb-3">Slide presentasi untuk menjelaskan paket penawaran grosir kepada
                        calon pelanggan besar.</p>
                </div>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span><i class="fas fa-file-powerpoint mr-1"></i> PPTX</span>
                    <a href="#" class="text-blue-600 hover:underline">Unduh</a>
                </div>
            </div>

            <div
                class="border border-gray-200 rounded-lg p-4 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow duration-200">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Studi Kasus: Peningkatan Penjualan Warung A</h3>
                    <p class="text-sm text-gray-600 mb-3">Contoh studi kasus nyata bagaimana produk kita membantu
                        meningkatkan omset pelanggan.</p>
                </div>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span><i class="fas fa-file-alt mr-1"></i> DOCX</span>
                    <a href="#" class="text-blue-600 hover:underline">Unduh</a>
                </div>
            </div>

            <div
                class="border border-gray-200 rounded-lg p-4 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow duration-200">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Video Tutorial Penggunaan Aplikasi</h3>
                    <p class="text-sm text-gray-600 mb-3">Video pendek untuk membantu pelanggan memahami cara menggunakan
                        aplikasi pemesanan.</p>
                </div>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span><i class="fas fa-video mr-1"></i> MP4</span>
                    <a href="#" class="text-blue-600 hover:underline">Tonton / Unduh</a>
                </div>
            </div>
        </div>
    </div>
@endsection
