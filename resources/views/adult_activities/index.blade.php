<x-app-layout>
    <div class="py-12 bg-[#F9FAF9] min-h-screen">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-[#171463]">Adult Activities</h1>
                <a href="{{ route('adult-activities.create') }}" class="bg-[#DA1C59] text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#171463] transition duration-300">Add New Activity</a>
            </div>

            <!-- Search Bar -->
            <div class="mb-6">
                <form action="{{ route('adult-activities.index') }}" method="GET">
                    <div class="flex items-center">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search by name, city, or activity..."
                            value="{{ request('search') }}"
                            class="w-full px-4 py-2 border border-[#9CAEEB] rounded-lg focus:ring-[#DA1C59] focus:border-[#DA1C59] transition duration-300"
                        />
                        <button
                            type="submit"
                            class="ml-2 bg-[#DA1C59] text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#171463] transition duration-300"
                        >
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <div class="bg-white rounded-lg shadow-lg border border-[#9CAEEB] overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-[#171463] text-[#F9FAF9]">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Activity Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Year</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Start Date</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">End Date</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#9CAEEB]">
                        @foreach ($activities as $activity)
                            <tr class="hover:bg-[#9CAEEB]/10 transition duration-300">
                                <td class="px-6 py-4 text-[#171463]">{{ $activity->activity_name }}</td>
                                <td class="px-6 py-4 text-[#171463]">{{ $activity->year }}</td>
                                <td class="px-6 py-4 text-[#171463]">{{ $activity->start_date }}</td>
                                <td class="px-6 py-4 text-[#171463]">{{ $activity->end_date }}</td>
                                <td class="px-6 py-4 space-x-2">
                                    <!-- View Button -->
                                    <a href="{{ route('adult-activities.show', $activity->id) }}" class="bg-[#9CAEEB] text-[#F9FAF9] px-3 py-2 rounded-lg hover:bg-[#171463] transition duration-300" title="View">
                                        <i class="fas fa-eye fa-sm"></i>
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ route('adult-activities.edit', $activity->id) }}" class="bg-[#DA1C59] text-[#F9FAF9] px-3 py-2 rounded-lg hover:bg-[#171463] transition duration-300" title="Edit">
                                        <i class="fas fa-edit fa-sm"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('adult-activities.destroy', $activity->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-[#DA1C59] text-[#F9FAF9] px-3 py-2 rounded-lg hover:bg-[#171463] transition duration-300" title="Delete">
                                            <i class="fas fa-trash fa-sm"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination Links -->
            <div class="mt-6">
                {{ $activities->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
