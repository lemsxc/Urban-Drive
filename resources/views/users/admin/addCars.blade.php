<x-app-layout>
    <div class="flex overflow-hidden flex-col bg-[#D0CAEA]">
        @include('layouts.top-nav')
        <div class="z-10 -mt-4 w-full max-w-[1400px] max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col">
                <div class="flex flex-col w-1/5 max-md:ml-0 max-md:w-full">
                    @include('layouts.admin-nav')
                </div>
                <!-- Main Content -->
                <div class="container mx-auto px-6 py-10">
                    <form action="{{ route('add.cars') }}" method="POST" enctype="multipart/form-data" class="mt-8 space-y-8">
                        @csrf
                        <!-- Header Section -->
                        <div class="flex justify-between items-center">
                            <div>
                                <h1 class="text-3xl font-semibold text-teal-950">Add Car</h1>
                                <p class="mt-2 text-sm text-gray-500">Enter vehicle details to register it in the system.</p>
                            </div>
                            <!-- Submit Button -->
                            <div>
                                <button type="submit"
                                    class="px-6 py-3 text-white bg-teal-700 rounded-lg hover:bg-teal-600 transition duration-300">
                                    Save Vehicle
                                </button>
                            </div>
                        </div>

                        <!-- Vehicle Details -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="flex flex-col">
                                <label for="brand" class="text-sm font-semibold text-gray-700">Brand</label>
                                <input type="text" id="brand" name="brand"
                                    class="mt-2 p-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-teal-500"
                                    required>
                            </div>

                            <div class="flex flex-col">
                                <label for="model" class="text-sm font-semibold text-gray-700">Model</label>
                                <input type="text" id="model" name="model"
                                    class="mt-2 p-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-teal-500"
                                    required>
                            </div>

                            <div class="flex flex-col">
                                <label for="category" class="text-sm font-semibold text-gray-700">Category</label>
                                <select id="category" name="category"
                                    class="mt-2 p-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                                    <option value="SUV">SUV</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="Sport">Sport</option>
                                    <!-- Add more categories if needed -->
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="flex flex-col">
                                <label for="plate_number" class="text-sm font-semibold text-gray-700">Plate Number</label>
                                <input type="text" id="plate_number" name="plate_number"
                                    class="mt-2 p-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-teal-500"
                                    required>
                            </div>

                            <div class="flex flex-col">
                                <label for="mileage" class="text-sm font-semibold text-gray-700">Mileage</label>
                                <input type="number" id="mileage" name="mileage"
                                    class="mt-2 p-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-teal-500"
                                    required>
                            </div>

                            <div class="flex flex-col">
                                <label for="rent_price" class="text-sm font-semibold text-gray-700">Rent Price</label>
                                <input type="number" step="0.01" id="rent_price" name="rent_price"
                                    class="mt-2 p-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-teal-500"
                                    required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="flex flex-col">
                                <label for="fuel_level" class="text-sm font-semibold text-gray-700">Fuel Level</label>
                                <input type="number" id="fuel_level" name="fuel_level"
                                    class="mt-2 p-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-teal-500"
                                    required>
                            </div>

                            <div class="flex flex-col">
                                <label for="condition" class="text-sm font-semibold text-gray-700">Condition</label>
                                <select id="condition" name="condition"
                                    class="mt-2 p-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-teal-500">
                                    <option value="New">New</option>
                                    <option value="Used">Used</option>
                                    <option value="Refurbished">Refurbished</option>
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="status" class="text-sm font-semibold text-gray-700">Status</label>
                                <select id="status" name="status"
                                    class="mt-2 p-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-teal-500">
                                    <option value="Available">Available</option>
                                    <option value="Unavailable">Unavailable</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-col mt-8 max-md:max-w-full">
                            <h2 class="text-2xl font-semibold text-teal-950">Vehicle Image</h2>
                            <div class="flex items-center gap-4 text-xs text-teal-950 mt-5">
                                <!-- Upload Section -->
                                <div
                                    class="flex flex-col items-center p-6 bg-white rounded-lg border border-dashed border-slate-300 w-40 h-40">
                                    <input type="file" name="image" id="vehicleImage" class="hidden" accept="image/*"
                                        multiple onchange="previewImage(event)">
                                    <label for="vehicleImage" class="items-center cursor-pointer text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" width="32" height="32"
                                            fill="#000000" viewBox="0 0 256 256">
                                            <path
                                                d="M208,56H180.28L166.65,35.56A8,8,0,0,0,160,32H96a8,8,0,0,0-6.65,3.56L75.71,56H48A24,24,0,0,0,24,80V192a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V80A24,24,0,0,0,208,56Zm8,136a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V80a8,8,0,0,1,8-8H80a8,8,0,0,0,6.66-3.56L100.28,48h55.43l13.63,20.44A8,8,0,0,0,176,72h32a8,8,0,0,1,8,8ZM128,88a44,44,0,1,0,44,44A44.05,44.05,0,0,0,128,88Zm0,72a28,28,0,1,1,28-28A28,28,0,0,1,128,160Z">
                                            </path>
                                        </svg>
                                        <div class="flex flex-col items-center mt-4">
                                            <span>Upload Or Paste Image</span>
                                            <span class="mt-1.5 font-semibold">jpg/jpeg/png</span>
                                        </div>
                                    </label>
                                </div>

                                <!-- Image Preview -->
                                <div id="imagePreviewContainer"
                                    class="flex items-center justify-center w-full sm:w-1/3 h-40 border border-dashed rounded-lg overflow-hidden">
                                    <img id="imagePreview" class="w-full h-full object-cover" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Preview image when file is selected
        function previewImage(event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                var preview = document.getElementById('imagePreview');
                preview.src = e.target.result;
                preview.classList.remove('hidden'); // Show the preview
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</x-app-layout>
