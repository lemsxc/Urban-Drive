<x-app-layout>

    <div x-data="{ carModal: false, selectedCategory: 'All', selectedCar: {}, }"
        class="flex flex-col items-center bg-white">
        <div class="flex overflow-hidden flex-col w-full bg-white max-w-[1440px] max-md:p-5">
            @include('layouts.user-nav')
        </div>
    </div>
    
</x-app-layout>