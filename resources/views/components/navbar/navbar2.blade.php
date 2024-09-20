<!-- ========== HEADER ========== -->
<header
    class="flex flex-wrap md:justify-start sm:flex-nowrap fixed z-[60] w-full border-b border-gray-200 text-sm py-2 dark:border-neutral-700">
    <x-container class="w-full">
        <nav class="relative flex flex-wrap basis-full items-center w-full mx-auto sm:flex sm:items-center sm:justify-between "
            aria-label="Global">
            <div class="flex items-center justify-between">
                <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Brand</a>
            </div>

            <div class="flex items-center ms-auto sm:ms-0 sm:order-3">
                <div class="flex gap-2 items-center">
                    <button type="button" onclick="Search.showModal()"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <i class="ri-search-2-line text-[18px] "></i>
                    </button>

                    <button id="theme-toggle" type="button"
                        class="hidden md:block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                            </path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="md:hidden dark:border-neutral-700">
                    <button type="button"
                        class="size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 "
                        data-hs-overlay="#navbar-offcanvas-example" aria-controls="navbar-offcanvas-example"
                        aria-label="Toggle navigation">
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



            <div id="navbar-offcanvas-example"
                class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white border-e basis-full grow md:order-2 md:static md:block md:h-auto md:max-w-none md:w-auto md:border-r-transparent md:transition-none md:translate-x-0 md:z-[60] md:basis-auto dark:bg-mainDark md:bg-transparent md:dark:bg-transparent dark:border-r-gray-700 md:dark:border-r-transparent hidden"
                tabindex="-1" data-hs-overlay-close-on-resize>
                <div class="flex flex-col md:flex-row md:items-center md:justify-end py-2 md:py-0 md:ps-7">
                    <x-navbar.navlink :active="request()->routeIs('home')" href="{{ route('home') }}" class="px-6 py-3 md:px-3">Home</x-navbar.navlink>
                    <x-navbar.navlink :active="request()->routeIs('article')" href="{{ route('article') }}" class="px-6 py-3 md:px-3">Article</x-navbar.navlink>
                    <x-navbar.navlink :active="request()->routeIs('tags')" href="{{ route('tags') }}" class="px-6 py-3 md:px-3">Tags</x-navbar.navlink>
                    <x-navbar.navlink :active="request()->routeIs('about')" href="{{ route('about') }}" class="px-6 py-3 md:px-3">About</x-navbar.navlink>
               
                </div>
            </div>
        </nav>
    </x-container>
</header>

<dialog id="Search" class="modal modal-bottom sm:modal-middle bg-white/70 dark:bg-black/10 min-h-screen">
    <div class="modal-box dark:bg-mainDark bg-white text-gray-900 dark:text-white border border-borderDark">
        <div class="relative">
            <input type="text"
                class="grow border-[1px] border-borderDark rounded-md w-full focus:ring-0 focus:outline-none focus:border-mainDark4 py-2 px-4 bg-white dark:bg-mainDark"
                placeholder="Cari Artikel" />
            <label for="closeSearch"
                class="absolute text-white  bg-mainDark4 right-2 px-2 py-1 rounded-md top-[50%] -translate-y-[50%]">Esc</label>
        </div>
        <div class="h-80">

        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button id="closeSearch">close</button>
    </form>
</dialog>
<!-- ========== END HEADER ========== -->

@push('scripts')
    <script data-navigate-once>
        document.addEventListener('livewire:navigated', function() {
            const nav = document.querySelector("header");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 0) {
                    nav.classList.add("bg-white", "dark:bg-mainDark");
                } else {
                    nav.classList.remove("bg-white", "dark:bg-mainDark");
                }
            });

            if (window.scrollY > 0) {
                nav.classList.add("bg-white", "dark:bg-mainDark");
            } else {
                nav.classList.remove("bg-white", "dark:bg-mainDark");
            }

            document.addEventListener('keydown', function(event) {
                if (event.ctrlKey && event.key === 'k') {
                    event.preventDefault(); // Prevent the default action
                    document.getElementById('Search').showModal();
                }
            });

            // Close the modal when "Esc" is pressed
            document.getElementById('closeSearch').addEventListener('click', function() {
                document.getElementById('Search').close();
            });
        });
    </script>
@endpush
