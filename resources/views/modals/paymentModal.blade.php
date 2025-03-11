<!-- Payment Modal -->
<div x-cloak x-data="{ open: false }">
    <div x-show="paymentModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg w-96">
            <h2 class="text-xl font-bold mb-2">Car Details</h2>
            <img src="https://via.placeholder.com/300" alt="Car Image" class="w-full h-40 object-cover rounded-md mb-3">
            <p class="font-semibold">Car Name: <span id="car_name">Toyota Corolla</span></p>
            <p class="text-gray-600">Description: <span id="car_description">A reliable and fuel-efficient sedan.</span>
            </p>
            <p class="text-green-600 font-bold">Price: $<span id="car_price">500</span></p>

            <button id="checkout-button" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-3 w-full">
                Pay with Stripe
            </button>
            <button @click="open = false" class="bg-gray-400 text-white px-4 py-2 rounded-lg mt-3 w-full">
                Cancel
            </button>
        </div>
    </div>
</div>