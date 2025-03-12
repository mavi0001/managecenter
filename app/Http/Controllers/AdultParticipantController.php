<?php


namespace App\Http\Controllers;

use App\Models\AdultParticipant;
use Illuminate\Http\Request;

class AdultParticipantController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->query('search');

        $participants = AdultParticipant::when($search, function ($query, $search) {
            return $query->where('full_name', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('cin', 'like', "%{$search}%")
                        ->orWhere('activity_name', 'like', "%{$search}%");
        })->paginate(3);

        return view('adult_participants.index', compact('participants'));
    }

    public function create()
    {
        return view('adult_participants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'cin' => 'required|string|unique:adult_participants,cin',
            'date_of_birth' => 'required|date',
            'city' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email|unique:adult_participants,email',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'activity_name' => 'required|string',
            'observation' => 'nullable|string',
        ]);

        AdultParticipant::create($request->all());
        return redirect()->route('adult-participants.index')->with('success', 'Participant created successfully.');
    }

    public function show(AdultParticipant $adultParticipant)
    {
        return view('adult_participants.show', compact('adultParticipant'));
    }

    public function edit(AdultParticipant $adultParticipant)
    {
        return view('adult_participants.edit', compact('adultParticipant'));
    }

    public function update(Request $request, AdultParticipant $adultParticipant)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'cin' => 'required|string|unique:adult_participants,cin,' . $adultParticipant->id,
            'date_of_birth' => 'required|date',
            'city' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email|unique:adult_participants,email,' . $adultParticipant->id,
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'activity_name' => 'required|string',
            'observation' => 'nullable|string',
        ]);

        $adultParticipant->update($request->all());
        return redirect()->route('adult-participants.index')->with('success', 'Participant updated successfully.');
    }

    public function destroy(AdultParticipant $adultParticipant)
    {
        $adultParticipant->delete();
        return redirect()->route('adult-participants.index')->with('success', 'Participant deleted successfully.');
    }
}
