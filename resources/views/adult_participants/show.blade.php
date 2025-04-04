<x-app-layout>
    <div class="py-12 bg-[#F9FAF9] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#9CAEEB]">
                <h1 class="text-3xl font-bold text-[#171463] mb-6">Participant Details</h1>
                <div class="space-y-4 text-[#171463]">
                    <p><strong>Full Name:</strong> {{ $adultParticipant->full_name }}</p>
                    <p><strong>Age:</strong> {{ $adultParticipant->age }}</p>
                    <p><strong>CIN:</strong> {{ $adultParticipant->cin }}</p>
                    <p><strong>Date of Birth:</strong> {{ $adultParticipant->date_of_birth }}</p>
                    <p><strong>City:</strong> {{ $adultParticipant->city }}</p>
                    <p><strong>Gender:</strong> {{ $adultParticipant->gender }}</p>
                    <p><strong>Email:</strong> {{ $adultParticipant->email }}</p>
                    <p><strong>Address:</strong> {{ $adultParticipant->address }}</p>
                    <p><strong>Phone Number:</strong> {{ $adultParticipant->phone_number }}</p>
                    <p><strong class="font-semibold">Activity Name:</strong> {{ $adultParticipant->adultActivity->activity_name ?? 'No activity selected' }}</p>
                    <p><strong>Observation:</strong> {{ $adultParticipant->observation }}</p>
                </div>
                <div class="mt-6">
                    <a href="{{ route('adult-participants.index') }}" class="bg-[#DA1C59] text-[#F9FAF9] px-6 py-2 rounded-lg hover:bg-[#171463] transition duration-300">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
