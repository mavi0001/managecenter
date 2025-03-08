<x-app-layout>
    <div class="py-12 bg-[#F9FAF9] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#9CAEEB]">
                <h1 class="text-3xl font-bold text-[#3A406D] mb-6">Edit Participant</h1>
                <form action="{{ route('adult-participants.update', $adultParticipant->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">
                        <!-- Full Name -->
                        <div>
                            <label for="full_name" class="block text-sm font-medium text-[#3A406D]">Full Name</label>
                            <input type="text" name="full_name" id="full_name" value="{{ $adultParticipant->full_name }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Age -->
                        <div>
                            <label for="age" class="block text-sm font-medium text-[#3A406D]">Age</label>
                            <input type="number" name="age" id="age" value="{{ $adultParticipant->age }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- CIN -->
                        <div>
                            <label for="cin" class="block text-sm font-medium text-[#3A406D]">CIN</label>
                            <input type="text" name="cin" id="cin" value="{{ $adultParticipant->cin }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium text-[#3A406D]">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $adultParticipant->date_of_birth }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-medium text-[#3A406D]">City</label>
                            <input type="text" name="city" id="city" value="{{ $adultParticipant->city }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Gender -->
                        <div>
                            <label for="gender" class="block text-sm font-medium text-[#3A406D]">Gender</label>
                            <select name="gender" id="gender" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                                <option value="Male" {{ $adultParticipant->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $adultParticipant->gender === 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-[#3A406D]">Email</label>
                            <input type="email" name="email" id="email" value="{{ $adultParticipant->email }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-sm font-medium text-[#3A406D]">Address</label>
                            <input type="text" name="address" id="address" value="{{ $adultParticipant->address }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-[#3A406D]">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" value="{{ $adultParticipant->phone_number }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Activity Name -->
                        <div>
                            <label for="activity_name" class="block text-sm font-medium text-[#3A406D]">Activity Name</label>
                            <input type="text" name="activity_name" id="activity_name" value="{{ $adultParticipant->activity_name }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
                        </div>

                        <!-- Observation -->
                        <div>
                            <label for="observation" class="block text-sm font-medium text-[#3A406D]">Observation</label>
                            <textarea name="observation" id="observation" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300">{{ $adultParticipant->observation }}</textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit" class="bg-[#EF6B69] text-[#F9FAF9] px-6 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300 w-full">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
