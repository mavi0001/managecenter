<x-app-layout>
<div class="container mx-auto p-6 bg-[#F9FAF9] min-h-screen">
    <h1 class="text-3xl font-bold text-[#3A406D] mb-6">Edit Participant</h1>
    <form action="{{ route('minor_participants.update', $minorParticipant->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg border border-[#9CAEEB]">
        @csrf
        @method('PUT')
        <div class="space-y-4">
            <!-- Full Name -->
            <div class="form-group">
                <label for="full_name" class="block text-sm font-medium text-[#3A406D]">Full Name</label>
                <input type="text" name="full_name" id="full_name" value="{{ $minorParticipant->full_name }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
            </div>

            <!-- Age -->
            <div class="form-group">
                <label for="age" class="block text-sm font-medium text-[#3A406D]">Age</label>
                <input type="number" name="age" id="age" value="{{ $minorParticipant->age }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <label for="date_of_birth" class="block text-sm font-medium text-[#3A406D]">Date of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $minorParticipant->date_of_birth }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
            </div>

            <!-- City -->
            <div class="form-group">
                <label for="city" class="block text-sm font-medium text-[#3A406D]">City</label>
                <input type="text" name="city" id="city" value="{{ $minorParticipant->city }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
            </div>

            <!-- Father/Guardian Name -->
            <div class="form-group">
                <label for="father_or_guardian_name" class="block text-sm font-medium text-[#3A406D]">Father/Guardian Name</label>
                <input type="text" name="father_or_guardian_name" id="father_or_guardian_name" value="{{ $minorParticipant->father_or_guardian_name }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
            </div>

            <!-- Father/Guardian Phone -->
            <div class="form-group">
                <label for="father_or_guardian_phone" class="block text-sm font-medium text-[#3A406D]">Father/Guardian Phone</label>
                <input type="text" name="father_or_guardian_phone" id="father_or_guardian_phone" value="{{ $minorParticipant->father_or_guardian_phone }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
            </div>

            <div class="form-group">
                <label for="activity_name" class="block text-sm font-medium text-[#3A406D]">Activity name</label>
                <input type="text" name="activity_name" id="activity_name" value="{{ $minorParticipant->activity_name }}"
                class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69]
                focus:border-[#EF6B69] transition duration-300" required>
            </div>

            <!-- Address -->
            <div class="form-group">
                <label for="address" class="block text-sm font-medium text-[#3A406D]">Address</label>
                <input type="text" name="address" id="address" value="{{ $minorParticipant->address }}" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300" required>
            </div>

            <!-- Observation -->
            <div class="form-group">
                <label for="observation" class="block text-sm font-medium text-[#3A406D]">Observation</label>
                <textarea name="observation" id="observation" class="mt-1 block w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300">{{ $minorParticipant->observation }}</textarea>
            </div>
        </div>

        <!-- Update Button -->
        <button type="submit" class="mt-6 bg-[#EF6B69] text-[#F9FAF9] px-6 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300 w-full sm:w-auto">Update</button>
    </form>
</div>
</x-app-layout>
