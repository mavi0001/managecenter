<x-app-layout>

<div class="container mx-auto p-6 bg-[#F9FAF9] min-h-screen">
    <h1 class="text-3xl font-bold text-[#3A406D] mb-6">Participant Details</h1>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-[#9CAEEB]">
        <div class="p-6">
            <h5 class="text-2xl font-semibold text-[#3A406D] mb-4">{{ $minorParticipant->full_name }}</h5>
            <div class="space-y-3 text-[#3A406D]">
                <p><strong class="font-semibold">Age:</strong> {{ $minorParticipant->age }}</p>
                <p><strong class="font-semibold">Date of Birth:</strong> {{ $minorParticipant->date_of_birth }}</p>
                <p><strong class="font-semibold">City:</strong> {{ $minorParticipant->city }}</p>
                <p><strong class="font-semibold">Father/Guardian Name:</strong> {{ $minorParticipant->father_or_guardian_name }}</p>
                <p><strong class="font-semibold">Father/Guardian Phone:</strong> {{ $minorParticipant->father_or_guardian_phone }}</p>
                <p><strong class="font-semibold">Activity name</strong> {{ $minorParticipant->activity_name }}</p>
                <p><strong class="font-semibold">Address:</strong> {{ $minorParticipant->address }}</p>
                <p><strong class="font-semibold">Observation:</strong> {{ $minorParticipant->observation }}</p>
            </div>
        </div>
    </div>
    <a href="{{ route('minor_participants.index') }}" class="mt-6 inline-block bg-[#EF6B69]
    text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300">Back to List</a>
</div>
</x-app-layout>
