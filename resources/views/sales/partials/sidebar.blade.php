<aside id="sidebar"
    class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-auto lg:overflow-y-auto no-scrollbar w-64 lg:w-20 xl:w-64 shrink-0 bg-[#11101d] p-4 transition-all duration-300 ease-in-out -translate-x-full shadow-2xl border-r border-gray-800">

    <div class="flex justify-center mb-8 pr-3 sm:px-2">
        <a class="group flex items-center" href="">
            <img src="{{ asset('img/Logo Kulakan/1x/Artboard 1 copy 3.png') }}" alt="Logo Kulakan"
                class="w-20 h-auto transition-transform duration-300 group-hover:scale-110">
            <span class="ml-3 text-white text-xl font-bold lg:hidden xl:inline">Sales Kulakan</span>
        </a>
    </div>

    <div class="space-y-2">
        <a href="{{ '/sales' }}"
            class="group flex items-center px-3 py-3 text-sm font-medium
            rounded-xl transition-all duration-300
            {{ request()->routeIs('sales.dashboard') ? 'bg-[#1d1b2e] text-white shadow-md' : 'text-gray-300 hover:bg-[#1d1b2e] hover:text-white' }}">
            <div
                class="p-2 rounded-lg {{ request()->routeIs('sales.dashboard') ? 'bg-white/10' : 'group-hover:bg-white/10' }} transition-all duration-300">
                <svg class="h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </div>
            <span class="ml-3 lg:hidden xl:inline">Dashboard</span>
        </a>
        <a href="{{ '/sales/customers' }}"
            class="group flex items-center px-3 py-3 text-sm font-medium rounded-xl transition-all duration-300 {{ request()->routeIs('customers.index') || request()->routeIs('customer.detail') || request()->routeIs('customer.editStatus') ? 'bg-[#1d1b2e] text-white shadow-md' : 'text-gray-300 hover:bg-[#1d1b2e] hover:text-white' }}">
            <div
                class="p-2 rounded-lg {{ request()->routeIs('customers.index') || request()->routeIs('customer.detail') || request()->routeIs('customer.editStatus') ? 'bg-white/10' : 'group-hover:bg-white/10' }} transition-all duration-300">
                <svg class="h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 016-6h6a6 6 0 016 6v1h-3M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <span class="ml-3 lg:hidden xl:inline">Manajemen Customers</span>
        </a>

        {{-- BARU: Menu untuk Laporan Kinerja Pribadi --}}
        <a href="{{ route('sales.performance_report') }}"
            class="group flex items-center px-3 py-3 text-sm font-medium rounded-xl transition-all duration-300 {{ request()->routeIs('sales.performance_report') ? 'bg-[#1d1b2e] text-white shadow-md' : 'text-gray-300 hover:bg-[#1d1b2e] hover:text-white' }}">
            <div
                class="p-2 rounded-lg {{ request()->routeIs('sales.performance_report') ? 'bg-white/10' : 'group-hover:bg-white/10' }} transition-all duration-300">
                <svg class="h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
            </div>
            <span class="ml-3 lg:hidden xl:inline">Laporan Kinerja</span>
        </a>

        {{-- BARU: Menu untuk Jadwal Kunjungan --}}
        <a href="{{ route('sales.visit_schedule') }}"
            class="group flex items-center px-3 py-3 text-sm font-medium rounded-xl transition-all duration-300 {{ request()->routeIs('sales.visit_schedule') ? 'bg-[#1d1b2e] text-white shadow-md' : 'text-gray-300 hover:bg-[#1d1b2e] hover:text-white' }}">
            <div
                class="p-2 rounded-lg {{ request()->routeIs('sales.visit_schedule') ? 'bg-white/10' : 'group-hover:bg-white/10' }} transition-all duration-300">
                <svg class="h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <span class="ml-3 lg:hidden xl:inline">Jadwal Kunjungan</span>
        </a>

        {{-- BARU: Menu untuk Materi Penjualan --}}
        <a href="{{ route('sales.sales_material') }}"
            class="group flex items-center px-3 py-3 text-sm font-medium rounded-xl transition-all duration-300 {{ request()->routeIs('sales.sales_material') ? 'bg-[#1d1b2e] text-white shadow-md' : 'text-gray-300 hover:bg-[#1d1b2e] hover:text-white' }}">
            <div
                class="p-2 rounded-lg {{ request()->routeIs('sales.sales_material') ? 'bg-white/10' : 'group-hover:bg-white/10' }} transition-all duration-300">
                <svg class="h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
            </div>
            <span class="ml-3 lg:hidden xl:inline">Materi Penjualan</span>
        </a>

        <div class="pt-4 mt-4 border-t border-gray-800">
            <form method="POST" action="#">
                @csrf
                <button type="submit"
                    class="group w-full flex items-center px-3 py-3 text-sm font-medium rounded-xl text-gray-300 hover:bg-[#1d1b2e] hover:text-white transition-all duration-300">
                    <div class="p-2 rounded-lg group-hover:bg-white/10 transition-all duration-300">
                        <svg class="h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </div>
                    <span class="ml-3 lg:hidden xl:inline">Logout</span>
                </button>
            </form>
        </div>
    </div>
</aside>
