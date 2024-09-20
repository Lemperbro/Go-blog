@props(['title'])
<div x-data="{ open: @entangle('isOpen'), rotate: false }" class="relative inline-block text-left">
    <button @click="open = !open; rotate = open" {{ $attributes->merge(['class' => "inline-flex justify-center w-full rounded-md border border-gray-300 dark:border-borderDark bg-gray-100 dark:bg-mainDark text-gray-900 dark:text-white shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 focus:outline-none"]) }}>
        <span>{{ $title }}</span>
        <svg :class="{'rotate-180': rotate}" class="-mr-1 ml-2 h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>

    <div x-show="open" @click.away="open = false; rotate = false" 
         class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg border border-gray-300 dark:border-borderDark bg-white dark:bg-mainDark ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            {{ $slot }}
        </div>
    </div>
</div>
