<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-[#EF6B69]" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="bg-white p-8 rounded-lg shadow-lg border border-[#9CAEEB] max-w-md mx-auto">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-[#3A406D]" />
            <x-text-input id="email" class="block mt-1 w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-[#EF6B69]" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-[#3A406D]" />
            <x-text-input id="password" class="block mt-1 w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-[#EF6B69]" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-[#9CAEEB] text-[#EF6B69] focus:ring-[#EF6B69]" name="remember">
                <span class="ms-2 text-sm text-[#3A406D]">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-6">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-[#3A406D] hover:text-[#EF6B69] rounded-md focus:outline-none focus:ring-2 focus:ring-[#EF6B69]" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            <x-primary-button class="ms-3 bg-[#EF6B69] text-[#F9FAF9] px-6 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
