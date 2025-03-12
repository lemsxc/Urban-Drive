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
                        <!-- Header Section -->
                        <header class="flex flex-wrap items-end mr-7 max-md:mr-2.5 max-md:max-w-full">
                            <!-- Title and Subtitle -->
                            <div class="flex flex-col justify-center">
                                <h1 class="text-3xl font-bold text-neutral-950">CAR RENTALS</h1>
                                <h2 class="mt-1.5 text-base text-black">TRANSACTIONS</h2>
                            </div>

                            <!-- Action Buttons -->
                            <div
                                class="flex flex-wrap gap-2.5 items-start text-sm min-w-60 text-neutral-950 max-md:max-w-full ml-auto">
                                <div
                                    class="relative flex items-center px-5 bg-white rounded-lg min-h-10 min-w-60 w-[260px]">
                                    <svg class="absolute left-3 w-5 h-5 text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                    <input type="text" id="searchInput" onkeyup="filterTransactions()"
                                        class="pl-10 w-full h-full border-none bg-transparent text-gray-700 outline-none focus:ring-0 focus:outline-none"
                                        placeholder="Search transactions...">
                                </div>
                            </div>
                        </header>
                    </div>


                    <!-- Transactions Table -->
                    <section
                        class="flex flex-col justify-center pb-5 mt-10 w-full text-sm bg-white rounded-lg text-neutral-950 max-md:max-w-full">
                        <table class="min-w-full divide-y divide-gray-200">
                            <!-- Table Header -->
                            <thead>
                                <tr class="bg-slate-200 border-b border-slate-300">
                                    <th class="py-3 px-4 text-center">Trip ID</th>
                                    <th class="py-3 px-4 text-center">Vehicle Type</th>
                                    <th class="py-3 px-4 text-center">Brand</th>
                                    <th class="py-3 px-4 text-center">Model</th>
                                    <th class="py-3 px-4 text-center">Plate Number</th>
                                    <th class="py-3 px-4 text-center">Start Date</th>
                                    <th class="py-3 px-4 text-center">End Date</th>
                                    <th class="py-3 px-4 text-center">Status</th>
                                    <th class="py-3 px-4 text-center">Action</th>
                                </tr>
                            </thead>

                            <!-- Table Rows -->
                            <tbody id="transactionTableBody">
                                @foreach($cars as $reservation)
                                    <tr class="border-b border-slate-300 transaction-item">
                                        <td class="py-3 px-4 text-center">{{ $reservation->id }}</td>
                                        <td class="py-3 px-4 text-center">{{ $reservation->car->category ?? 'N/A' }}
                                        </td>
                                        <td class="py-3 px-4 text-center">{{ $reservation->car->brand ?? 'N/A' }}</td>
                                        <td class="py-3 px-4 text-center">{{ $reservation->car->model ?? 'N/A' }}</td>
                                        <td class="py-3 px-4 text-center">{{ $reservation->car->plate_number ?? 'N/A' }}
                                        </td>
                                        <td class="py-3 px-4 text-center">
                                            {{ \Carbon\Carbon::parse($reservation->start_date)->format('d-m-Y') }}
                                        </td>
                                        <td class="py-3 px-4 text-center">
                                            {{ \Carbon\Carbon::parse($reservation->end_date)->format('d-m-Y') }}
                                        </td>
                                        <td class="py-3 px-4 text-center">{{ ucfirst($reservation->status) }}</td>
                                        <td class="px-8 py-4 text-center">
                                            <button
                                                class="text-xs font-medium text-white bg-indigo-600 rounded-sm min-h-[21px] w-[50px]">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to filter transactions by the search input
        function filterTransactions() {
            let input = document.getElementById('searchInput').value.toLowerCase();
            let rows = document.querySelectorAll('.transaction-item'); // Select each row (transaction item)

            // Loop through all rows to find the match
            rows.forEach(row => {
                let text = row.textContent.toLowerCase();
                row.style.display = text.includes(input) ? "" : "none";
            });
        }
    </script>
</x-app-layout>