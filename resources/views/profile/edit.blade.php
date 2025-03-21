<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#171463] leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#F9FAF9]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Update Profile Information Form -->
            <div class="p-6 sm:p-8 bg-white rounded-lg shadow-lg border border-[#171463]">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Form -->
            <div class="p-6 sm:p-8 bg-white rounded-lg shadow-lg border border-[#171463]">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User Form (Optional) -->
            {{-- <div class="p-6 sm:p-8 bg-white rounded-lg shadow-lg border border-[#171463]">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
