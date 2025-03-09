<x-app-layout>
    <div class="py-12 bg-[#F9FAF9] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#9CAEEB]">
                <h1 class="text-3xl font-bold text-[#3A406D] mb-6">Edit Activity</h1>
                <form action="{{ route('adult-activities.update', $adultActivity->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">
                        <!-- Activity Name -->
                        <div>
                            <label for="activity_name" class="block text-sm font-medium text-[#3A406D]">Activity Name</label>
                            <input type="text" name="activity_name" id="activity_name" value="{{ $adultActivity->activity_name }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Year -->
                        <div>
                            <label for="year" class="block text-sm font-medium text-[#3A406D]">Year</label>
                            <input type="text" name="year" id="year" value="{{ $adultActivity->year }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Start Date -->
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-[#3A406D]">Start Date</label>
                            <input type="date" name="start_date" id="start_date" value="{{ $adultActivity->start_date }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- End Date -->
                        <div>
                            <label for="end_date" class="block text-sm font-medium text-[#3A406D]">End Date</label>
                            <input type="date" name="end_date" id="end_date" value="{{ $adultActivity->end_date }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Location Name -->
                        <div>
                            <label for="location_name" class="block text-sm font-medium text-[#3A406D]">Location Name</label>
                            <input type="text" name="location_name" id="location_name" value="{{ $adultActivity->location_name }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Province -->
                        <div>
                            <label for="province" class="block text-sm font-medium text-[#3A406D]">Province</label>
                            <input type="text" name="province" id="province" value="{{ $adultActivity->province }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Number of Participants -->
                        <div>
                            <label for="number_of_participants" class="block text-sm font-medium text-[#3A406D]">Number of Participants</label>
                            <input type="number" name="number_of_participants" id="number_of_participants" value="{{ $adultActivity->number_of_participants }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-medium text-[#3A406D]">City</label>
                            <input type="text" name="city" id="city" value="{{ $adultActivity->city }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Organizer Names -->
                        <div>
                            <label for="organizer_names" class="block text-sm font-medium text-[#3A406D]">Organizer Names</label>
                            <input type="text" name="organizer_names" id="organizer_names" value="{{ $adultActivity->organizer_names }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>
                    </div>

                    <!-- Update Button -->
                    <div class="mt-6">
                        <button type="submit" class="bg-[#EF6B69] text-[#F9FAF9] px-6 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300 w-full">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
