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
                            <header class="flex flex-wrap gap-10 items-end max-md:mr-0.5 max-md:max-w-full">
                                <div class="flex flex-col justify-center min-w-60">
                                    <h1 class="text-3xl font-bold text-teal-950">Driver List</h1>
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
                                        <input type="text" id="searchInput" onkeyup="filterDrivers()"
                                            class="pl-10 w-full h-full border-none bg-transparent text-gray-700 outline-none focus:ring-0 focus:outline-none"
                                            placeholder="Type to search...">
                                    </div>

                                    <button onclick="window.location.href='{{ route('addDrivers') }}'"
                                        class="flex gap-2 justify-center items-center py-2.5 pr-6 pl-5 text-white bg-indigo-600 rounded-lg min-h-10 max-md:pr-5">
                                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        <span>Add Driver</span>
                                    </button>
                                </div>
                            </header>
                        </div>


                        <section
                            class="flex flex-col justify-center pb-5 mt-10 w-full text-sm bg-white rounded-lg text-teal-950 max-md:max-w-full">
                            <table class="w-full text-left">
                                <thead class="font-semibold border-b border-slate-200">
                                    <tr>
                                        <th class="py-3 px-4">Driver ID</th>
                                        <th class="py-3 px-4">Name</th>
                                        <th class="py-3 px-4">Contact Number</th>
                                        <th class="py-3 px-4">Vehicle Type</th>
                                        <th class="py-3 px-4">Vehicle Number</th>
                                        <th class="py-3 px-4">Joining Date</th>
                                        <th class="py-3 px-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Driver rows can be generated dynamically here using Laravel Blade syntax -->
                                    <tr class="border-b border-slate-200">
                                        <td class="py-3 px-4">1</td>
                                        <td class="py-3 px-4">Boss</td>
                                        <td class="py-3 px-4">09123456789</td>
                                        <td class="py-3 px-4">Sport</td>
                                        <td class="py-3 px-4 text-teal-950">45648</td>
                                        <td class="py-3 px-4">Karon</td>
                                        <td class="py-3 px-4">
                                            <button
                                                class="text-xs font-medium text-center text-white bg-indigo-600 rounded-sm py-1 px-2">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function filterDrivers() {
            let input = document.getElementById('searchInput').value.toLowerCase();
            let cars = document.querySelectorAll('.car-item'); // Add this class to car elements
            cars.forEach(car => {
                let text = car.textContent.toLowerCase();
                car.style.display = text.includes(input) ? "" : "none";
            });
        }

        function toggleFilter() {
            alert('Filter function coming soon!'); // Replace this with a modal or dropdown logic
        }
    </script>
</x-app-layout>