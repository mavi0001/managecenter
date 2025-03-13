<x-app-layout>
    <div class="py-12 bg-[#F3F4F6] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#6B7280]">
                <h1 class="text-3xl font-bold text-[#1E3A8A] mb-6">Add New Minor Participant</h1>
                <form action="{{ route('minor_participants.store') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <!-- Full Name -->
                        <div>
                            <label for="full_name" class="block text-sm font-medium text-[#1E3A8A]">Full Name</label>
                            <input type="text" name="full_name" id="full_name" class="mt-1 block w-full px-4 py-2 border border-[#6B7280] rounded-lg focus:ring-[#2563EB] focus:border-[#2563EB] transition duration-300" required>
                        </div>

                        <!-- Age -->
                        <div>
                            <label for="age" class="block text-sm font-medium text-[#1E3A8A]">Age</label>
                            <input type="number" name="age" id="age" class="mt-1 block w-full px-4 py-2 border border-[#6B7280] rounded-lg focus:ring-[#2563EB] focus:border-[#2563EB] transition duration-300" required>
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium text-[#1E3A8A]">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full px-4 py-2 border border-[#6B7280] rounded-lg focus:ring-[#2563EB] focus:border-[#2563EB] transition duration-300" required>
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-medium text-[#1E3A8A]">City</label>
                            <input type="text" name="city" id="city" class="mt-1 block w-full px-4 py-2 border border-[#6B7280] rounded-lg focus:ring-[#2563EB] focus:border-[#2563EB] transition duration-300" required>
                        </div>

                        <!-- Father/Guardian Name -->
                        <div>
                            <label for="father_or_guardian_name" class="block text-sm font-medium text-[#1E3A8A]">Father/Guardian Name</label>
                            <input type="text" name="father_or_guardian_name" id="father_or_guardian_name" class="mt-1 block w-full px-4 py-2 border border-[#6B7280] rounded-lg focus:ring-[#2563EB] focus:border-[#2563EB] transition duration-300" required>
                        </div>

                        <!-- Father/Guardian Phone -->
                        <div>
                            <label for="father_or_guardian_phone" class="block text-sm font-medium text-[#1E3A8A]">Father/Guardian Phone</label>
                            <input type="text" name="father_or_guardian_phone" id="father_or_guardian_phone" class="mt-1 block w-full px-4 py-2 border border-[#6B7280] rounded-lg focus:ring-[#2563EB] focus:border-[#2563EB] transition duration-300" required>
                        </div>

                        <!-- Activity Name -->
                        {{-- <div>
                            <label for="activity_name" class="block text-sm font-medium text-[#1E3A8A]">Activity Name</label>
                            <input type="text" name="activity_name" id="activity_name" class="mt-1 block w-full px-4 py-2 border border-[#6B7280] rounded-lg focus:ring-[#2563EB] focus:border-[#2563EB] transition duration-300" required>
                        </div> --}}
                        <div class="mb-4">
                            <label for="minor_activity_id" class="block text-sm font-medium text-gray-700">Select Activity</label>
                            <select name="minor_activity_id" id="minor_activity_id" class="mt-1 block w-full px-3 py-2 border border-[#DB1E59] rounded-md shadow-sm focus:outline-none focus:ring-[#DB1E59] focus:border-[#DB1E59]">
                                <option value="">Select an activity</option>
                                @foreach ($activities as $activity)
                                    <option value="{{ $activity->id }}">{{ $activity->activity_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-sm font-medium text-[#1E3A8A]">Address</label>
                            <input type="text" name="address" id="address" class="mt-1 block w-full px-4 py-2 border border-[#6B7280] rounded-lg focus:ring-[#2563EB] focus:border-[#2563EB] transition duration-300" required>
                        </div>

                        <!-- Observation -->
                        <div>
                            <label for="observation" class="block text-sm font-medium text-[#1E3A8A]">Observation</label>
                            <textarea name="observation" id="observation" class="mt-1 block w-full px-4 py-2 border border-[#6B7280] rounded-lg focus:ring-[#2563EB] focus:border-[#2563EB] transition duration-300"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit" class="bg-[#DB1E59] text-white px-6 py-2 rounded-lg hover:bg-[#84D1C7] transition duration-300 w-full">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
