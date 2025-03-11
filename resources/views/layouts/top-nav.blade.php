<nav class="flex justify-between items-center px-8 py-4 w-full bg-white border-b border-slate-200 max-md:px-5">
    <!-- Logo -->
    <div class="flex items-center">
        <img loading="lazy" src="{{ asset('images/Logo.png') }}" class="object-contain ml-10 w-32 max-md:w-24" alt="Company logo" />
    </div>

    <!-- Language and Profile Section -->
    <div class="flex gap-5 items-center mr-5">
        <!-- Profile Section -->
        @if (Auth::check())
        <div class="flex items-center gap-3">
            <div class="flex items-center justify-center bg-[#D0CAEA] w-10 h-10 rounded-lg text-black font-bold mr-2">
                {{ strtoupper(substr(Auth::user()->firstname, 0, 1)) }}
            </div>
            <div class="flex flex-col">
                <div class="text-sm font-medium text-gray-600 uppercase">{{ Auth::user()->role }}</div>
                <div class="text-md font-semibold text-neutral-950">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
            </div>
        </div>
        @else
        <!-- Guest Section -->
        <div class="flex items-center gap-3">
            <div class="flex items-center justify-center bg-[#D0CAEA] w-10 h-10 rounded-lg text-black font-bold mr-2">
                G
            </div>
            <div class="flex flex-col">
                <div class="text-sm font-medium text-gray-600 uppercase">Guest</div>
                <div class="text-md font-semibold text-neutral-950">Guest User</div>
            </div>
        </div>
        @endif
    </div>
</nav>
