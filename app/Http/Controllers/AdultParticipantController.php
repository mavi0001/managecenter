<?php

namespace App\Http\Controllers;

use App\Models\AdultParticipant;
use App\Models\AdultActivity;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AdultParticipantController extends Controller
{
    public function exportPdf($id)
    {
        $adultParticipant = AdultParticipant::findOrFail($id);
        $pdf = Pdf::loadView('adult_participants.export_pdf', compact('adultParticipant'));

        return $pdf->download('adult_participant_' . $adultParticipant->id . '.pdf');
    }

    public function index(Request $request)
    {
        $search = $request->query('search');

        $participants = AdultParticipant::when($search, function ($query, $search) {
            return $query->where('full_name', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('activity_name', 'like', "%{$search}%");
        })->paginate(2);

        return view('adult_participants.index', compact('participants'));
    }

    public function create()
    {
        $activities = AdultActivity::all();
        return view('adult_participants.create', compact('activities'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'cin' => 'required|string|unique:adult_participants,cin',
            'date_of_birth' => 'required|date',
            'city' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|string|unique:adult_participants,email',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'observation' => 'nullable|string',
            'adult_activity_id' => 'nullable|exists:adult_activities,id',
        ]);

        AdultParticipant::create($validatedData);

        return redirect()->route('adult-participants.index')->with('success', 'Participant created successfully.');
    }

    public function show(AdultParticipant $adultParticipant)
    {
        return view('adult_participants.show', compact('adultParticipant'));
    }

    public function edit(AdultParticipant $adultParticipant)
    {
        $activities = AdultActivity::all();
        return view('adult_participants.edit', compact('adultParticipant', 'activities'));
    }

    public function update(Request $request, AdultParticipant $adultParticipant)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'cin' => 'required|string|unique:adult_participants,cin,' . $adultParticipant->id,
            'date_of_birth' => 'required|date',
            'city' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|string|unique:adult_participants,email,' . $adultParticipant->id,
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'observation' => 'nullable|string',
            'adult_activity_id' => 'nullable|exists:adult_activities,id',
        ]);

        $adultParticipant->update($validatedData);

        return redirect()->route('adult-participants.index')->with('success', 'Participant updated successfully.');
    }

    public function destroy(AdultParticipant $adultParticipant)
    {
        $adultParticipant->delete();
        return redirect()->route('adult-participants.index')->with('success', 'Participant deleted successfully.');
    }
}
