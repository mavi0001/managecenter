<x-app-layout>

<div class="container mx-auto p-6 bg-[#F9FAF9] min-h-screen">
    <h1 class="text-3xl font-bold text-[#3A406D] mb-6">Minor Participants</h1>
    <a href="{{ route('minor_participants.create') }}" class="bg-[#EF6B69] text-[#F9FAF9] px-4 py-2 rounded-lg hover:bg-[#3A406D] transition duration-300 mb-6 inline-block">Add New Participant</a>
    <table class="min-w-full bg-[#F9FAF9] border border-[#9CAEEB] rounded-lg overflow-hidden">
        <thead class="bg-[#3A406D] text-[#F9FAF9]">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Full Name</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Age</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">City</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Father or Guardian Name</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#9CAEEB]">
            @foreach ($participants as $participant)
                <tr class="hover:bg-[#9CAEEB]/10 transition duration-300">
                    <td class="px-6 py-4 text-[#3A406D]">{{ $participant->full_name }}</td>
                    <td class="px-6 py-4 text-[#3A406D]">{{ $participant->age }}</td>
                    <td class="px-6 py-4 text-[#3A406D]">{{ $participant->city }}</td>
                    <td class="px-6 py-4 text-[#3A406D]">{{ $participant->father_or_guardian_name }}</td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="{{ route('minor_participants.show', $participant->id) }}" class="bg-[#9CAEEB] text-[#F9FAF9] px-3 py-1 rounded-lg hover:bg-[#3A406D] transition duration-300">View</a>
                        <a href="{{ route('minor_participants.edit', $participant->id) }}" class="bg-[#EF6B69] text-[#F9FAF9] px-3 py-1 rounded-lg hover:bg-[#3A406D] transition duration-300">Edit</a>
                        <form action="{{ route('minor_participants.destroy', $participant->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-[#EF6B69] text-[#F9FAF9] px-3 py-1 rounded-lg hover:bg-[#3A406D] transition duration-300">Delete</button>
                        </form>
                        <a href="{{ route('minor_participants.export.pdf', $participant->id) }}" class="bg-[#3A406D] text-[#F9FAF9] px-3 py-1 rounded-lg hover:bg-[#EF6B69] transition duration-300">PDF</a>
                        {{-- <a href="{{ route('minor_participants.export.excel', $participant->id) }}" class="bg-[#3A406D] text-[#F9FAF9] px-3 py-1 rounded-lg hover:bg-[#EF6B69] transition duration-300">Excel</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>
