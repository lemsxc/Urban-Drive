<x-app-layout>
    <div class="flex overflow-hidden flex-col bg-[#D0CAEA]">
        @include('layouts.topnav')
        <div class="z-10 -mt-4 w-full max-w-[1400px] max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col">
                <div class="flex flex-col w-1/5 max-md:ml-0 max-md:w-full">
                    @include('layouts.navigation')
                </div>
                <div class="flex flex-col self-stretch w-full">
                    <!-- Tabs Section -->
                    <div class="mt-8 w-full">
                        <div class="flex-1 p-6">
                            <div x-data="{ tab: 'profile' }">
                                <div class="flex border-b">
                                    <!-- Profile Tab -->
                                    <button @click="tab = 'profile'" 
                                            :class="{ 'border-b-2 border-blue-500': tab === 'profile' }" 
                                            class="px-4 py-2 focus:outline-none">
                                        Profile
                                    </button>

                                    <!-- Location Tab -->
                                    <button @click="tab = 'location'" 
                                            :class="{ 'border-b-2 border-blue-500': tab === 'location' }" 
                                            class="px-4 py-2 focus:outline-none">
                                        Location
                                    </button>
                                </div>

                                <div class="p-4">
                                    <!-- Profile Tab Content -->
                                    <div x-show="tab === 'profile'">
                                        <h2 class="text-lg font-semibold mb-2">Profile Settings</h2>
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="mb-4">
                                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                                <input type="text" id="name" name="name" value="Anwar Basahi" class="mt-1 p-2 w-full border rounded-md">
                                            </div>

                                            <div class="mb-4">
                                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                                <input type="email" id="email" name="email" value="anwar@domain.com" class="mt-1 p-2 w-full border rounded-md">
                                            </div>

                                            <div class="mb-4">
                                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                                <input type="password" id="password" name="password" placeholder="********" class="mt-1 p-2 w-full border rounded-md">
                                            </div>

                                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Save Profile</button>
                                        </form>
                                    </div>

                                    <!-- Location Tab Content -->
                                    <div x-show="tab === 'location'">
                                        <h2 class="text-lg font-semibold mb-2">Location Settings</h2>
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="mb-4">
                                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                                <input type="text" id="address" name="address" value="123 Main St, City" class="mt-1 p-2 w-full border rounded-md">
                                            </div>

                                            <div class="mb-4">
                                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                                <input type="text" id="city" name="city" value="New York" class="mt-1 p-2 w-full border rounded-md">
                                            </div>

                                            <div class="mb-4">
                                                <label for="zip_code" class="block text-sm font-medium text-gray-700">Zip Code</label>
                                                <input type="text" id="zip_code" name="zip_code" value="10001" class="mt-1 p-2 w-full border rounded-md">
                                            </div>

                                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Save Location</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
