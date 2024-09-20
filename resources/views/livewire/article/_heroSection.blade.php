<div class="relative" id="article">
    {{-- <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-40 ">
        <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400  dark:from-blue-700"></div>
        <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
    </div> --}}
    <x-container>
        <x-aksi.modal-top :id="'tag'" :title_close_btn="'Batal'" :title_submit_btn="'Cari Artikel'" :title_modal="'Sort By Tag'">
            <div class="h-60">
                <select name="tag" id="tagInput" class="w-full bg-mainDark" style="width: 100%">
                    <option value="" class="">Pilih Tag</option>
                    <option value="1" class="">Teknologi</option>
                    <option value="2" class="">Repository Pattern</option>
                    <option value="3" class="">Server Pattern</option>
                    <option value="4" class="">Solid Principle</option>
                </select>
            </div>
        </x-aksi.modal-top>

        <x-aksi.modal-top :id="'kategori'" :title_close_btn="'Batal'" :title_submit_btn="'Cari Artikel'" :title_modal="'Sort By Kategori'">
            <div class="h-60">
                <select name="kategori" id="kategoriInput" class="w-full bg-mainDark" style="width: 100%">
                    <option value="" class="">Pilih Kategori</option>
                    <option value="1" class="">Teknologi</option>
                    <option value="2" class="">Repository Pattern</option>
                    <option value="3" class="">Server Pattern</option>
                    <option value="4" class="">Solid Principle</option>
                </select>
            </div>
        </x-aksi.modal-top>

        <div class="relative pt-36 min-h-screen">
            <div class="flex flex-col md:flex-row gap-4 justify-between">
                <div class=" max-w-4xl">
                    <x-heading.heading1 class="lg:!text-4xl">Articles</x-heading.heading1>
                    <x-paragraph.paragraph class="mt-2">
                        Jelajahi berbagai artikel terbaru kami tentang dunia teknologi. Dari tutorial langkah demi langkah hingga
                        analisis mendalam, temukan informasi bermanfaat untuk pengembang, profesional IT, dan penggemar
                        teknologi.
                    </x-paragraph.paragraph>
                </div>
                <div class="flex justify-end">
                    <x-aksi.dropdown :title="'Filter'">
                        <div class="p-4 flex flex-col ">
                            <h1 class="font-semibold text-sm px-2 mb-1 text-gray-900 dark:text-white">Sort By</h1>
                            <x-aksi.dropdownOption href="">Popular</x-aksi.dropdownOption>
                            <x-aksi.dropdownOption href="">Terbaru</x-aksi.dropdownOption>
                            <x-aksi.dropdownOption :navigate="false" data-hs-overlay="#tag"
                                class="cursor-pointer">Tag</x-aksi.dropdownOption>
                            <x-aksi.dropdownOption :navigate="false" data-hs-overlay="#kategori"
                                class="cursor-pointer">Kategori</x-aksi.dropdownOption>
                            <x-aksi.dropdownOption href="{{ route('article') }}"
                                class="bg-red-600 text-center !text-white hover:!bg-red-500 mt-4">Hapus
                                Filter</x-aksi.dropdownOption>
                        </div>
                    </x-aksi.dropdown>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-4 py-4 mt-8 ">
                @foreach ($artikelAll as $item)
                    <x-cards.article-card :data="$item" />
                @endforeach
            </div>
        </div>
    </x-container>
</div>

@push('app-style')
    <style>
        .select2-selection.select2-selection--single {
            min-height: 45px;
            padding-top: 7px;
            padding-left: 7px;
        }

        span.select2-selection__rendered {
            margin-top: 2px;
        }

        span.select2-selection__arrow {
            margin-top: 9px;
        }

        .select2-container .select2-results>.select2-results__options {
            max-height: 150px !important;
        }
    </style>
@endpush
@script
    <script data-navigate-once defer>
        document.addEventListener('livewire:navigated', function() {
            $('#tagInput').select2({
                width: 'resolve',
                placeholder: "Pilih Tag",
                language: {
                    noResults: function() {
                        return "Tag Tidak Di Temukan.";
                    }
                }
            });
            $('#kategoriInput').select2({
                width: 'resolve',
                placeholder: "Pilih Kategori",
                language: {
                    noResults: function() {
                        return "Kategori Tidak Di Temukan.";
                    }
                }
            });
        });
    </script>
@endscript
