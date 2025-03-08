<x-app-layout>
    <div class="py-12 bg-[#F9FAF9] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#9CAEEB]">
                <h1 class="text-3xl font-bold text-[#3A406D] mb-6">Participant Details</h1>
                <div class="space-y-4 text-[#3A406D]">
                    <p><strong class="font-semibold">Full Name:</strong> {{ $minorParticipant->full_name }}</p>
                    <p><strong class="font-semibold">Age:</strong> {{ $minorParticipant->age }}</p>
                    <p><strong class="font-semibold">Date of Birth:</strong> {{ $minorParticipant->date_of_birth }}</p>
                    <p><strong class="font-semibold">City:</strong> {{ $minorParticipant->city }}</p>
                    <p><strong class="font-semibold">Father/Guardian Name:</strong> {{ $minorParticipant->father_or_guardian_name }}</p>
                    <p><strong class="font-semibold">Father/Guardian Phone:</strong> {{ $minorParticipant->father_or_guardian_phone }}</p>
                    <p><strong class="font-semibold">Activity Name:</strong> {{ $minorParticipant->activity_name }}</p>
                    <p><strong class="font-semibold">Address:</strong> {{ $minorParticipant->address }}</p>
                    <p><strong class="font-semibold">Observation:</strong> {{ $minorParticipant->observation }}</p>
                </div>
                <div class="mt-6">
                    <a href="{{ route('minor_participants.index') }}" class="bg-[#EF6B69] text-[#F9FAF9] px-6 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
