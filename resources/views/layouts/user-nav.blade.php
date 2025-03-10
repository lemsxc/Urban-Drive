<nav
    class="flex justify-between items-center self-center px-20 py-7 w-full text-lg font-medium text-black max-md:flex-wrap max-md:gap-5 max-md:p-5">
    <img src="{{ asset('images/Logo.png') }}" alt="Logo" />
    <ul class="flex gap-5 items-center max-md:hidden">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('cars') }}">Vehicles</a></li>
        <li><a href="#details">Details</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#book">Book Now</a></li>
    </ul>
    <a href="#book" class="px-7 py-3 font-semibold text-black bg-amber-500 rounded-xl">Book Now</a>
</nav>