<main class="dark:bg-mainDark pb-20">
    @include('livewire.home._heroSection')
    <div class="py-20">
        <x-container class="mb-8">
            <div class="flex gap-2">
                <div class="w-1 bg-primary"></div>
                <x-heading.heading1>Artikel Favorit</x-heading.heading1>
            </div>

        </x-container>
        <div class="relative">
            <div aria-hidden="true"
                class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-40 top-20 ">
                <div class="blur-[106px] h-80 bg-gradient-to-br from-primary to-purple-400  dark:from-blue-700"></div>
                <div class="blur-[106px] h-52 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
            </div>
            <div class="bg-gray-200 dark:bg-mainDark1 py-4 relative">
                @include('livewire.home._favorit')
            </div>
        </div>
    </div>

    <div class="pb-20">
        <x-container>
            <div class="flex justify-between">
                <div class="flex gap-1 items-center">
                    <i class="ri-hashtag text-xl  md:text-2xl text-gray-900 dark:text-white"></i>
                    <x-heading.heading1>Tags</x-heading.heading1>
                </div>
                <a wire:navigate href="{{ route('tags') }}" class="flex gap-x-1 items-center">
                    <h4 class="font-normal text-primary dark:text-primary text-sm md:text-base">Semua</h4>
                    <i class="ri-arrow-right-s-line text-primary text-xl"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8 mt-6">
                @for ($i = 1; $i <= 8; $i++)
                    <x-cards.tag-card></x-cards.tag-card>
                @endfor
            </div>
        </x-container>
    </div>
    <div class="pb-20 ">
        <x-container>
            <div class="flex justify-between">
                <div class="flex gap-2">
                    <div class="w-1 bg-primary"></div>
                    <x-heading.heading1>Artikel Terbaru</x-heading.heading1>
                </div>
                <a wire:navigate href="{{ route('article') }}" class="flex gap-x-1 items-center">
                    <h4 class="font-normal text-primary dark:text-primary text-sm md:text-base">Semua</h4>
                    <i class="ri-arrow-right-s-line text-primary text-xl"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8 mt-6 ">
                @foreach ($artikelAll as $item)
                    <x-cards.article-card :data="$item" />
                @endforeach
            </div>
        </x-container>
    </div>

</main>


