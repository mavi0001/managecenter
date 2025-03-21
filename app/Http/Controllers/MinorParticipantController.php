<?php

namespace App\Http\Controllers;

use App\Models\MinorParticipant;
use App\Models\MinorActivity;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class MinorParticipantController extends Controller
{

    public function exportPdf($id)
    {
        $minorParticipant = MinorParticipant::findOrFail($id);
        $pdf = Pdf::loadView('minor_participants.export_pdf', compact('minorParticipant'));

            return $pdf->download('minor_participant_' . $minorParticipant->id . '.pdf');
    }

    public function index(Request $request)
    {
        $search = $request->query('search');

        $participants = MinorParticipant::when($search, function ($query, $search) {
            return $query->where('full_name', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('minor_activity_id', 'like', "%{$search}%");
        })->paginate(4);

        return view('minor_participants.index', compact('participants'));
    }


    public function create()
    {
        $activities = MinorActivity::all();

        return view('minor_participants.create', compact('activities'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'date_of_birth' => 'required|date',
            'city' => 'required|string|max:255',
            'father_or_guardian_name' => 'required|string|max:255',
            'father_or_guardian_phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'observation' => 'nullable|string',
            'minor_activity_id' => 'nullable|exists:minor_activities,id',
        ]);

        MinorParticipant::create($validatedData);

        return redirect()->route('minor_participants.index')->with('success', 'Participant created successfully.');
    }



    public function show(MinorParticipant $minorParticipant)
    {
        return view('minor_participants.show', compact('minorParticipant'));
    }



    public function edit(MinorParticipant $minorParticipant)
    {
        $activities = MinorActivity::all();
        return view('minor_participants.edit', compact('minorParticipant', 'activities'));
    }


    public function update(Request $request, MinorParticipant $minorParticipant)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'date_of_birth' => 'required|date',
            'city' => 'required|string|max:255',
            'father_or_guardian_name' => 'required|string|max:255',
            'father_or_guardian_phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'observation' => 'nullable|string',
            'minor_activity_id' => 'nullable|exists:minor_activities,id',
        ]);

        $minorParticipant->update($validatedData);

        return redirect()->route('minor_participants.index')->with('success', 'Participant updated successfully.');
    }



    public function destroy(MinorParticipant $minorParticipant)
    {
        $minorParticipant->delete();
        return redirect()->route('minor_participants.index')->with('success', 'Participant deleted successfully.');
    }
}
