<div x-cloak x-show="carModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 p-4"
    @keydown.escape.window="showAcceptModal = false">
    <div class="bg-white rounded-lg p-6 max-w-2xl w-full">
        <div class="flex justify-between items-center border-b pb-3">
            <h2 class="text-xl font-bold" x-text="selectedCar.brand + ' ' + selectedCar.model"></h2>
            <button @click="carModal = false" class="text-gray-500 hover:text-gray-800">&times;</button>
        </div>

        <img :src="selectedCar ? selectedCar.image : ''" class="rounded-lg mx-auto w-11/12 h-72" alt="Car Image">

        <!-- Technical Specifications -->
        <div class="mt-6">
            <h3 class="font-bold text-lg">Technical Specification</h3>
            <div class="grid grid-cols-4 gap-4 mt-2">
                <div class="bg-gray-100 p-3 rounded-lg">
                    <p class="font-semibold">Category</p>
                    <p class="text-gray-600" x-text="selectedCar.category"></p>
                </div>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <p class="font-semibold">Transmission</p>
                    <p class="text-gray-600" x-text="selectedCar.transmission"></p>
                </div>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <p class="font-semibold">Fuel</p>
                    <p class="text-gray-600" x-text="selectedCar.fuel_type"></p>
                </div>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <p class="font-semibold">Fuel Level</p>
                    <p class="text-gray-600" x-text="selectedCar.fuel_level"></p>
                </div>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <p class="font-semibold">Rent Price</p>
                    <p class="text-gray-600" x-text="selectedCar.price"></p>
                </div>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <p class="font-semibold">Plate Number</p>
                    <p class="text-gray-600" x-text="selectedCar.platenum"></p>
                </div>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <p class="font-semibold">Mileage</p>
                    <p class="text-gray-600" x-text="selectedCar.mileage">km</p>
                </div>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <p class="font-semibold">Condition</p>
                    <p class="text-gray-600" x-text="selectedCar.condition"></p>
                </div>
            </div>
        </div>

        <!-- Car Equipment -->
        <div class="mt-6">
            <h3 class="font-bold text-lg">Car Equipment</h3>
            <ul class="mt-2 grid grid-cols-2 gap-2">
                <li class="flex items-center space-x-2 text-gray-700">
                    <span class="text-purple-600">&#10003;</span>
                    <span>ABS</span>
                </li>
                <li class="flex items-center space-x-2 text-gray-700">
                    <span class="text-purple-600">&#10003;</span>
                    <span>Air Bags</span>
                </li>
                <li class="flex items-center space-x-2 text-gray-700">
                    <span class="text-purple-600">&#10003;</span>
                    <span>Cruise Control</span>
                </li>
                <li class="flex items-center space-x-2 text-gray-700">
                    <span class="text-purple-600">&#10003;</span>
                    <span>Air Conditioner</span>
                </li>
            </ul>
        </div>

        <div class="flex justify-center items-center space-x-4 row-span-1">
            <!-- Close Button -->
            <div class="mt-6 text-center">
                <button @click="carModal = false" class="bg-gray-600 text-white px-6 py-2 rounded-lg">Close</button>
            </div>
        </div>

    </div>
</div>