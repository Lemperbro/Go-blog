<div class="flex flex-col gap-4">
    @for ($i = 1; $i <= 2; $i++)
        <div>
            <div class="flex gap-4 ">
                <img src="{{ asset('images/food2.jpg') }}" alt="" class="object-cover w-7 h-7 rounded-full">
                <div class="flex flex-col gap-2">
                    <div class="flex flex-col gap-2">
                        <div class="flex gap-4 items-center">
                            <x-heading.heading5 class="!font-semibold">Andhi Satria</x-heading.heading5>
                            <x-heading.heading5 class="!text-gray-500">•</x-heading.heading5>
                            <x-heading.heading5 class="!text-gray-500">Selasa, 25 Jun 2024</x-heading.heading5>
                        </div>
                        <div class="">
                            <x-heading.heading5 class="dark:!text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam iste aperiam autem
                                laboriosam
                                ducimus nostrum repellat repudiandae. Ut quidem repellat eum alias laboriosam iste,
                                ratione
                                dignissimos, sint nostrum veniam nihil.
                            </x-heading.heading5>
                        </div>
                    </div>
                    <div>
                        <x-aksi.like-btn class="w-auto" />
                    </div>
                </div>

            </div>
        </div>
    @endfor
</div>
