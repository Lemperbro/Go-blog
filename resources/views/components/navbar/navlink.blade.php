@props(['active' => false, 'color_aktif' => 'text-primary'])

<li>
    <a wire:navigate
        {{ $attributes->merge(['class' => 'block md:px-4 transition hover:text-primary ' . ($active ? $color_aktif : '')]) }}>
        {{ $slot }}
    </a>
</li>
