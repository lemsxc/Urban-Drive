<x-app-layout>
    <div x-data="{ carModal: false, showAll: false, selectedCar: {}, }" class="flex flex-col items-center bg-white">
        <div class="flex overflow-hidden flex-col w-full bg-white max-w-[1440px] max-md:p-5">
            @include('layouts.user-nav')
            <div
                class="flex relative items-center p-20 mx-20 my-0 bg-indigo-600 min-h-[660px] rounded-[40px] max-md:px-5 max-md:py-10 max-md:m-0 max-md:flex-col">
                <!-- Left Side Text -->
                <div class="text-black max-w-[686px]">
                    <h1 class="mb-7 text-6xl font-bold text-white max-md:text-4xl">
                        Experience the Road Like Never Before
                    </h1>
                    <p class="mb-8 text-base text-white">
                        Discover the freedom of hassle-free car rentals with UrbanDrive. Whether you're planning a city
                        escape or a road trip adventure, our premium selection of vehicles ensures a smooth,
                        comfortable, and affordable journey. Book your ride today and enjoy the road on your terms.
                    </p>
                    <a href="#cars" class="px-7 py-3 font-semibold text-black bg-amber-500 rounded-xl">
                        View All Cars
                    </a>
                </div>

                <!-- Right Side Car Carousel -->
                <div class="w-[50%] h-[300px] ml-auto max-md:w-full max-md:mt-10">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/bmw.jpg') }}" alt="Car 1"
                                    class="w-full h-full object-cover rounded-lg">
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/supra.jpg') }}" alt="Car 2"
                                    class="w-full h-full object-cover rounded-lg">
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/gallardo.jpg') }}" alt="Car 3"
                                    class="w-full h-full object-cover rounded-lg">
                            </div>
                        </div>
                        <!-- Pagination & Navigation -->
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next text-white"></div>
                        <div class="swiper-button-prev text-white"></div>
                    </div>
                </div>
            </div>

            <div
                class="flex justify-between px-20 py-16 text-center max-md:flex-col max-md:gap-10 max-md:items-center max-md:px-5 max-md:py-10">
                <div class="w-[357px]">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6cdc6760df2e7bc0317b9562a226b18ce207292fe7868a681f09f7074622a23f?apiKey=9171519205d6418989323d6f5fe10db6&"
                        alt="Availability" class="mx-auto mt-0 mb-5 w-16 h-16" />
                    <h3 class="mb-7 text-2xl font-semibold">Availability</h3>
                    <p class="text-base leading-6 text-black">UrbanDrive ensures that rental cars are always accessible
                        when you need them. With a wide selection of vehicles and flexible booking options, you can rent
                        a car anytime, anywhere in the Philippines.</p>
                </div>
                <div class="w-[357px]">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/471f5382ffc4c1c2d1fb6051d6d9ecde3855a570f4fedb9e4a9232b6ba2d4e90?apiKey=9171519205d6418989323d6f5fe10db6&"
                        alt="Comfort" class="mx-auto mt-0 mb-5 w-16 h-16" />
                    <h3 class="mb-7 text-2xl font-semibold">Comfort</h3>
                    <p class="text-base leading-6 text-black">Enjoy a smooth and comfortable ride with our
                        well-maintained, modern vehicles. Whether you're traveling for business or leisure, UrbanDrive
                        provides a stress-free driving experience with clean interiors and reliable performance.</p>
                </div>
                <div class="w-[357px]">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fabf387ee563e77621a59feaebb21e96aeb666d17458dc58fb9dee129328065e?apiKey=9171519205d6418989323d6f5fe10db6&"
                        alt="Savings" class="mx-auto mt-0 mb-5 w-16 h-16" />
                    <h3 class="mb-7 text-2xl font-semibold">Savings</h3>
                    <p class="text-base leading-6 text-black">UrbanDrive offers competitive pricing with no hidden fees,
                        ensuring you get the best value for your money. Choose from budget-friendly rental plans and
                        enjoy affordable, high-quality service.</p>
                </div>
            </div>
            <div class="flex gap-28 py-16 pr-40 pl-20 max-md:flex-col max-md:gap-10 max-md:px-5 max-md:py-10">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1ff60a724d3060ed4319dd67417103a572e6cded71cea56a2071dbbcb5a80858?apiKey=9171519205d6418989323d6f5fe10db6&"
                    alt="Car" class="object-cover rounded-3xl h-[440px] w-[440px]" />
                <div class="flex-1">
                    <div class="mb-7">
                        <span class="mr-4 w-8 h-8 text-base text-black bg-indigo-600 rounded-[50px]">1</span>
                        <h3 class="text-xl font-semibold">Erat at semper</h3>
                        <p class="mt-5 text-base leading-normal">Non amet fermentum est in enim at sit ullamcorper. Sit
                            elementum rhoncus nullam feugiat. Risus sem fermentum dui ornare praesent.</p>
                    </div>
                    <div class="mb-7">
                        <span class="mr-4 w-8 h-8 text-base text-black bg-indigo-600 rounded-[50px]">2</span>
                        <h3 class="text-xl font-semibold">Urna nec vivamus risus duis arcu</h3>
                        <p class="mt-5 text-base leading-normal">Aliquam adipiscing velit semper morbi. Purus non eu
                            cursus
                            porttitor tristique et gravida.</p>
                    </div>
                    <div class="mb-7">
                        <span class="mr-4 w-8 h-8 text-base text-black bg-indigo-600 rounded-[50px]">3</span>
                        <h3 class="text-xl font-semibold">Lobortis euismod imperdiet tempus</h3>
                        <p class="mt-5 text-base leading-normal">Viverra scelerisque mauris et nullam molestie et. Augue
                            adipiscing praesent nisl cras nunc luctus viverra nisi</p>
                    </div>
                    <div class="mb-7">
                        <span class="mr-4 w-8 h-8 text-base text-black bg-indigo-600 rounded-[50px]">4</span>
                        <h3 class="text-xl font-semibold">Cras nulla aliquet nam eleifend amet et</h3>
                        <p class="mt-5 text-base leading-normal">Aliquam adipiscing velit semper morbi. Purus non eu
                            cursus
                            porttitor tristique et gravida.</p>
                    </div>
                </div>
            </div>
            <div class="px-20 py-16 max-md:px-5 max-md:py-10">
                <div class="flex justify-between items-end mb-10">
                    <h2 class="text-5xl font-bold leading-tight">
                        <span>Choose the car that</span>
                        <br />
                        <span>suits you</span>
                    </h2>
                    <a href="#" class="flex gap-2 items-center text-xl font-bold">
                        <span>View All</span>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/eb74af6c9042e77ae06e20bc25fb2de3f76456a005182cc85e7aac22a06086b6?apiKey=9171519205d6418989323d6f5fe10db6&"
                            alt="Arrow" />
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Loop through the first 9 cars -->
                    @foreach($cars->slice(0, 9) as $car)
                        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-200">
                            <!-- Car Image -->
                            <div class="bg-gray-200 rounded-lg flex justify-center items-center">
                                <img src="{{ $car->image }}" class="rounded-lg object-contain" alt="Car Image">
                            </div>

                            <!-- Title & Price -->
                            <div class="flex justify-between items-center mt-10">
                                <h2 class="text-lg font-bold text-gray-900">{{ $car->brand }} {{ $car->model }}</h2>
                                <p class="text-purple-600 font-bold text-lg">
                                    ${{ $car->rent_price }}<span class="text-gray-500 text-sm"> /day</span>
                                </p>
                            </div>

                            <!-- Category -->
                            <p class="text-gray-500 text-left text-sm">{{ $car->category }}</p>

                            <!-- Features -->
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
                                <!-- View Details Button -->
                                <button class="mt-4 w-full bg-purple-600 text-white py-2 rounded-lg text-sm font-medium"
                                    @click="carModal = true; selectedCar = {
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
                <div
                    class="p-16 mx-20 my-16 text-center bg-indigo-600 rounded-3xl max-md:px-5 max-md:py-10 max-md:mx-5 max-md:my-10">
                    <h2 class="mb-5 text-5xl font-bold text-black">Facts in numbers</h2>
                    <p class="mb-20 text-base text-black">Amet cras hac orci lacus. Faucibus ipsum arcu lectus nibh
                        sapien
                        bibendum ullamcorper in. Diam tincidunt tincidunt erat at semper fermentum</p>
                    <div
                        class="grid gap-16 justify-center grid-cols-[repeat(4,240px)] max-md:gap-5 max-md:grid-cols-[1fr_1fr]">
                        <div class="flex gap-4 items-center p-4 bg-white rounded-3xl">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1791f6d31b6dceb58a8007a6d7db56a7dac5c56ebe55fead99dd7cda2f8133ac?apiKey=9171519205d6418989323d6f5fe10db6&"
                                alt="Cars" class="rounded-xl h-[72px] w-[72px]" />
                            <div>
                                <p class="text-2xl font-bold text-black">540+</p>
                                <p class="mt-2 text-base font-semibold text-black">cars</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-center p-4 bg-white rounded-3xl">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f12bcba3e33ad49b6fb0d3e20e6d2e29e801b0de52e61344d01fec6808a030da?apiKey=9171519205d6418989323d6f5fe10db6&"
                                alt="Customers" class="rounded-xl h-[72px] w-[72px]" />
                            <div>
                                <p class="text-2xl font-bold text-black">20k+</p>
                                <p class="mt-2 text-base font-semibold text-black">customers</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-center p-4 bg-white rounded-3xl">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e27125a637361f39df3a9013a39a5fe988913c8e6a61ba87d615566076d35083?apiKey=9171519205d6418989323d6f5fe10db6&"
                                alt="Years" class="rounded-xl h-[72px] w-[72px]" />
                            <div>
                                <p class="text-2xl font-bold text-black">25+</p>
                                <p class="mt-2 text-base font-semibold text-black">Years</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-center p-4 bg-white rounded-3xl">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/50ec0e51566e56e8824b5f0632f491f4f907ae419d2c7f9a948a64e86ef14ad7?apiKey=9171519205d6418989323d6f5fe10db6&"
                                alt="Miles" class="rounded-xl h-[72px] w-[72px]" />
                            <div>
                                <p class="text-2xl font-bold text-black">20m+</p>
                                <p class="mt-2 text-base font-semibold text-black">Miles</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex relative items-center px-20 py-14 mx-20 my-16 bg-indigo-600 rounded-3xl max-md:flex-col max-md:px-5 max-md:py-10 max-md:mx-5 max-md:my-10">
                    <div class="max-w-[756px]">
                        <h2 class="mb-5 text-5xl font-bold text-black">Enjoy every mile with adorable companionship.
                        </h2>
                        <p class="mb-9 text-base text-black">Amet cras hac orci lacus. Faucibus ipsum arcu lectus nibh
                            sapien bibendum ullamcorper in. Diam tincidunt tincidunt erat</p>
                        <form class="flex gap-5 px-6 py-2.5 bg-white rounded-3xl max-w-[464px]">
                            <label for="citySearch" class="sr-only">Search for a city</label>
                            <input type="text" id="citySearch" placeholder="City"
                                class="flex-1 text-base font-semibold" />
                            <button type="submit"
                                class="px-7 py-3 font-semibold text-black bg-amber-500 rounded-xl">Search</button>
                        </form>
                    </div>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/acb670a1fbfb2b4ef32384adacd1cca7a677adb567c430b8ed67cc0abdab3924?apiKey=9171519205d6418989323d6f5fe10db6&"
                        alt="Car" class="absolute bottom-[7px] h-[380px] right-[74px] w-[380px] max-md:hidden" />
                </div>
            </div>
            <div class="flex flex-col items-center self-center px-20 pt-16 pb-10 w-full bg-white max-md:px-5">
                <div class="flex flex-col items-center w-full max-w-[1296px] max-md:max-w-full">
                    <div
                        class="flex flex-wrap gap-10 justify-between items-center w-full text-base leading-loose text-black max-md:max-w-full">
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
                    <div class="flex flex-wrap gap-10 justify-between items-start mt-16 w-full max-md:mt-10">
                        <div
                            class="flex flex-col justify-between self-stretch text-xl font-semibold leading-7 text-black min-w-[240px] w-[280px]">
                            <div class="text-ellipsis">
                                Faucibus faucibus pellentesque dictum turpis. Id pellentesque turpis
                                massa a id iaculis lorem turpis euismod. Purus at quisque integer sit.
                                Libero quis sapien tempus pellentesque netus leo feugiat augue ut.
                                Sollicitudin vitae dictum sed vulputate.
                            </div>
                            <div class="flex gap-5 self-start mt-9 min-h-[24px]"></div>
                        </div>
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
                                <li><a href="#cabriolet" class="mt-4">Cabriolet</a></li>
                                <li><a href="#pickup" class="mt-4">Pickup</a></li>
                                <li><a href="#minivan" class="mt-4 text-ellipsis">Minivan</a></li>
                                <li><a href="#suv" class="mt-4">SUV</a></li>
                            </ul>
                        </nav>
                        <div class="flex flex-col w-[180px]">
                            <h2 class="text-xl font-semibold text-black text-ellipsis">
                                Download App
                            </h2>
                            <div class="flex flex-col mt-6 max-w-full w-[171px]">
                                <a href="#app-store" class="flex w-full min-h-[50px]"
                                    aria-label="Download from App Store"></a>
                                <a href="#google-play" class="flex mt-6 w-full min-h-[50px]"
                                    aria-label="Download from Google Play"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-20 text-sm leading-loose text-black max-md:mt-10">
                    © Copyright Car Rental 2024. Design by Figma. guru
                </div>
            </div>
        </div>
        @include('modals.carModal')
    </div>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</x-app-layout>