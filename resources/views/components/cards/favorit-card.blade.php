@props(['image', 'title', 'views', 'kategori'])

<a href="{{ route('read') }}" wire:navigate {{ $attributes->merge(['class' => 'relative h-72 w-full overflow-hidden rounded-lg']) }}>
    <img src="{{ $image }}" alt="" class="object-cover h-full w-full">
    <div class="absolute inset-0 bg-black/40">
        <div class="p-4 absolute bottom-0">
            <x-heading.heading3 class="text-white !font-semibold">
                {{ $title }}
            </x-heading.heading3>
            <h4 class="text-gray-300 dark:text-gray-200 font-light text-xs md:text-base">
                {{ $kategori }}
            </h4>
        </div>
        <div class="p-4 absolute right-0 top-0">
            <div class="flex items-center gap-1 bg-white/80 px-2 py-1 rounded-lg ">
                <i class="ri-eye-2-line"></i>
                <p class="text-sm">{{ $views }}</p>
            </div>
        </div>
    </div>
</a>
