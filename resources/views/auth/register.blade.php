<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-green-200 to-blue-200">
        <div class="w-full max-w-sm p-8 bg-white rounded-lg shadow-md">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/Logo.png') }}" alt="Urban Drive PH Logo" class="h-1/2 w-60">
            </div>
            <form method="POST" action="{{ route('register') }}" id="registrationForm">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
                    <div class="flex items-center border rounded-lg px-3">
                        <svg class="w-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 12c2.6 0 5-2.5 5-5s-2.4-5-5-5-5 2.5-5 5 2.4 5 5 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 18c0-3 3-5 7-5s7 2 7 5v2H5v-2z">
                            </path>
                        </svg>
                        <input type="text" name="firstname" class="w-full pl-2 border-none focus:ring-0"
                            placeholder="First Name" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                    <div class="flex items-center border rounded-lg px-3 ">
                        <svg class="w-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 12c2.6 0 5-2.5 5-5s-2.4-5-5-5-5 2.5-5 5 2.4 5 5 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 18c0-3 3-5 7-5s7 2 7 5v2H5v-2z">
                            </path>
                        </svg>
                        <input type="text" name="lastname" class="w-full pl-2 border-none focus:ring-0"
                            placeholder="Last Name" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <div class="flex items-center border rounded-lg px-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7 5 7-5"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16l7-5 7 5"></path>
                        </svg>
                        <input type="email" name="email" class="w-full pl-2 border-none focus:ring-0"
                            placeholder="Email" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <div class="flex items-center border rounded-lg px-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v6m-6-6v6m12-6v6m2-10a9 9 0 10-18 0v4h18v-4z"></path>
                        </svg>
                        <input type="password" name="password" id="password"
                            class="w-full pl-2 border-none focus:ring-0" placeholder="Password" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <div class="flex items-center border rounded-lg px-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v6m-6-6v6m12-6v6m2-10a9 9 0 10-18 0v4h18v-4z"></path>
                        </svg>
                        <input type="password" name="confirm_password" id="confirm_password"
                            class="w-full pl-2 border-none focus:ring-0" placeholder="Confirm Password" required>
                    </div>
                    <span id="passwordError" class="text-red-500 text-sm mt-1 hidden">Passwords do not match!</span>
                </div>
                <div class="mb-6">
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white font-bold py-2 rounded-lg hover:bg-indigo-700"
                        id="submitButton">REGISTER</button>
                </div>
            </form>
            <div class="text-center">
                <p class="text-md">Already have an account? <a href="{{ route('login') }}"
                        class="text-indigo-500 hover:underline">Login here</a></p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function (event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            if (password !== confirmPassword) {
                event.preventDefault();  // Prevent form submission
                document.getElementById('passwordError').classList.remove('hidden');
            }
        });
    </script>
</x-app-layout>