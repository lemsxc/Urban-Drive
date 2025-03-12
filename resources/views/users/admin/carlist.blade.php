<x-app-layout>
    <div class="flex overflow-hidden flex-col bg-[#D0CAEA]">
        @include('layouts.top-nav')
        <div class="z-10 -mt-4 w-full max-w-[1400px] max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col">
                <div class="flex flex-col w-1/5 max-md:ml-0 max-md:w-full">
                    @include('layouts.admin-nav')
                </div>
                <div class="mt-8 w-full">
                    <div class="flex flex-col ml-5 w-4/5 max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col mt-8 w-full max-md:mt-10 max-md:max-w-full">
                            <header class="flex flex-wrap gap-10 items-end justify-between w-full max-md:max-w-full">
                                <div class="flex flex-col justify-center min-w-60">
                                    <h1 class="text-3xl font-bold text-teal-950">Car List</h1>
                                </div>

                                <!-- Align search bar and button to the right -->
                                <div class="flex gap-2.5 items-start text-sm text-teal-950 ml-auto">
                                    <!-- Search Box -->
                                    <div
                                        class="relative flex items-center px-5 bg-white rounded-lg min-h-10 min-w-60 w-[260px]">
                                        <svg class="absolute left-3 w-5 h-5 text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                        <input type="text" id="searchInput" onkeyup="filterCars()"
                                            class="pl-10 w-full h-full border-none bg-transparent text-gray-700 outline-none focus:ring-0 focus:outline-none"
                                            placeholder="Type to search...">
                                    </div>

                                    <!-- Add Car Button -->
                                    <button onclick="window.location.href='{{ route('addcars') }}'"
                                        class="flex gap-2 justify-center items-center py-2.5 pr-6 pl-5 text-white bg-indigo-600 rounded-lg min-h-10 max-md:pr-5">
                                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        <span>Add Car</span>
                                    </button>
                                </div>
                            </header>
                        </div>
                    </div>

                    <section
                        class="flex flex-col justify-center pb-5 mt-10 w-full text-sm bg-white rounded-lg text-teal-950 max-w-screen-xl mx-auto">
                        <div class="overflow-x-auto"> <!-- Enables horizontal scrolling if the table overflows -->
                            <table class="min-w-full text-left">
                                <thead class="w-full text-left">
                                    <tr>
                                        <th class="py-3 px-4">ID</th>
                                        <th class="py-3 px-4">Brand</th>
                                        <th class="py-3 px-4">Model</th>
                                        <th class="py-3 px-4">Category</th>
                                        <th class="py-3 px-4">Plate Number</th>
                                        <th class="py-3 px-4">Mileage</th>
                                        <th class="py-3 px-4">Rent Price</th>
                                        <th class="py-3 px-4">Fuel Level</th>
                                        <th class="py-3 px-4">Condition</th>
                                        <th class="py-3 px-4">Status</th>
                                        <th class="py-3 px-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="carTableBody">
                                    @foreach($cars as $car)
                                        <tr class="border-b border-slate-200 car-item">
                                            <td class="py-3 px-4">{{ $car->id }}</td>
                                            <td class="py-3 px-4">{{ $car->brand }}</td>
                                            <td class="py-3 px-4">{{ $car->model }}</td>
                                            <td class="py-3 px-4">{{ $car->category }}</td>
                                            <td class="py-3 px-4">{{ $car->plate_number }}</td>
                                            <td class="py-3 px-4">{{ $car->mileage }}</td>
                                            <td class="py-3 px-4">{{ $car->rent_price }}</td>
                                            <td class="py-3 px-4">{{ $car->fuel_level }}</td>
                                            <td class="py-3 px-4">{{ $car->condition }}</td>
                                            <td class="py-3 px-4">{{ $car->status }}</td>
                                            <td class="py-3 px-4">
                                                <button
                                                    class="text-xs font-medium text-center text-white bg-indigo-600 rounded-sm py-1 px-2">View</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        // Function to filter cars by the search input
        function filterCars() {
            let input = document.getElementById('searchInput').value.toLowerCase();
            let rows = document.querySelectorAll('.car-item'); // Select each row (car item)

            // Loop through all rows to find the match
            rows.forEach(row => {
                let text = row.textContent.toLowerCase();
                row.style.display = text.includes(input) ? "" : "none";
            });
        }
    </script>
</x-app-layout>