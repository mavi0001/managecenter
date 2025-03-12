<?php

namespace App\Http\Controllers;

use App\Models\MinorActivity;
use Illuminate\Http\Request;

class MinorActivityController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->query('search');

        $activities = MinorActivity::query()
            ->when($search, function ($query, $search) {
                return $query->where('activity_name', 'like', "%{$search}%")
                            ->orWhere('city', 'like', "%{$search}%")
                            ->orWhere('year', 'like', "%{$search}%")
                            ->orWhere('start_date', 'like', "%{$search}%")
                            ->orWhere('end_date', 'like', "%{$search}%");
            })
            ->get();

        return view('minor_activities.index', compact('activities'));
    }

    public function create()
    {
        return view('minor_activities.create');
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

        MinorActivity::create($request->all());
        return redirect()->route('minor-activities.index')->with('success', 'Activity created successfully.');
    }

    public function show(MinorActivity $minorActivity)
    {
        return view('minor_activities.show', compact('minorActivity'));
    }

    public function edit(MinorActivity $minorActivity)
    {
        return view('minor_activities.edit', compact('minorActivity'));
    }

    public function update(Request $request, MinorActivity $minorActivity)
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

        $minorActivity->update($request->all());
        return redirect()->route('minor-activities.index')->with('success', 'Activity updated successfully.');
    }

    public function destroy(MinorActivity $minorActivity)
    {
        $minorActivity->delete();
        return redirect()->route('minor-activities.index')->with('success', 'Activity deleted successfully.');
    }
}
