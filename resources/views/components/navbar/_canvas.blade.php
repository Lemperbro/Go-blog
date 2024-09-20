<div id="sidebarNav"
    class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-e dark:bg-mainDark dark:border-neutral-700"
    tabindex="-1" data-hs-overlay-close-on-resize>
    <div class="flex justify-end items-center py-3 px-4  ">

        <button type="button"
            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
            data-hs-overlay="#sidebarNav">
            <span class="sr-only">Close modal</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
    </div>
    <div class="p-4">
        <ul class="text-gray-600 dark:text-gray-300 flex flex-col gap-1">
            <x-navbar.navlink :active="request()->routeIs('home')" href="{{ route('home') }}" :color_aktif="'text-gray-900 dark:text-white'"
                class="p-2 {{ request()->routeIs('home') ? 'bg-gray-100 dark:bg-mainDark3' : '' }}  hover:bg-gray-100 dark:hover:bg-mainDark3 hover:text-gray-900 dark:text-white rounded-md !flex items-center gap-2">
                <i class="ri-home-2-{{ request()->routeIs('home') ? 'fill' : 'line' }} text-xl"></i>
                <span class="mt-0.5">Home</span>
            </x-navbar.navlink>
            <x-navbar.navlink :active="request()->routeIs('article')" href="{{ route('article') }}" :color_aktif="'text-gray-900 dark:text-white'"
                class="p-2 {{ request()->routeIs('article') ? 'bg-gray-100 dark:bg-mainDark3' : '' }} hover:bg-gray-100 dark:hover:bg-mainDark3 hover:text-gray-900 dark:text-white rounded-md !flex items-center gap-2">
                <i class="ri-article-{{ request()->routeIs('article') ? 'fill' : 'line' }} text-xl "></i>
                <span class="mt-0.5">Article</span>
            </x-navbar.navlink>
            
            <x-navbar.navlink :active="request()->routeIs('tags') || request()->routeIs('tags*')" href="{{ route('tags') }}" :color_aktif="'text-gray-900 dark:text-white'"
                class="p-2 {{ request()->routeIs('tags') || request()->routeIs('tags*') ? 'bg-gray-100 dark:bg-mainDark3' : '' }} hover:bg-gray-100 dark:hover:bg-mainDark3 hover:text-gray-900 dark:text-white rounded-md !flex items-center gap-2">
                <i
                    class="ri-book-2-{{ request()->routeIs('tags') || request()->routeIs('tags*') ? 'fill' : 'line' }} text-xl "></i>
                <span class="mt-0.5">Tags</span>
            </x-navbar.navlink>
            <x-navbar.navlink :active="request()->routeIs('about')" href="{{ route('about') }}" :color_aktif="'text-gray-900 dark:text-white'"
                class="p-2 {{ request()->routeIs('about') ? 'bg-gray-100 dark:bg-mainDark3' : '' }} hover:bg-gray-100 dark:hover:bg-mainDark3 hover:text-gray-900 dark:text-white rounded-md !flex items-center gap-2">
                <i class="ri-article-{{ request()->routeIs('about') ? 'fill' : 'line' }} text-xl "></i>
                <span class="mt-0.5">About</span>
            </x-navbar.navlink>

            <div class="py-2 border-y-[1px] border-gray-300 dark:border-borderDark">
                <x-navbar.navlink :active="request()->routeIs('about')" href="{{ route('about') }}" :color_aktif="'text-gray-900 dark:text-white'"
                    class="p-2 {{ request()->routeIs('about') ? 'bg-gray-100 dark:bg-mainDark3' : '' }} hover:bg-gray-100 dark:hover:bg-mainDark3 hover:text-gray-900 dark:text-white rounded-md !flex items-center gap-2">
                    <i class="ri-dashboard-{{ request()->routeIs('about') ? 'fill' : 'line' }} text-xl"></i>
                    <span class="mt-0.5">Dashboard</span>
                </x-navbar.navlink>
                <x-navbar.navlink :active="request()->routeIs('about')" href="{{ route('about') }}" :color_aktif="'text-gray-900 dark:text-white'"
                    class="p-2 {{ request()->routeIs('about') ? 'bg-gray-100 dark:bg-mainDark3' : '' }} hover:bg-gray-100 dark:hover:bg-mainDark3 hover:text-gray-900 dark:text-white rounded-md !flex items-center gap-2 justify-between">
                    <div class="flex items-center gap-2">
                        <i class="ri-bookmark-{{ request()->routeIs('about') ? 'fill' : 'line' }} text-xl"></i>
                        <span class="mt-0.5">Bookmark</span>
                    </div>
                    <span class="bg-gray-100 dark:bg-mainDark4 text-xs p-1 rounded-md">10</span>
                </x-navbar.navlink>
                <x-navbar.navlink :active="request()->routeIs('about')" href="{{ route('about') }}" :color_aktif="'text-gray-900 dark:text-white'"
                    class="p-2 {{ request()->routeIs('about') ? 'bg-gray-100 dark:bg-mainDark3' : '' }} hover:bg-gray-100 dark:hover:bg-mainDark3 hover:text-gray-900 dark:text-white rounded-md !flex items-center gap-2">
                    <i class="ri-settings-{{ request()->routeIs('about') ? 'fill' : 'line' }} text-xl"></i>
                    <span class="mt-0.5">Pengaturan</span>
                </x-navbar.navlink>
            </div>
            <x-navbar.navlink :active="false" :color_aktif="'text-gray-900 dark:text-white'"
                class="p-2 {{ request()->routeIs('about') ? 'bg-gray-100 dark:bg-mainDark3' : '' }} hover:bg-gray-100 dark:hover:bg-mainDark3 hover:text-gray-900 dark:text-white rounded-md !flex items-center gap-2">
                <i class="ri-logout-box-line text-xl"></i>
                <span class="mt-0.5">Keluar</span>
            </x-navbar.navlink>
        </ul>
    </div>
    <div class="absolute w-full bottom-0 p-4">
        <div class="">
            <x-aksi.theme class="!p-2 bg-gray-200 dark:bg-gray-700" />

        </div>
    </div>
</div>
