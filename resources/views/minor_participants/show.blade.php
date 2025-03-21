<x-app-layout>
    <div class="py-12 bg-[#eff2f3] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#B2BABD]">
                <h1 class="text-3xl font-bold text-[#191565] mb-8 text-center">Participant Details</h1>

                <!-- Participant Details Section -->
                <div class="space-y-6">
                    <!-- Personal Information -->
                    <div class="bg-[#F9FAFB] p-6 rounded-lg shadow-sm border border-[#E5E7EB]">
                        <h2 class="text-xl font-semibold text-[#191565] mb-4">Personal Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-[#191565]">
                            <p><strong class="font-medium">Full Name:</strong> {{ $minorParticipant->full_name }}</p>
                            <p><strong class="font-medium">Age:</strong> {{ $minorParticipant->age }}</p>
                            <p><strong class="font-medium">Date of Birth:</strong> {{ $minorParticipant->date_of_birth }}</p>
                            <p><strong class="font-medium">City:</strong> {{ $minorParticipant->city }}</p>
                        </div>
                    </div>

                    <!-- Guardian Information -->
                    <div class="bg-[#F9FAFB] p-6 rounded-lg shadow-sm border border-[#E5E7EB]">
                        <h2 class="text-xl font-semibold text-[#191565] mb-4">Guardian Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-[#191565]">
                            <p><strong class="font-medium">Father/Guardian Name:</strong> {{ $minorParticipant->father_or_guardian_name }}</p>
                            <p><strong class="font-medium">Father/Guardian Phone:</strong> {{ $minorParticipant->father_or_guardian_phone }}</p>
                        </div>
                    </div>

                    <!-- Activity and Address -->
                    <div class="bg-[#F9FAFB] p-6 rounded-lg shadow-sm border border-[#E5E7EB]">
                        <h2 class="text-xl font-semibold text-[#191565] mb-4">Activity and Address</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-[#191565]">
                            <p><strong class="font-medium">Activity Name:</strong> {{ $minorParticipant->minorActivity->activity_name ?? 'No activity selected' }}</p>
                            <p><strong class="font-medium">Address:</strong> {{ $minorParticipant->address }}</p>
                        </div>
                    </div>

                    <!-- Observation -->
                    <div class="bg-[#F9FAFB] p-6 rounded-lg shadow-sm border border-[#E5E7EB]">
                        <h2 class="text-xl font-semibold text-[#191565] mb-4">Observation</h2>
                        <p class="text-[#191565]">{{ $minorParticipant->observation }}</p>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="mt-8 text-center">
                    <a href="{{ route('minor_participants.index') }}" class="inline-block bg-[#DB1E59] text-white px-6 py-2 rounded-lg hover:bg-[#84D1C7] transition duration-300">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
