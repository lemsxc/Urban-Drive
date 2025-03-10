<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-green-200 to-blue-200">
        <div class="w-full max-w-sm p-8 bg-white rounded-lg shadow-md">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/Logo.png') }}" alt="Urban Drive PH Logo" class="h-1/2 w-60">
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <div class="flex items-center border rounded-lg px-3 py-2">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 21v-2a4 4 0 00-8 0v2M12 11a4 4 0 100-8 4 4 0 000 8z"></path>
                        </svg>
                        <input type="email" name="email" class="w-full border-none focus:ring-0" placeholder="Email"
                            required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <div class="flex items-center border rounded-lg px-3 py-2">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v6m-6-6v6m12-6v6m2-10a9 9 0 10-18 0v4h18v-4z"></path>
                        </svg>
                        <input type="password" name="password" class="w-full pl-2 border-none focus:ring-0"
                            placeholder="Password" required>
                    </div>
                </div>
                <div class="mb-6">
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white font-bold py-2 rounded-lg hover:bg-indigo-700">LOGIN</button>
                </div>
                <div class="text-center">
                    <a href="" class="text-sm text-indigo-500 hover:underline">Forgot password?</a>
                </div>
            </form>
            <div class="text-center mt-10">
                <p class="text-md">Don't have an account? <a href="{{ route('register') }}"
                        class="text-indigo-500 hover:underline">Register here</a></p>
            </div>
        </div>
    </div>
</x-app-layout>