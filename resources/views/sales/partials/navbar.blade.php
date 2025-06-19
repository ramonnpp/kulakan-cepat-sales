<header
    class="sticky top-0 z-30 bg-white/90 dark:bg-gray-900/90 backdrop-blur-xl border-b border-gray-200 dark:border-gray-700 shadow-lg">
    <!-- Background subtle texture/pattern -->
    <div
        class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23991B1B\" fill-opacity=\"0.03\"%3E%3Ccircle cx=\"20\" cy=\"20\" r=\"1\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30">
    </div>

    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Left Section: Sidebar Toggle & Logo -->
            <div class="flex items-center space-x-4">
                <button id="sidebar-toggle"
                    class="lg:hidden p-3 rounded-xl bg-white-800 text-white hover:bg-red-700 transition-all duration-300 hover:scale-105 active:scale-95 shadow-lg hover:shadow-xl"
                    aria-controls="sidebar" aria-expanded="false">
                    <span class="sr-only">Buka sidebar</span>
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z" />
                    </svg>
                </button>

            </div>

            <!-- Center Section (Tetap minimalis) -->
            <div class="hidden md:flex items-center space-x-6">
                <!-- Status Online -->
                <div
                    class="flex items-center space-x-2 bg-green-50 dark:bg-green-900/20 px-4 py-2 rounded-full border border-green-200 dark:border-green-800">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse-slow"></div>
                    <span class="text-green-700 dark:text-green-400 text-sm font-medium">Online</span>
                </div>

                <!-- Current Time -->
                <div
                    class="text-gray-600 dark:text-gray-400 text-sm font-medium bg-gray-50 dark:bg-gray-700/50 px-4 py-2 rounded-full border border-gray-200 dark:border-gray-600">
                    <span id="current-time">--:--:--</span>
                </div>
            </div>

            <!-- Right Section -->
            <div class="flex items-center space-x-3">

                <!-- Notifications -->
                <div class="relative">
                    <button id="notification-button"
                        class="relative p-3 bg-gray-50 hover:bg-red-100 dark:bg-gray-700 dark:hover:bg-red-900/30 rounded-xl text-gray-600 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300 hover:scale-105 active:scale-95 shadow-md hover:shadow-lg group">
                        <span class="sr-only">Lihat notifikasi</span>
                        <svg id="notification-bell" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            {{-- Menghapus group-hover:animate-wiggle --}}
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                        <div
                            class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 rounded-full flex items-center justify-center border-2 border-white dark:border-red-900">
                            {{-- Menghapus animate-bounce-slow --}}
                            <span class="text-xs font-bold text-white">3</span>
                        </div>
                    </button>

                    <div id="notification-dropdown"
                        class="origin-top-right absolute right-0 mt-3 w-80 bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl border border-gray-200/50 dark:border-gray-700/50 rounded-2xl shadow-2xl overflow-hidden z-20 hidden animate-slide-down">
                        <div
                            class="py-4 px-6 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-red-50 to-red-100 dark:from-red-900/50 dark:to-red-800/50">
                            <span class="font-bold text-gray-800 dark:text-gray-200 text-lg">Notifikasi</span>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">3 notifikasi baru</p>
                        </div>
                        <ul class="divide-y divide-gray-200 dark:divide-gray-700 max-h-80 overflow-y-auto">
                            <li
                                class="p-4 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors duration-200 cursor-pointer">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">Pesanan baru
                                            #12345 telah diterima.</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">5 menit lalu</p>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="p-4 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors duration-200 cursor-pointer">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-amber-500 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">Stok produk
                                            hampir habis: Teh Botol Sosro.</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">1 jam lalu</p>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="p-4 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors duration-200 cursor-pointer">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z" />
                                            <path
                                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">Pembayaran untuk
                                            pesanan #12344 gagal.</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">3 jam lalu</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div
                            class="py-3 px-6 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700/50 text-center">
                            <a href="#"
                                class="text-sm font-medium text-red-600 dark:text-red-400 hover:underline">Lihat semua
                                notifikasi</a>
                        </div>
                    </div>
                </div>

                <!-- User Profile -->
                <div class="relative">
                    <button id="user-menu-button"
                        class="flex items-center space-x-2 p-2 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-300 group"
                        aria-expanded="false">
                        <div class="relative">
                            <img class="w-10 h-10 rounded-full border-2 border-white dark:border-red-900 shadow-md group-hover:border-red-800 transition-colors duration-300"
                                src="https://randomuser.me/api/portraits/men/32.jpg" alt="User profile">
                            <div
                                class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white dark:border-red-900">
                            </div>
                        </div>
                        <div class="hidden md:block text-left">
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200">Sales Kulakan</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Sales</p>
                        </div>
                    </button>

                    <div id="user-dropdown"
                        class="origin-top-right absolute right-0 mt-3 w-56 bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl border border-gray-200/50 dark:border-gray-700/50 rounded-2xl shadow-2xl overflow-hidden z-20 hidden animate-slide-down">
                        <div class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                            <div class="flex items-center space-x-4">
                                <img class="w-12 h-12 rounded-full border-2 border-white dark:border-red-900 shadow-md"
                                    src="https://randomuser.me/api/portraits/men/32.jpg" alt="User profile">
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-gray-100">Sales Kulakan</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">sales@kulakancepat.com</p>
                                </div>
                            </div>
                        </div>
                        <ul class="py-2">
                            <li>
                                <a href="#"
                                    class="block px-6 py-3 text-sm text-gray-700 dark:text-gray-300 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors duration-200">
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Profil Saya</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-6 py-3 text-sm text-gray-700 dark:text-gray-300 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors duration-200">
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Pengaturan</span>
                                    </div>
                                </a>
                            </li>
                            <li class="border-t border-gray-200 dark:border-gray-700">
                                <form method="POST" action="#">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-6 py-3 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors duration-200">
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Keluar</span>
                                        </div>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</header>

<script>
    // Update current time
    function updateTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('id-ID', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('current-time').textContent = timeString;
    }

    setInterval(updateTime, 1000);
    updateTime();

    // Toggle notification dropdown
    const notificationButton = document.getElementById('notification-button');
    const notificationDropdown = document.getElementById('notification-dropdown');

    notificationButton.addEventListener('click', () => {
        notificationDropdown.classList.toggle('hidden');
    });

    // Toggle user dropdown
    const userMenuButton = document.getElementById('user-menu-button');
    const userDropdown = document.getElementById('user-dropdown');

    userMenuButton.addEventListener('click', () => {
        userDropdown.classList.toggle('hidden');
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', (e) => {
        if (!notificationButton.contains(e.target) && !notificationDropdown.contains(e.target)) {
            notificationDropdown.classList.add('hidden');
        }

        if (!userMenuButton.contains(e.target) && !userDropdown.contains(e.target)) {
            userDropdown.classList.add('hidden');
        }
    });

    // Toggle sidebar - Disesuaikan untuk manipulasi kelas transform
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebar = document.getElementById('sidebar'); // Ambil elemen sidebar

    sidebarToggle.addEventListener('click', () => {
        // Periksa apakah sidebar saat ini tertutup di mobile (-translate-x-full)
        const isClosedMobile = sidebar.classList.contains('-translate-x-full');

        if (isClosedMobile) {
            // Buka sidebar: hapus -translate-x-full, tambahkan translate-x-0
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('translate-x-0');
        } else {
            // Tutup sidebar: tambahkan -translate-x-full, hapus translate-x-0
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
        }

        // Perbarui aria-expanded untuk aksesibilitas
        sidebarToggle.setAttribute('aria-expanded', !isClosedMobile);
    });
</script>
