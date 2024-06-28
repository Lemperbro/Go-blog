<header>
    <nav class="z-20 w-full fixed border-b-[1px]  transition-all dark:border-borderDark">
        <x-container>
            <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-4 md:gap-0 relative">
                <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer">
                <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0">
                    <a href="#home" aria-label="logo" class="flex space-x-2 items-center">
                        <div aria-hidden="true" class="flex space-x-1">
                            <div class="h-4 w-4 rounded-full bg-gray-900 dark:bg-white"></div>
                            <div class="h-6 w-2 bg-primary"></div>
                        </div>
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">{{ config('app.name') }}</span>
                    </a>

                    <div class="lg:hidden flex gap-2 items-center">
                        <button type="button" onclick="Search.showModal()"
                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <i class="ri-search-2-line text-[18px] "></i>
                        </button>

                        <button type="button"
                            class="size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 "
                            data-hs-overlay="#sidebarNav" aria-controls="sidebarNav" aria-label="Toggle navigation">
                            <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" x2="21" y1="6" y2="6" />
                                <line x1="3" x2="21" y1="12" y2="12" />
                                <line x1="3" x2="21" y1="18" y2="18" />
                            </svg>
                            <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div aria-hidden="true"
                    class="fixed z-10 inset-0 h-screen w-screen bg-white/70 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70">
                </div>
                <div
                    class="flex-col z-20 flex-wrap gap-6 p-8 rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 justify-end w-full invisible opacity-0 translate-y-1  absolute top-full left-0 transition-all duration-300 scale-95 origin-top 
                            lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none
                            peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none 
                            dark:shadow-none dark:bg-mainDark lg:dark:bg-transparent dark:border-gray-700">

                    <div class="text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0">
                        <ul class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0">
                            <x-navbar.navlink :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-navbar.navlink>
                            <x-navbar.navlink :active="request()->routeIs('article')" href="{{ route('article') }}">Article</x-navbar.navlink>
                            <x-navbar.navlink :active="request()->routeIs('tags')" href="{{ route('tags') }}">Tags</x-navbar.navlink>
                            <x-navbar.navlink :active="request()->routeIs('about')" href="{{ route('about') }}">About</x-navbar.navlink>
                        </ul>
                    </div>

                    <div class="flex gap-2 items-center">
                        <button type="button" onclick="Search.showModal()"
                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <i class="ri-search-2-line text-[18px] "></i>
                        </button>
                        <x-aksi.theme />
                    </div>
                </div>
            </div>
        </x-container>
    </nav>
</header>

<x-aksi.modalSearch />
<x-navbar._canvas />




@push('scripts')
    <script data-navigate-once>
        document.addEventListener('livewire:navigated', function() {
            const nav = document.querySelector("nav");
            window.HSStaticMethods.autoInit(["overlay"]);

            window.addEventListener("scroll", function() {
                if (window.scrollY > 0) {
                    // nav.classList.remove("nav-transparent");
                    nav.classList.add("bg-white", "dark:bg-mainDark");
                } else {
                    nav.classList.remove("bg-white", "dark:bg-mainDark");
                }
            });

            if (window.scrollY > 0) {
                // nav.classList.remove("nav-transparent");
                nav.classList.add("bg-white", "dark:bg-mainDark");
            } else {
                nav.classList.remove("bg-white", "dark:bg-mainDark");
            }
        });
    </script>
@endpush
