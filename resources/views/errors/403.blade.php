<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Kamu Ditolak</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 dark:bg-gray-900 font-sans">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div
            class="w-full max-w-lg bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-2xl border border-gray-200 dark:border-gray-700 text-center">

            <div class="mx-auto w-16 h-16 flex items-center justify-center rounded-full bg-red-100 mb-4">
                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                </svg>
            </div>

            <h1 class="text-4xl font-extrabold text-gray-800 dark:text-white">403</h1>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mt-2">Akses Ditolak</h2>
            <p class="text-gray-500 dark:text-gray-400 mt-2">Anda tidak memiliki izin untuk melakukan tindakan ini.</p>

            {{-- BAGIAN DEBUGGING --}}
            @isset($loggedInSalesId, $scheduleOwnerId)
                <div class="mt-6 text-left bg-gray-50 dark:bg-gray-700 p-4 rounded-lg border dark:border-gray-600">
                    <h4 class="font-bold text-gray-700 dark:text-gray-200">Informasi Debug:</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Sistem memblokir aksi ini karena ID tidak cocok.</p>
                    <div class="mt-2 text-sm">
                        <p>ID Sales yang sedang login: <strong
                                class="text-lg text-blue-500">{{ $loggedInSalesId ?? 'Tidak terdeteksi' }}</strong></p>
                        <p>ID Sales pemilik jadwal: <strong
                                class="text-lg text-red-500">{{ $scheduleOwnerId ?? 'Tidak ada' }}</strong></p>
                    </div>
                </div>
                <div class="mt-4 text-left text-xs text-gray-400">
                    <strong>Solusi:</strong> Pastikan nilai "ID Sales pemilik jadwal" sama dengan "ID Sales yang sedang
                    login" di tabel `visit_schedules` pada database Anda.
                </div>
            @endisset

            <a href="{{ url()->previous() }}"
                class="mt-8 inline-block w-full px-6 py-3 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700">
                Kembali ke Halaman Sebelumnya
            </a>
        </div>
    </div>
</body>

</html>
