<x-guest-layout>
    <div>
        <div class="w-full max-w-md">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-[#EF6B69]" :status="session('status')" />

            <div class="bg-white rounded-lg shadow-lg border border-[#9CAEEB] p-8">
                <h2 class="text-2xl font-bold text-[#3A406D] mb-6 text-center">Welcome Admin </h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-[#3A406D]">Email</label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-[#EF6B69]" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-[#3A406D]">Password</label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-[#EF6B69]" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mb-6">
                        <input
                            id="remember_me"
                            type="checkbox"
                            name="remember"
                            class="rounded border-[#9CAEEB] text-[#EF6B69] focus:ring-[#EF6B69]"
                        />
                        <label for="remember_me" class="ml-2 text-sm text-[#3A406D]">Remember me</label>
                    </div>

                    <!-- Login Button -->
                    <div class="mb-4">
                        <button
                            type="submit"
                            class="w-full bg-[#EF6B69] text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300"
                        >
                            Log in
                        </button>
                    </div>

                    <!-- Forgot Password Link -->
                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a
                                href="{{ route('password.request') }}"
                                class="text-sm text-[#3A406D] hover:text-[#EF6B69] transition duration-300"
                            >
                                Forgot your password?
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
