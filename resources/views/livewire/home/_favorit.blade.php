<div class="splide py-10" id="favorit">
    <div class="splide__track">
        <ul class="splide__list">

            @for ($i = 1; $i <= 4; $i++)
                <li class="splide__slide overflow-hidden flex">
                    {{-- <img src="{{ asset('images/food' . $i . '.jpg') }}" alt="" class="w-32 object-contain my-auto"> --}}
                    <x-cards.favorit-card :title="'Membuat Docs Api Dengan sweagger'" :image="asset('images/food' . $i . '.jpg')" :views="10" :kategori="'Restfull Api'" />
                </li>
            @endfor
        </ul>
    </div>
</div>
@script
    <script>
        document.addEventListener('livewire:navigated', function() {

            // Periksa apakah elemen dengan ID 'favorit' ada di halaman
            const favoritElement = document.getElementById('favorit');
            if (favoritElement) {                
                const favorit = new Splide(favoritElement, {
                    type: 'loop',
                    drag: 'free',
                    focus: 'center',
                    perPage: 4,
                    pagination: false,
                    arrows: false,
                    gap: '1em',
                    autoScroll: {
                        speed: 0.5,
                    },
                    breakpoints: {
                        768: {
                            perPage: 1,
                        },
                        1024: {
                            perPage: 3,
                        }
                    },
                });

                favorit.mount(window.splide.Extensions);
            }
        });
    </script>
@endscript
