<x-app-layout>
    <div x-data="{ carModal: false, paymentModal: false, selectedCategory: 'All', selectedCar: {}, carDetails: [], }"
        class="flex flex-col items-center bg-white">
        <div class="flex overflow-hidden flex-col w-full bg-white max-w-[1440px] max-md:p-5">
            @include('layouts.user-nav')

            <h1 class="text-3xl text-center font-bold mb-6">Payment form</h1>

            <div class="py-12">
                <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-lg font-semibold" id="carModel">{{ request()->get('car_model') }}</h3>
                        <p class="text-2xl font-bold text-gray-800" id="carPrice">${{ request()->get('car_price') }}</p>

                        <form id="payment-form" class="mt-6" action="" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ request()->get('user_id') }}">
                            <input type="hidden" name="car_id" value="{{ request()->get('car_id') }}">

                            <div class="mb-4">
                                <label for="reserve_date" class="block text-sm font-medium text-gray-700">Reservation
                                    Date</label>
                                <input type="date" name="reserve_date" id="reserve_date"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <div class="mb-4">
                                <label for="start_date" class="block text-sm font-medium text-gray-700">Start
                                    Date</label>
                                <input type="date" name="start_date" id="start_date"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <div class="mb-4">
                                <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                                <input type="date" name="end_date" id="end_date"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <div class="mb-4">
                                <label for="return_date" class="block text-sm font-medium text-gray-700">Return
                                    Date</label>
                                <input type="date" name="return_date" id="return_date"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <!-- Downpayment Calculation -->
                            <div class="mb-4">
                                <label for="downpayment" class="block text-sm font-medium text-gray-700">Downpayment
                                    (20%)</label>
                                <input type="number" name="downpayment" id="downpayment"
                                    value="{{ (request()->get('car_price') * 0.20) }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" readonly>
                            </div>

                            <!-- Stripe or Payment Gateway Element -->
                            <div id="card-element" class="p-3 border rounded-md"></div>

                            <button id="submit"
                                class="mt-4 w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">
                                Pay Downpayment ${{ (request()->get('car_price') * 0.20) }}
                            </button>
                            <div id="card-errors" class="text-red-500 mt-2"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>