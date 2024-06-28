    @props(['active' => false])
    <div {{ $attributes->merge(['class' => 'inline-flex gap-2 items-center hover:bg-gray-100 dark:hover:bg-mainDark4 p-2 rounded-lg cursor-pointer group']) }}>
        <i
            class="ri-thumb-up-fill {{ $active ? 'text-primary' : 'text-gray-600 dark:text-gray-400' }}  group-hover:text-gray-700 dark:group-hover:text-gray-100"></i>
        <x-heading.heading5
            class="{{ $active ? '!text-primary' : 'text-gray-600 dark:text-gray-400' }} font-semibold group-hover:!text-gray-700  dark:group-hover:!text-gray-100">Suka</x-heading.heading5>
    </div>
