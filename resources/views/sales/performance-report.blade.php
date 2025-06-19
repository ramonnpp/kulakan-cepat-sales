@extends('sales/layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-6">Laporan Kinerja Pribadi</h1>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Ringkasan Kinerja Anda</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-blue-50 p-4 rounded-lg shadow-sm">
                <p class="text-sm text-gray-600">Total Penjualan Bulan Ini:</p>
                <p class="text-2xl font-bold text-blue-700">Rp 150.000.000</p>
            </div>
            <div class="bg-green-50 p-4 rounded-lg shadow-sm">
                <p class="text-sm text-gray-600">Pencapaian Target:</p>
                <p class="text-2xl font-bold text-green-700">75%</p>
            </div>
            <div class="bg-yellow-50 p-4 rounded-lg shadow-sm">
                <p class="text-sm text-gray-600">Jumlah Pelanggan Baru:</p>
                <p class="text-2xl font-bold text-yellow-700">15</p>
            </div>
        </div>

        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Grafik Penjualan Bulanan</h3>
        <div class="h-80 bg-gray-100 flex items-center justify-center text-gray-400 rounded-lg p-4">
            <canvas id="monthlySalesChart"></canvas> {{-- Placeholder for the chart --}}
        </div>

        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Produk Terlaris Anda</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
            <li>Produk X - 500 unit</li>
            <li>Produk Y - 300 unit</li>
            <li>Produk Z - 200 unit</li>
        </ul>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('monthlySalesChart');

            if (ctx) {
                new Chart(ctx, {
                    type: 'line', // Jenis grafik: garis
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt',
                            'Nov', 'Des'
                        ],
                        datasets: [{
                            label: 'Penjualan (Juta Rp)',
                            data: [100, 120, 150, 130, 180, 200, 190, 220, 250, 230, 270,
                            300], // Data dummy
                            borderColor: 'rgb(59, 130, 246)', // Warna garis biru
                            backgroundColor: 'rgba(59, 130, 246, 0.2)', // Warna area di bawah garis
                            tension: 0.3, // Kehalusan garis
                            fill: true // Mengisi area di bawah garis
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false, // Penting agar grafik mengisi div parent
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Nilai Penjualan (Juta Rp)'
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Bulan'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        let label = context.dataset.label || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        if (context.parsed.y !== null) {
                                            label += 'Rp ' + context.parsed.y + '.000.000';
                                        }
                                        return label;
                                    }
                                }
                            }
                        }
                    }
                });
            }
        });
    </script>
@endpush
