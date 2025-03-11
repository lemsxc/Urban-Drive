<div x-cloak x-show="paymentModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
    @keydown.escape.window="paymentModal = false">
    <div class="bg-white p-6 rounded-lg w-96">
        <h2 class="text-xl font-bold mb-2">Car Details</h2>

        <!-- Car Image -->
        <img id="car_image" :src="carDetails . image" alt="Car Image" class="w-full h-40 object-cover rounded-md mb-3">

        <!-- Car Details -->
        <p class="font-semibold hidden">Id <span id="car_id" x-text="carDetails.id"></span></p>
        <p class="font-semibold">Car Name: <span id="car_name"
                x-text="carDetails.brand + ' ' + carDetails.model"></span></p>
        <p class="text-gray-600">Transmission: <span id="car_transmission" x-text="carDetails.transmission"></span></p>
        <p class="text-gray-600">Fuel Type: <span id="car_fuel" x-text="carDetails.fuel_type"></span></p>
        <p class="text-gray-600">Mileage: <span id="car_mileage" x-text="carDetails.mileage"></span></p>
        <p class="text-green-600 font-bold">Price: $<span id="car_price" x-text="carDetails.rent_price"></span> / day
        </p>

        <!-- Reservation Inputs -->
        <div class="mt-4">
            <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
            <input type="date" id="start_date" class="w-full p-2 border rounded-md" required>
        </div>

        <div class="mt-2">
            <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
            <input type="date" id="end_date" class="w-full p-2 border rounded-md" required>
        </div>

        <!-- Pay with Stripe Button -->
        <button id="checkout-button" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4 w-full">
            Pay with Stripe
        </button>

        <!-- Cancel Button -->
        <button @click="paymentModal = false" class="bg-gray-400 text-white px-4 py-2 rounded-lg mt-3 w-full">
            Cancel
        </button>
    </div>
</div>

<script>
    const stripe = Stripe("{{ env('STRIPE_KEY') }}");
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    document.getElementById("checkout-button").addEventListener("click", async () => {
        const carId = document.getElementById("car_id").textContent; // Assuming `id` is stored as a dataset
        const carName = document.getElementById("car_name").textContent;
        const carPrice = document.getElementById("car_price").textContent;
        const carImage = document.getElementById("car_image").src;

        // Get selected reservation details
        const startDate = document.getElementById("start_date").value;
        const endDate = document.getElementById("end_date").value;

        // Validate inputs
        if (!startDate || !endDate) {
            alert("Please select both start and end dates.");
            return;
        }

        // Store reservation details in localStorage
        localStorage.setItem("reservation_data", JSON.stringify({
            car_id: carId,
            start_date: startDate,
            end_date: endDate,
            amount: carPrice
        }));

        // Send request to create checkout session
        const response = await fetch("{{ route('stripe.checkout') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": token
            },
            body: JSON.stringify({
                car_id: carId,
                car_name: carName,
                car_image: carImage,
                amount: carPrice,
                start_date: startDate,
                end_date: endDate
            }),
        });

        const session = await response.json();
        stripe.redirectToCheckout({ sessionId: session.id });
    });
</script>