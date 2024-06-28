<!-- Textarea -->
<div class="relative">
    <textarea id="hs-textarea-ex-2"
        class="p-4 pb-12 block w-full bg-gray-100 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
        placeholder="Beri Komentar....."></textarea>

    <!-- Toolbar -->
    <label for="hs-textarea-ex-2" class="absolute bottom-px inset-x-px p-2 rounded-b-md bg-gray-100 dark:bg-neutral-800">
        <div class="flex justify-end items-center">


            <!-- Button Group -->
            <div class="flex items-center gap-x-1">


                <!-- Send Button -->
                <button type="button"
                    class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-white bg-primary hover:bg-primary/80 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z">
                        </path>
                    </svg>
                </button>
                <!-- End Send Button -->
            </div>
            <!-- End Button Group -->
        </div>
    </label>
    <!-- End Toolbar -->
</div>
<!-- End Textarea -->

@script
    <script data-navigate-once>
        document.addEventListener('livewire:navigated', function() {

            (function() {
                function textareaAutoHeight(el, offsetTop = 0) {
                    el.style.height = 'auto';
                    el.style.height = `${el.scrollHeight + offsetTop}px`;
                }

                (function() {
                    const textareas = [
                        '#hs-textarea-ex-2'
                    ];

                    textareas.forEach((el) => {
                        const textarea = document.querySelector(el);
                        const overlay = textarea.closest('.hs-overlay');

                        if (overlay) {
                            const {
                                element
                            } = HSOverlay.getInstance(overlay, true);

                            element.on('open', () => textareaAutoHeight(textarea, 3));
                        } else textareaAutoHeight(textarea, 3);

                        textarea.addEventListener('input', () => {
                            textareaAutoHeight(textarea, 3);
                        });
                    });
                })();
            })()
        });
    </script>
@endscript
