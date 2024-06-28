    <a href="{{ route('tags.list', ['tag' => 'testing']) }}" wire:navigate class="relative h-52 border border-gray-300 dark:border-borderDark rounded-lg bg-gray-100 dark:bg-mainDark hover:bg-gradient-to-r hover:from-primary/15 hover:via-primary/15 bg-size-200 bg-pos-0 hover:bg-pos-100 hover:to-blue-500/15 transition-all duration-500 cursor-pointer">
        <div class=" absolute w-full p-5">
            <div class="flex gap-[1px] items-center">
                <i class="ri-hashtag text-gray-900 dark:text-white"></i>
                <x-heading.heading4>Tag</x-heading.heading4>
            </div>
            <x-heading.heading2 class="!font-bold">Repository Pattern</x-heading.heading2>
        </div>
        <div class="absolute w-full bottom-0">
            <div class="flex flex-wrap-reverse gap-x-8 gap-y-2 justify-between p-4 items-center">
                <div>
                    <x-paragraph.paragraph class="!text-xs">Di Buat Pada 25 Juni 2024</x-paragraph.paragraph>
                </div>
                <div>
                    <x-heading.heading5>10 Posts</x-heading.heading5>
                </div>
            </div>
        </div>
    </a>
