<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#D0CAEA] py-12 px-6 lg:px-8">
        <div class="max-w-lg w-full bg-white rounded-lg shadow-lg p-6">

            <div class="mb-6 text-sm text-gray-600">
                <img src="{{ asset('images/Logo.png') }}" class="mb-5 mx-auto" alt="">
                <p>{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-6 text-sm text-green-600 bg-green-50 p-4 rounded-lg border-l-4 border-green-500">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="space-y-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div class="flex mx-auto items-center justify-center">
                        <x-primary-button class="w-full items-center text-center">
                            {{ __('Resend Verification Email') }}
                        </x-primary-button>
                    </div>
                </form>

                <form method="GET" action="{{ route('logout') }}">
                    @csrf
                    <div class="flex justify-center">
                        <button type="submit"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Log Out') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>