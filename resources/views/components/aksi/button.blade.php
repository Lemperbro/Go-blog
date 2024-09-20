<button
    {{ $attributes->merge(['class' => 'relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-lg before:border before:border-transparent  before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max text-base font-semibold text-primary dark:text-white']) }}>
    <span class="relative ">{{ $slot }}</span>
</button>
