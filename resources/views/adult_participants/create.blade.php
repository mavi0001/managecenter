<x-app-layout>
    <div class="py-12 bg-[#F9FAF9] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#9CAEEB]">
                <h1 class="text-3xl font-bold text-[#171463] mb-6">Add New Participant</h1>
                <form action="{{ route('adult-participants.store') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <!-- Full Name -->
                        <div>
                            <label for="full_name" class="block text-sm font-medium text-[#171463]">Full Name</label>
                            <input type="text" name="full_name" id="full_name" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300" required>
                        </div>

                        <!-- Age -->
                        <div>
                            <label for="age" class="block text-sm font-medium text-[#171463]">Age</label>
                            <input type="number" name="age" id="age" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300" required>
                        </div>

                        <!-- CIN -->
                        <div>
                            <label for="cin" class="block text-sm font-medium text-[#171463]">CIN</label>
                            <input type="text" name="cin" id="cin" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300" required>
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium text-[#171463]">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300" required>
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-medium text-[#171463]">City</label>
                            <input type="text" name="city" id="city" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300" required>
                        </div>

                        <!-- Gender -->
                        <div>
                            <label for="gender" class="block text-sm font-medium text-[#171463]">Gender</label>
                            <select name="gender" id="gender" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-[#171463]">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300" required>
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-sm font-medium text-[#171463]">Address</label>
                            <input type="text" name="address" id="address" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300" required>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-[#171463]">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300" required>
                        </div>

                        <div class="mb-4">
                            <label for="adult_activity_id" class="block text-sm font-medium text-gray-700">Select Activity</label>
                            <select name="adult_activity_id" id="adult_activity_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#DB1E59] focus:border-[#DB1E59]">
                                <option value="">Select an activity</option>
                                @foreach ($activities as $activity)
                                    <option value="{{ $activity->id }}">{{ $activity->activity_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Observation -->
                        <div>
                            <label for="observation" class="block text-sm font-medium text-[#171463]">Observation</label>
                            <textarea name="observation" id="observation" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit" class="bg-[#DA1C59] text-[#F9FAF9] px-6 py-2 rounded-lg hover:bg-[#171463] transition duration-300 w-full">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
