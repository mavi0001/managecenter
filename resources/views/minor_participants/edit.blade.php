<x-app-layout>
    <div class="py-12 bg-[#eff2f3] min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full mx-auto px-6">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-[#D2C1D6]">
                <h1 class="text-3xl font-bold text-[#191565] mb-6">Edit Participant</h1>
                <form action="{{ route('minor_participants.update', $minorParticipant->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4 text-[#191565]">
                        <div>
                            <label for="full_name" class="block text-sm font-medium">Full Name</label>
                            <input type="text" name="full_name" id="full_name" value="{{ $minorParticipant->full_name }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                        </div>
                        <div>
                            <label for="age" class="block text-sm font-medium">Age</label>
                            <input type="number" name="age" id="age" value="{{ $minorParticipant->age }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                        </div>
                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $minorParticipant->date_of_birth }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                        </div>
                        <div>
                            <label for="city" class="block text-sm font-medium">City</label>
                            <input type="text" name="city" id="city" value="{{ $minorParticipant->city }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                        </div>
                        <div>
                            <label for="father_or_guardian_name" class="block text-sm font-medium">Father/Guardian Name</label>
                            <input type="text" name="father_or_guardian_name" id="father_or_guardian_name" value="{{ $minorParticipant->father_or_guardian_name }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                        </div>
                        <div>
                            <label for="father_or_guardian_phone" class="block text-sm font-medium">Father/Guardian Phone</label>
                            <input type="text" name="father_or_guardian_phone" id="father_or_guardian_phone" value="{{ $minorParticipant->father_or_guardian_phone }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                        </div>
                        <div>
                            <label for="activity_name" class="block text-sm font-medium">Activity Name</label>
                            <input type="text" name="activity_name" id="activity_name" value="{{ $minorParticipant->activity_name }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                        </div>
                        <div>
                            <label for="address" class="block text-sm font-medium">Address</label>
                            <input type="text" name="address" id="address" value="{{ $minorParticipant->address }}" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300" required>
                        </div>
                        <div>
                            <label for="observation" class="block text-sm font-medium">Observation</label>
                            <textarea name="observation" id="observation" class="mt-1 block w-full px-4 py-2 border border-[#D2C1D6] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300">{{ $minorParticipant->observation }}</textarea>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="bg-[#DB1E59] text-white px-6 py-2 rounded-lg hover:bg-[#84D1C7] transition duration-300 w-full">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
