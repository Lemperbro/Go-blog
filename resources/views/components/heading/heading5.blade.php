{{-- @props(['colorLight' => 'text-gray-900', 'colorDark' => 'dark:text-white'])
<h1 {{ $attributes->merge(['class' => "$colorLight $colorDark text-sm md:text-base font-semibold"]) }}>
    {{ $slot }}
</h1> --}}

<h1 {{ $attributes->merge(['class' => 'text-gray-900 dark:text-white text-xs md:text-sm font-normal']) }}>
    {{ $slot }}
</h1>