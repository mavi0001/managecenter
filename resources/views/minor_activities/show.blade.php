<x-app-layout>
    <div class="py-12 bg-[#F9FAF9] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#9CAEEB]">
                <h1 class="text-3xl font-bold text-[#171463] mb-6">Activity Details</h1>
                <div class="space-y-4 text-[#171463]">
                    <p><strong>Activity Name:</strong> {{ $minorActivity->activity_name }}</p>
                    <p><strong>Year:</strong> {{ $minorActivity->year }}</p>
                    <p><strong>Start Date:</strong> {{ $minorActivity->start_date }}</p>
                    <p><strong>End Date:</strong> {{ $minorActivity->end_date }}</p>
                    <p><strong>Location Name:</strong> {{ $minorActivity->location_name }}</p>
                    <p><strong>Region:</strong> {{ $minorActivity->province }}</p>
                    <p><strong>Number of Participants:</strong> {{ $minorActivity->number_of_participants }}</p>
                    <p><strong>City:</strong> {{ $minorActivity->city }}</p>
                    <p><strong>Organizer Names:</strong> {{ $minorActivity->organizer_names }}</p>
                </div>
                <div class="mt-6">
                    <a href="{{ route('minor-activities.index') }}" class="bg-[#DA1C59] text-[#F9FAF9] px-6 py-2 rounded-lg hover:bg-[#171463] transition duration-300">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
