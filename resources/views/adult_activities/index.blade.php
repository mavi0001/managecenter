<x-app-layout>
    <div class="py-12 bg-[#F9FAF9] min-h-screen">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-[#3A406D]">Adult Activities</h1>
                <a href="{{ route('adult-activities.create') }}" class="bg-[#EF6B69] text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300">Add New Activity</a>
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
                                <td class="px-6 py-4 text-[#3A406D]">{{ $activity->activity_name }}</td>
                                <td class="px-6 py-4 text-[#3A406D]">{{ $activity->year }}</td>
                                <td class="px-6 py-4 text-[#3A406D]">{{ $activity->start_date }}</td>
                                <td class="px-6 py-4 text-[#3A406D]">{{ $activity->end_date }}</td>
                                <td class="px-6 py-4 space-x-2">
                                    <a href="{{ route('adult-activities.show', $activity->id) }}" class="bg-[#9CAEEB] text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300">View</a>
                                    <a href="{{ route('adult-activities.edit', $activity->id) }}" class="bg-[#EF6B69] text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300">Edit</a>
                                    <form action="{{ route('adult-activities.destroy', $activity->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-[#EF6B69] text-[#F9FAF9] px-3 py-1 rounded-lg hover:bg-[#3A406D] transition duration-300">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
