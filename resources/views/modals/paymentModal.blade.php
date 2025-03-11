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

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe("{{ env('STRIPE_KEY') }}");

    document.getElementById("checkout-button").addEventListener("click", async () => {
        const carName = document.getElementById("car_name").innerText;
        const carDescription = document.getElementById("car_description").innerText;
        const carPrice = document.getElementById("car_price").innerText;
        const carImage = "https://via.placeholder.com/300"; // Replace with actual image URL

        const response = await fetch("{{ route('stripe.checkout') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                car_name: carName,
                car_description: carDescription,
                amount: carPrice,
                car_image: carImage
            }),
        });

        const session = await response.json();
        stripe.redirectToCheckout({ sessionId: session.id });
    });
</script>