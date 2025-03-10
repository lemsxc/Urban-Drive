<!-- Car Booking Modal -->
<div x-cloak x-show="bookingModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 p-4">
    <div class="bg-white rounded-lg p-6 max-w-lg w-full">
        <!-- Modal Header -->
        <div class="flex justify-between items-center border-b pb-3">
            <h2 class="text-xl font-bold text-gray-900">Car Booking</h2>
            <button @click="bookingModal = false" class="text-gray-500 hover:text-gray-800">&times;</button>
        </div>

        <!-- Booking Form -->
        <form class="mt-4">
            <!-- Full Name -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Full Name</label>
                <input type="text" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-purple-300"
                    placeholder="Enter your full name">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Email</label>
                <input type="email" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-purple-300"
                    placeholder="Enter your email">
            </div>

            <!-- Phone Number -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Phone Number</label>
                <input type="tel" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-purple-300"
                    placeholder="Enter your phone number">
            </div>

            <!-- Pickup Date & Time -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Pickup Date & Time</label>
                <input type="datetime-local"
                    class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-purple-300">
            </div>

            <!-- Drop-off Date & Time -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Drop-off Date & Time</label>
                <input type="datetime-local"
                    class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-purple-300">
            </div>

            <!-- Pickup Location -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Pickup Location</label>
                <input type="text" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-purple-300"
                    placeholder="Enter pickup location">
            </div>

            <!-- Drop-off Location -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Drop-off Location</label>
                <input type="text" class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-purple-300"
                    placeholder="Enter drop-off location">
            </div>

            <!-- Additional Notes -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Additional Notes</label>
                <textarea class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-purple-300" rows="3"
                    placeholder="Any special requests?"></textarea>
            </div>

            <!-- Submit & Cancel Buttons -->
            <div class="flex justify-end space-x-3 mt-4">
                <button type="button" @click="bookingModal = false"
                    class="bg-gray-600 text-white px-6 py-2 rounded-lg">Cancel</button>
                <button type="submit" class="bg-purple-600 text-white px-6 py-2 rounded-lg">Book Now</button>
            </div>
        </form>
    </div>
</div>