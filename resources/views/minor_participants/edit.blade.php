<x-app-layout>
    <div class="py-12 bg-[#eff2f3] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#D2C1D6]">
                <h1 class="text-3xl font-bold text-[#191565] mb-6">Edit Participant</h1>
                <form action="{{ route('minor_participants.update', $minorParticipant->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-6">
                        <!-- Personal Information Section -->
                        <div>
                            <h2 class="text-xl font-semibold text-[#191565] mb-4">Personal Information</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                    <input type="text" name="full_name" id="full_name" value="{{ $minorParticipant->full_name }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                                </div>
                                <div>
                                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                                    <input type="number" name="age" id="age" value="{{ $minorParticipant->age }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                                </div>
                                <div>
                                    <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                    <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $minorParticipant->date_of_birth }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                                </div>
                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" name="city" id="city" value="{{ $minorParticipant->city }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                                </div>
                            </div>
                        </div>

                        <!-- Guardian Information Section -->
                        <div>
                            <h2 class="text-xl font-semibold text-[#191565] mb-4">Guardian Information</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="father_or_guardian_name" class="block text-sm font-medium text-gray-700">Father/Guardian Name</label>
                                    <input type="text" name="father_or_guardian_name" id="father_or_guardian_name" value="{{ $minorParticipant->father_or_guardian_name }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                                </div>
                                <div>
                                    <label for="father_or_guardian_phone" class="block text-sm font-medium text-gray-700">Father/Guardian Phone</label>
                                    <input type="text" name="father_or_guardian_phone" id="father_or_guardian_phone" value="{{ $minorParticipant->father_or_guardian_phone }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                                </div>
                            </div>
                        </div>

                        <!-- Activity and Address Section -->
                        <div>
                            <h2 class="text-xl font-semibold text-[#191565] mb-4">Activity and Address</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="minor_activity_id" class="block text-sm font-medium text-gray-700">Select Activity</label>
                                    <select name="minor_activity_id" id="minor_activity_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#DB1E59] focus:border-[#DB1E59]">
                                        <option value="">Select an activity</option>
                                        @foreach ($activities as $activity)
                                            <option value="{{ $activity->id }}" {{ $minorParticipant->minor_activity_id == $activity->id ? 'selected' : '' }}>
                                                {{ $activity->activity_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                    <input type="text" name="address" id="address" value="{{ $minorParticipant->address }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                                </div>
                            </div>
                        </div>

                        <!-- Observation Section -->
                        <div>
                            <h2 class="text-xl font-semibold text-[#191565] mb-4">Observation</h2>
                            <div>
                                <label for="observation" class="block text-sm font-medium text-gray-700">Observation</label>
                                <textarea name="observation" id="observation" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300">{{ $minorParticipant->observation }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit" class="bg-[#DB1E59] text-white px-6 py-2 rounded-lg hover:bg-[#84D1C7] transition duration-300 w-full">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
