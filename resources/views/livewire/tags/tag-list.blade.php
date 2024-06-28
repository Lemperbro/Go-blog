<main class="dark:bg-mainDark pb-20">
    <x-container class="pt-36">
        <div>
            <div>

                
                <div class="hs-accordion-group">
                    @for ($i = 1; $i <= 15; $i++)
                        <div class="hs-accordion {{ $i > 1 ? '' : 'active' }} bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                            id="hs-bordered-heading-{{ $i }}">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary  inline-flex justify-between items-center gap-x-3 sm:gap-x-10 lg:gap-x-80 xl:gap-x-96 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-primary dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-{{ $i }}">
                                <div class="hs-accordion-active:hidden flex flex-col gap-2">
                                    <x-paragraph.paragraph class="!text-[13px] !font-normal">
                                        Di Buat Pada 25 Juni 2024
                                    </x-paragraph.paragraph>
                                    <span class="line-clamp-1">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nesciunt
                                        reprehenderit, blanditiis repellendus nemo suscipit reiciendis qui, animi nam
                                        officia beatae quos magni aliquam? Iure architecto ratione voluptate labore
                                        molestiae?
                                    </span>
                                </div>
                                <span class="hidden hs-accordion-active:block font-normal">
                                    Tag : Repository Pattern
                                </span>
                                <div class="min-w-5">
                                    <svg class="hs-accordion-active:hidden block size-4"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-4"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="hs-basic-bordered-collapse-{{ $i }}"
                                class="hs-accordion-content {{ $i > 1 ? 'hidden' : '' }} w-full overflow-hidden transition-[height] duration-300 "
                                aria-labelledby="hs-bordered-heading-{{ $i }}">
                                <div class="pb-4 px-5">
                                    <x-heading.heading2 class="!font-semibold">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel dolor iure, quo
                                        optio ipsum perspiciatis officiis voluptatibus perferendis nemo. Voluptatibus
                                        neque beatae quia, accusamus odit atque dignissimos vitae facere quo.
                                    </x-heading.heading2>
                                    <p class="text-gray-600 dark:text-neutral-400 mt-4">
                                        <em>This is the third item's accordion body.</em> It is hidden by default, until
                                        the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes control the overall appearance, as well as the showing and hiding
                                        via
                                        CSS transitions.
                                    </p>
                                    <x-aksi.button class="mt-4 before:!bg-primary">
                                        <x-heading.heading4 class="!text-white">Baca Selengkapnya</x-heading.heading4>
                                    </x-aksi.button>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </x-container>
</main>

@script
    <script data-navigate-once defer>
        document.addEventListener('livewire:navigated', function() {
            window.HSStaticMethods.autoInit(["accordion"]);
        });
    </script>
@endscript
