<x-app-layout>
    <div x-data="{ carModal: false, selectedCategory: 'All', selectedCar: {}, }" class="flex flex-col items-center bg-white">
        <div class="flex overflow-hidden flex-col w-full bg-white max-w-[1440px] max-md:p-5">
            @include('layouts.user-nav')
            <div class="flex justify-between px-20 py-8 text-center max-md:flex-col max-md:gap-10 max-md:items-center max-md:px-5 max-md:py-10">

                <div class="max-w-6xl mx-auto text-center">
                    <h1 class="text-3xl font-bold mb-6">Select a vehicle group</h1>

                    <!-- Vehicle Filter Buttons -->
                    <div class="flex justify-center space-x-3 mb-6">
                        <button @click="selectedCategory = 'All'"
                            :class="selectedCategory === 'All' ? 'bg-purple-600 text-white' : 'bg-gray-200'"
                            class="px-4 py-2 rounded-lg">
                            All vehicles
                        </button>
                        <button @click="selectedCategory = 'Sedan'"
                            :class="selectedCategory === 'Sedan' ? 'bg-purple-600 text-white' : 'bg-gray-200'"
                            class="px-4 py-2 rounded-lg flex items-center">
                            <span class="mr-2">🚗</span> Sedan
                        </button>
                        <button @click="selectedCategory = 'Sport'"
                            :class="selectedCategory === 'Sport' ? 'bg-purple-600 text-white' : 'bg-gray-200'"
                            class="px-4 py-2 rounded-lg flex items-center">
                            <span class="mr-2">🏎️</span> Sport
                        </button>
                        <button @click="selectedCategory = 'SUV'"
                            :class="selectedCategory === 'SUV' ? 'bg-purple-600 text-white' : 'bg-gray-200'"
                            class="px-4 py-2 rounded-lg flex items-center">
                            <span class="mr-2">🚙</span> SUV
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach ($cars as $car)
                            <div x-show="selectedCategory === 'All' || selectedCategory === '{{ $car->category }}'"
                                class="bg-white p-6 rounded-2xl shadow-md border border-gray-200">
                                  
                                <!-- Car Image Placeholder -->
                                <div class="bg-gray-200 rounded-lg flex justify-center items-center">
                                    <img src="{{ asset($car->image) }}" class="rounded-lg object-contain" alt="Car Image">
                                </div>

                                <!-- Title & Price Row -->
                                <div class="flex justify-between items-center mt-4">
                                    <h2 class="text-lg font-bold text-gray-900">{{ $car->brand }} {{ $car->model }}</h2>
                                    <p class="text-purple-600 font-bold text-lg">
                                        ${{ $car->rent_price }}<span class="text-gray-500 text-sm"> /day</span>
                                    </p>
                                </div>

                                <!-- Category -->
                                <p class="text-gray-500 text-left text-sm">{{ $car->category }}</p>

                                <!-- Features (Updated with Icons) -->
                                <div class="flex items-center space-x-5 mt-3 text-gray-700">
                                    <div class="flex items-center space-x-1">
                                        <span class="text-lg">⚙️</span> 
                                        <span class="text-sm">{{ $car->transmission }}</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <span class="text-lg">⛽</span> 
                                        <span class="text-sm">{{ $car->fuel_level }}</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <span class="text-lg">❄️</span> 
                                        <span class="text-sm">Air Conditioner</span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <!-- Button -->
                                    <button class="mt-4 w-full bg-purple-600 text-white py-2 rounded-lg text-sm font-medium" @click.prevent="carModal = true; selectedCar = {
                                        image: '{{ $car->image }}',
                                        brand: '{{ $car->brand }}',
                                        model: '{{ $car->model }}',
                                        transmission: '{{ $car->transmission }}',
                                        fuel_type: '{{ $car->fuel_type }}',
                                        fuel_level: '{{ $car->fuel_level }}',
                                        price: '{{ $car->rent_price }}',
                                        category: '{{ $car->category }}',
                                        platenum: '{{ $car->plate_number }}',
                                        mileage: '{{ $car->mileage }}',
                                        condition: '{{ $car->condition }}',
                                        } ">
                                        View Details
                                    </button>
                                    <button class="mt-4 w-full bg-purple-600 text-white py-2 rounded-lg text-sm font-medium">
                                        Rent Car
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
        
        @include('modals.carModal')

        <!-- Footer Section -->
        <div class="flex flex-col items-center self-center px-20 pt-16 pb-10 w-full bg-white max-md:px-5">
            <div class="flex flex-col items-center w-full max-w-[1296px] max-md:max-w-full">
                <div class="flex flex-wrap gap-10 justify-between items-center w-full text-base leading-loose text-black max-md:max-w-full">
                    <div class="flex gap-3 items-center self-stretch my-auto font-bold w-[180px]">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/2c9d43c585347ba2c25d3a643275b8729d3cacd7a2fef28a0bd4387c51e5903c?placeholderIfAbsent=true&apiKey=9171519205d6418989323d6f5fe10db6"
                            class="object-contain shrink-0 self-stretch my-auto w-12 aspect-square"
                            alt="Car Rental Logo" />
                        <div class="gap-3 self-stretch my-auto">Car Rental</div>
                    </div>
                    <div class="flex gap-3 items-center self-stretch my-auto w-[180px]">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/161e2b3081dbd6774591160b1bac581e10cc3153fd546939e792e85330bb7473?placeholderIfAbsent=true&apiKey=9171519205d6418989323d6f5fe10db6"
                            class="object-contain shrink-0 self-stretch my-auto w-10 aspect-square rounded-[50px]"
                            alt="Address Icon" />
                        <div class="flex flex-col justify-center self-stretch my-auto">
                            <div>Address</div>
                            <div class="mt-3 font-semibold">Oxford Ave. Cary, NC 27511</div>
                        </div>
                    </div>
                    <div class="flex gap-3 self-stretch my-auto w-[180px]">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/3542db54cbd5f673e7048ee06d938f4594ff56c6227a35ed7708344296a72c2f?placeholderIfAbsent=true&apiKey=9171519205d6418989323d6f5fe10db6"
                            class="object-contain shrink-0 my-auto w-10 aspect-square rounded-[50px]"
                            alt="Email Icon" />
                        <div class="flex flex-col justify-center">
                            <div>Email</div>
                            <div class="mt-3 font-semibold">nwiger@yahoo.com</div>
                        </div>
                    </div>
                    <div class="flex gap-3 items-center self-stretch my-auto w-[180px]">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/672e78e26802b7434f8e2fd43b8e0af68dd968da0ede2784876587fcc1ac9142?placeholderIfAbsent=true&apiKey=9171519205d6418989323d6f5fe10db6"
                            class="object-contain shrink-0 self-stretch my-auto w-10 aspect-square rounded-[50px]"
                            alt="Phone Icon" />
                        <div class="flex flex-col justify-center self-stretch my-auto">
                            <div>Phone</div>
                            <div class="mt-3 font-semibold">+537 547-6401</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap gap-10 justify-evenly items-start mt-16 w-full max-md:mt-10">

                    <nav class="flex flex-col text-black w-[180px]" aria-label="Useful links">
                        <h2 class="text-xl font-semibold text-ellipsis">Useful links</h2>
                        <ul class="flex flex-col mt-6 w-full text-base leading-loose list-none p-0">
                            <li><a href="#about" class="text-ellipsis">About us</a></li>
                            <li><a href="#contact" class="mt-4 text-ellipsis">Contact us</a></li>
                            <li><a href="#gallery" class="mt-4 text-ellipsis">Gallery</a></li>
                            <li><a href="#blog" class="mt-4 text-ellipsis">Blog</a></li>
                            <li><a href="#faq" class="mt-4 text-ellipsis">F.A.Q</a></li>
                        </ul>
                    </nav>
                    <nav class="flex flex-col text-black whitespace-nowrap w-[180px]" aria-label="Vehicles">
                        <h2 class="text-xl font-semibold text-ellipsis">Vehicles</h2>
                        <ul class="flex flex-col mt-6 w-full text-base leading-loose list-none p-0">
                            <li><a href="#sedan">Sedan</a></li>
                            <li><a href="#cabriolet" class="mt-4">Sport</a></li>
                            <li><a href="#pickup" class="mt-4">Pickup</a></li>
                            <li><a href="#minivan" class="mt-4 text-ellipsis">Minivan</a></li>
                            <li><a href="#suv" class="mt-4">SUV</a></li>
                        </ul>
                    </nav>
                    
                </div>
            </div>
            <div class="mt-20 text-sm leading-loose text-black max-md:mt-10">
                © Copyright Car Rental 2024. Design by Figma. guru
            </div>
        </div>
    </div>
</x-app-layout>
