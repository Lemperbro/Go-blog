@props(['active' => false])

<li>
    <a wire:navigate
        {{ $attributes->merge(['class' => 'block md:px-4 transition hover:text-primary ' . ($active ? 'text-primary' : '')]) }}>
        <span>{{ $slot }}</span>
    </a>
</li>
