<x-app-layout>
    <div class="py-12 bg-[#F9FAF9] min-h-screen">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-[#3A406D]">Adult Participants</h1>
                <a href="{{ route('adult-participants.create') }}" class="bg-[#EF6B69] text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300">Add New Participant</a>
            </div>

            {{-- Search bar --}}
            <div class="mb-6">
                <form action="{{ route('adult-participants.index') }}" method="GET">
                    <div class="flex items-center">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search by name, city, CIN, or activity..."
                            value="{{ request('search') }}"
                            class="w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#EF6B69] focus:border-[#EF6B69] transition duration-300"
                        />
                        <button
                            type="submit"
                            class="ml-2 bg-[#EF6B69] text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300"
                        >
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <div class="bg-white rounded-lg shadow-lg border border-[#9CAEEB] overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-[#3A406D] text-[#F9FAF9]">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Full Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Age</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">CIN</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">City</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Activity name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#9CAEEB]">
                        @foreach ($participants as $participant)
                            <tr class="hover:bg-[#9CAEEB]/10 transition duration-300">
                                <td class="px-6 py-4 text-[#3A406D]">{{ $participant->full_name }}</td>
                                <td class="px-6 py-4 text-[#3A406D]">{{ $participant->age }}</td>
                                <td class="px-6 py-4 text-[#3A406D]">{{ $participant->cin }}</td>
                                <td class="px-6 py-4 text-[#3A406D]">{{ $participant->city }}</td>
                                <td class="px-6 py-4 text-[#3A406D]">{{ $participant->activity_name }}</td>
                                <td class="px-6 py-4 space-x-2">
                                    <!-- View Button -->
                                    <a href="{{ route('adult-participants.show', $participant->id) }}" class="bg-[#9CAEEB] text-[#F9FAF9] px-3 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300" title="View">
                                        <i class="fas fa-eye fa-sm"></i> 
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ route('adult-participants.edit', $participant->id) }}" class="bg-[#EF6B69] text-[#F9FAF9] px-3 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300" title="Edit">
                                        <i class="fas fa-edit fa-sm"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('adult-participants.destroy', $participant->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-[#EF6B69] text-[#F9FAF9] px-3 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300" title="Delete">
                                            <i class="fas fa-trash fa-sm"></i>
                                        </button>
                                    </form>

                                    <!-- PDF Button -->
                                    <a href="{{ route('minor_participants.export.pdf', $participant->id) }}" class="bg-[#3A406D] text-[#F9FAF9] px-3 py-2 rounded-lg hover:bg-[#EF6B69] transition duration-300" title="Export PDF">
                                        <i class="fas fa-file-pdf fa-sm"></i>
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
