@props(['data'])
<a href="{{ route('read') }}" wire:navigate class="cursor-pointer hover:scale-95 transition-all duration-500 inline-block group">
    <div class="rounded-lg h-64 overflow-hidden">
        {{-- <img alt="content" class="object-cover object-center h-full w-full  group-hover:scale-150 group-hover:rotate-12 group-hover:cursor-pointer transition-all duration-500" src="https://dummyimage.com/1203x503"> --}}
        <img alt="content" class="object-cover object-center h-full w-full  group-hover:scale-150 group-hover:rotate-12 group-hover:cursor-pointer transition-all duration-500" src="{{ $data->cover }}">
    </div>
    <div class="flex gap-x-1 items-center mt-2">
        <i class="ri-eye-2-line text-gray-500 dark:text-gray-400  text-lg"></i>
        <p class="text-sm text-gray-500 dark:text-gray-400 ">{{ $data->views }} Kali Dilihat</p>
    </div>
    <h2 class="text-xl font-medium title-font text-gray-900 dark:text-white mt-1 line-clamp-2">{{ $data->title }}</h2>
    <x-paragraph.paragraph class="line-clamp-3 mt-2">{{ $data->deskripsi }}</x-paragraph.paragraph>
    <div class="mt-2">
        <div class="flex gap-1">
            <x-heading.heading4 class="!font-extralight !text-sm !md:text-sm">Tags :</x-heading.heading4>
            <x-heading.heading4 class="font-extralight !text-sm !md:text-sm">{{ $data->Relasi[0]->tag->name }}</x-heading.heading4>
        </div>
        <div class="mt-2">
            @foreach ($data->Relasi as $item)
            <x-paragraph.paragraph
            class="text-sm bg-primary/20 text-primary px-2 py-[2px] rounded-lg inline-block">{{ $item->kategori->name }}</x-paragraph.paragraph>
            @endforeach
        </div>
    </div>
</a>
