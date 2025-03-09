<?php



namespace App\Http\Controllers;

use App\Models\AdultActivity;
use Illuminate\Http\Request;

class AdultActivityController extends Controller
{
    
    public function index()
    {
        $activities = AdultActivity::all();
        return view('adult_activities.index', compact('activities'));
    }

    public function create()
    {
        return view('adult_activities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'activity_name' => 'required|string|max:255',
            'year' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location_name' => 'required|string',
            'province' => 'required|string',
            'number_of_participants' => 'required|integer',
            'city' => 'required|string',
            'organizer_names' => 'required|string',
        ]);

        AdultActivity::create($request->all());
        return redirect()->route('adult-activities.index')->with('success', 'Activity created successfully.');
    }

    public function show(AdultActivity $adultActivity)
    {
        return view('adult_activities.show', compact('adultActivity'));
    }

    public function edit(AdultActivity $adultActivity)
    {
        return view('adult_activities.edit', compact('adultActivity'));
    }

    public function update(Request $request, AdultActivity $adultActivity)
    {
        $request->validate([
            'activity_name' => 'required|string|max:255',
            'year' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location_name' => 'required|string',
            'province' => 'required|string',
            'number_of_participants' => 'required|integer',
            'city' => 'required|string',
            'organizer_names' => 'required|string',
        ]);

        $adultActivity->update($request->all());
        return redirect()->route('adult-activities.index')->with('success', 'Activity updated successfully.');
    }

    public function destroy(AdultActivity $adultActivity)
    {
        $adultActivity->delete();
        return redirect()->route('adult-activities.index')->with('success', 'Activity deleted successfully.');
    }
}
