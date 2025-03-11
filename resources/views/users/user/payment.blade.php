<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment for Car Rental') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold">Toyota Corolla</h3>
                <p class="text-2xl font-bold text-gray-800">$500.00</p>

                <form id="payment-form" class="mt-6">
                    <div id="card-element" class="p-3 border rounded-md"></div>
                    <button id="submit" class="mt-4 w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">
                        Pay $500
                    </button>
                    <div id="card-errors" class="text-red-500 mt-2"></div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe("{{ env('STRIPE_KEY') }}");
        var elements = stripe.elements();
        var card = elements.create("card");
        card.mount("#card-element");

        var form = document.getElementById("payment-form");
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            stripe.createToken(card).then(function (result) {
                if (result.error) {
                    document.getElementById("card-errors").textContent = result.error.message;
                } else {
                    fetch("{{ route('payment.process') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({ stripeToken: result.token.id, amount: 50000 })
                    }).then(response => response.json())
                        .then(data => alert(data.message))
                        .catch(error => console.error(error));
                }
            });
        });
    </script>
</x-app-layout>