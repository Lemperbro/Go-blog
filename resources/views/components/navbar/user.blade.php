<div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
    <button id="hs-dropdown-with-header" type="button"
        class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
        <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-neutral-800"
            src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
            alt="Image Description">

    </button>

    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-mainDark dark:border dark:border-borderDark"
        aria-labelledby="hs-dropdown-with-header">
        <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg dark:bg-mainDark2">
            <p class="text-sm text-gray-500 dark:text-neutral-400">Signed in as</p>
            <p class="text-sm font-medium text-gray-800 dark:text-neutral-300">james@site.com</p>
        </div>
        <div class="mt-2 py-2 first:pt-0 last:pb-0">
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                href="#">

                <i class="ri-account-circle-line flex-shrink-0 text-[18px]"></i>
                Profile
            </a>
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                href="#">
                <i class="ri-bookmark-line flex-shrink-0 text-[18px]"></i>
                BookMark
            </a>
            <form action="" class="mt-2">
                <button type="button" class="w-full bg-red-600 hover:bg-red-500 text-white rounded-lg p-1.5">Keluar</button>
            </form>
        </div>
    </div>
</div>
