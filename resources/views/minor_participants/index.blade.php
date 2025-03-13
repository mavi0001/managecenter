<x-app-layout>
    <div class="py-12 bg-[#eff2f3] min-h-screen">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-[#191565]">Minor Participants</h1>
                <a href="{{ route('minor_participants.create') }}" class="bg-[#DB1E59] text-white px-4 py-2 rounded-lg hover:bg-[#84D1C7] transition duration-300">Add New Participant</a>
            </div>

            <!-- Search Bar -->
            <div class="mb-6">
                <form action="{{ route('minor_participants.index') }}" method="GET">
                    <div class="flex items-center">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search by name, city, or activity..."
                            value="{{ request('search') }}"
                            class="w-full px-4 py-2 border border-[#B2BABD] rounded-lg focus:ring-[#DB1E59] focus:border-[#DB1E59] transition duration-300"
                        />
                        <button
                            type="submit"
                            class="ml-2 bg-[#DB1E59] text-white px-4 py-2 rounded-lg hover:bg-[#84D1C7] transition duration-300"
                        >
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <!-- Participants Table -->
            <div class="bg-white rounded-lg shadow-lg border border-[#B2BABD] overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-[#191565] text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Full Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Age</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">City</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Activity Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#B2BABD]">
                        @foreach ($participants as $participant)
                            <tr class="hover:bg-[#84D1C7]/10 transition duration-300">
                                <td class="px-6 py-4 text-[#191565]">{{ $participant->full_name }}</td>
                                <td class="px-6 py-4 text-[#191565]">{{ $participant->age }}</td>
                                <td class="px-6 py-4 text-[#191565]">{{ $participant->city }}</td>
                                <td class="px-6 py-4 text-[#191565]">{{ $participant->minorActivity->activity_name }}</td>
                                <td class="px-6 py-4 space-x-2">
                                    <!-- View Button -->
                                    <a href="{{ route('minor_participants.show', $participant->id) }}" class=" text-[#84D1C7] px-3 py-2 rounded-lg hover:bg-[#84D1C7] hover:text-white transition duration-300">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ route('minor_participants.edit', $participant->id) }}" class="text-[#D2C1D6] px-3 py-2 rounded-lg hover:bg-[#D2C1D6] hover:text-white transition duration-300">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('minor_participants.destroy', $participant->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class=" text-[#DB1E59] px-3 py-2 rounded-lg hover:bg-[#DB1E59] hover:text-white transition duration-300">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                    <!-- PDF Button -->
                                    <a href="{{ route('minor_participants.export.pdf', $participant->id) }}" class=" text-[#191565] px-3 py-2 rounded-lg hover:bg-[#191565] hover:text-white transition duration-300">
                                        <i class="fas fa-file-pdf"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination Links -->
            <div class="mt-6">
                {{ $participants->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
