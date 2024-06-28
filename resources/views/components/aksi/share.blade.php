@props(['data' => url('/')])
<div class="hs-tooltip [--trigger:focus] [--placement:left] inline-block">
    <button type="button"
        class="hs-tooltip-toggle lg:flex gap-2 items-center border dark:border-borderDark rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-mainDark2 px-4 py-2">
        <i class="ri-share-line text-gray-900 dark:text-white"></i>
        <span class="hidden lg:block">Bagikan</span>
        <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400"
            role="tooltip">
            <div class="flex gap-2">
                <div>
                    <span id="clipboard" class="hidden">{{ $data }}</span>
                    <div class="js-clipboard p-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                        data-clipboard-target="#clipboard" data-clipboard-action="copy"
                        data-clipboard-success-text="Copied">
                        <svg class="js-clipboard-default size-4 group-hover:rotate-6 transition"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                        </svg>

                        <svg class="js-clipboard-success hidden size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                </div>

                <div data-sharer="whatsapp" data-url="{{ $data }}"
                    class="bg-green-600 inline-flex items-center gap-x-2  rounded-lg   px-[11px] py-[5px]   shadow-sm  disabled:opacity-50 disabled:pointer-events-none   text-white hover:bg-green-500">
                    <i class="ri-whatsapp-line text-white text-lg"></i>
                </div>
                <div data-sharer="telegram" data-url="{{ $data }}"
                    class="bg-cyan-600 inline-flex items-center gap-x-2  rounded-lg   px-[11px] py-[5px]   shadow-sm  disabled:opacity-50 disabled:pointer-events-none   text-white hover:bg-cyan-500">
                    <i class="ri-telegram-2-fill text-white text-lg"></i>
                </div>

                <div data-sharer="facebook" data-url="{{ $data }}"
                    class="bg-blue-600 inline-flex items-center gap-x-2  rounded-lg   px-[11px] py-[5px]   shadow-sm  disabled:opacity-50 disabled:pointer-events-none   text-white hover:bg-blue-500 cursor-pointer">
                    <i class="ri-facebook-fill text-white text-lg"></i>
                </div>



            </div>
        </div>
    </button>
</div>




@script
    <script data-navigate-once defer>
        document.addEventListener('livewire:navigated', function() {
            window.HSStaticMethods.autoInit(["tooltip"]);

            (function() {
                // window.addEventListener('load', () => {
                const $clipboards = document.querySelectorAll('.js-clipboard');
                $clipboards.forEach((el) => {
                    const isToggleTooltip = HSStaticMethods.getClassProperty(el,
                        '--is-toggle-tooltip') === 'false' ? false : true;
                    const clipboard = new ClipboardJS(el, {
                        text: (trigger) => {
                            const clipboardText = trigger.dataset.clipboardText;

                            if (clipboardText) return clipboardText;

                            const clipboardTarget = trigger.dataset
                                .clipboardTarget;
                            const $element = document.querySelector(
                                clipboardTarget);

                            if (
                                $element.tagName === 'SELECT' ||
                                $element.tagName === 'INPUT' ||
                                $element.tagName === 'TEXTAREA'
                            ) return $element.value
                            else return $element.textContent;
                        }
                    });
                    clipboard.on('success', () => {
                        const $default = el.querySelector('.js-clipboard-default');
                        const $success = el.querySelector('.js-clipboard-success');
                        const $successText = el.querySelector(
                            '.js-clipboard-success-text');
                        const successText = el.dataset.clipboardSuccessText || '';
                        const tooltip = el.closest('.hs-tooltip');
                        const $tooltip = HSTooltip.getInstance(tooltip, true);
                        let oldSuccessText;

                        if ($successText) {
                            oldSuccessText = $successText.textContent
                            $successText.textContent = successText
                        }
                        if ($default && $success) {
                            $default.style.display = 'none'
                            $success.style.display = 'block'
                        }
                        if (tooltip && isToggleTooltip) HSTooltip.show(tooltip);
                        if (tooltip && !isToggleTooltip) $tooltip.element
                            .popperInstance
                            .update();

                        setTimeout(function() {
                            if ($successText && oldSuccessText) $successText
                                .textContent = oldSuccessText;
                            if (tooltip && isToggleTooltip) HSTooltip.hide(
                                tooltip);
                            if (tooltip && !isToggleTooltip) $tooltip
                                .element
                                .popperInstance.update();
                            if ($default && $success) {
                                $success.style.display = '';
                                $default.style.display = '';
                            }
                        }, 800);
                    });
                });
                // })
            })()

        });
    </script>
@endscript
