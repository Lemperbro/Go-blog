
<dialog id="Search" class="modal modal-bottom sm:modal-middle bg-white/70 dark:bg-black/10 min-h-screen">
    <div class="modal-box dark:bg-mainDark bg-white text-gray-900 dark:text-white border border-borderDark">
        <div class="relative">
            <input type="text"
                class="grow border-[1px] border-borderDark rounded-md w-full focus:ring-0 focus:outline-none focus:border-mainDark4 py-2 px-4 bg-white dark:bg-mainDark"
                placeholder="Cari Artikel" />
            <label for="closeSearch"
                class="absolute text-white  bg-mainDark4 right-2 px-2 py-1 rounded-md top-[50%] -translate-y-[50%]">Esc</label>
        </div>
        <div class="h-40">

        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button id="closeSearch">close</button>
    </form>
</dialog>

@push('scripts')
    <script>
        document.addEventListener('livewire:navigated', function() {
            document.addEventListener('keydown', function(event) {
                if (event.ctrlKey && event.key === 'k') {
                    event.preventDefault(); // Prevent the default action
                    document.getElementById('Search').showModal();
                }
            });

            // Close the modal when "Esc" is pressed
            document.getElementById('closeSearch').addEventListener('click', function() {
                document.getElementById('Search').close();
            });
        });
    </script>
@endpush
