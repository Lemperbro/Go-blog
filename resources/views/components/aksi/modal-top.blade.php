@props(['id' => 'modal-top', 'title_modal' => 'Modal title', 'title_close_btn' => "Close", 'id_close_btn' => $id.'_close_id', 'title_submit_btn' => "Simpan", 'type_submit_btn' => "submit", 'id_submit_btn' => $id.'_submit_id'])
{{-- <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-basic-modal">
    Open modal
  </button> --}}

<div id="{{ $id }}"
    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-20 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
    <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <form id="test"
            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-mainDark dark:border-borderDark dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                    {{ $title_modal }}
                </h3>
                <button type="button"
                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                    data-hs-overlay="#{{ $id }}">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                {{ $slot }}
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                <button type="button" id="{{ $id_close_btn }}"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                    data-hs-overlay="#{{ $id }}">
                    {{ $title_close_btn }}
                </button>
                <button type="{{ $type_submit_btn }}" id="{{ $id_submit_btn }}"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-primary text-white hover:bg-violet-500 disabled:opacity-50 disabled:pointer-events-none">
                    {{ $title_submit_btn }}
                </button>
            </div>
        </form>
    </div>
</div>
