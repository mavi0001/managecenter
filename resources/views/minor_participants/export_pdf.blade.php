<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minor Participant Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F9FAF9] flex items-center justify-center min-h-screen p-6">
    <div class="bg-white rounded-xl shadow-2xl border border-[#9CAEEB] p-8 max-w-4xl w-full">
        <div class="text-center mb-8">

            <h2 class="text-3xl font-bold text-[#3A406D] mt-4">Centre d'Accueil</h2>
            <p class="text-sm text-[#3A406D] mt-2">Date: {{ now()->format('d/m/Y') }}</p>
        </div>
        <div class="flex">
            <div class="w-2/3">
                <h1 class="text-4xl font-bold text-[#3A406D] text-center mb-8">Participant Details</h1>

                <div class="space-y-6 text-[#3A406D]">
                    <div class="flex justify-between items-center p-4 bg-[#F9FAF9] rounded-lg shadow-sm">
                        <span class="font-semibold">Full Name:</span>
                        <span class="text-right">{{ $minorParticipant->full_name }}</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-[#F9FAF9] rounded-lg shadow-sm">
                        <span class="font-semibold">Age:</span>
                        <span class="text-right">{{ $minorParticipant->age }}</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-[#F9FAF9] rounded-lg shadow-sm">
                        <span class="font-semibold">Date of Birth:</span>
                        <span class="text-right">{{ $minorParticipant->date_of_birth }}</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-[#F9FAF9] rounded-lg shadow-sm">
                        <span class="font-semibold">City:</span>
                        <span class="text-right">{{ $minorParticipant->city }}</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-[#F9FAF9] rounded-lg shadow-sm">
                        <span class="font-semibold">Father/Guardian Name:</span>
                        <span class="text-right">{{ $minorParticipant->father_or_guardian_name }}</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-[#F9FAF9] rounded-lg shadow-sm">
                        <span class="font-semibold">Father/Guardian Phone:</span>
                        <span class="text-right">{{ $minorParticipant->father_or_guardian_phone }}</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-[#F9FAF9] rounded-lg shadow-sm">
                        <span class="font-semibold">Activity Name:</span>
                        <span class="text-right">{{ $minorParticipant->activity_name }}</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-[#F9FAF9] rounded-lg shadow-sm">
                        <span class="font-semibold">Address:</span>
                        <span class="text-right">{{ $minorParticipant->address }}</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-[#F9FAF9] rounded-lg shadow-sm">
                        <span class="font-semibold">Observation:</span>
                        <span class="text-right">{{ $minorParticipant->observation }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
