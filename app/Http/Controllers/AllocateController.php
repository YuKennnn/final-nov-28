<?php

namespace App\Http\Controllers;

use App\Models\Allocate;
use Illuminate\Http\Request;

class AllocateController extends Controller
{
    // Display all allocations
    public function index()
    {
        $allocations = Allocate::all();
        return view('allocate', compact('allocations'));
    }

    // Show the form for creating a new allocation (optional if using modal)
    public function create()
    {
        return view('allocate.create');
    }

    // Store a newly created allocation in storage
    public function store(Request $request)
{
    // Validate the incoming data
    $request->validate([
        'locker_number' => 'required|string',
        'student_id' => 'required|string',
        'last_name' => 'required|string',
        'first_name' => 'required|string',
        'program' => 'required|string',
        'year_set' => 'required|string',
        'date_rented' => 'required|date',
        'date_ended' => 'required|date',
        'email' => 'required|email',
        'payment' => 'required|numeric',
    ]);

    // Create a new allocation using the request data
    $allocation = Allocate::create($request->all());

    // Flash success message for front-end
    session()->flash('success', 'Locker assignment saved successfully!');

    // Return a redirect to the index route or any other page where the flash message should be shown
    return redirect()->route('allocate.index');
}

    public function update(Request $request, $id)
    {
        // Find the allocation by ID
        $allocation = Allocate::findOrFail($id);
    
        // Validate the incoming data
        $validated = $request->validate([
            'locker_number' => 'required|string',
            'student_id' => 'required|string',
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'program' => 'required|string',
            'year_set' => 'required|string',
            'date_rented' => 'required|date',
            'date_ended' => 'required|date',
            'email' => 'required|email',
            'payment' => 'required|numeric',
        ]);
    
        // Update the allocation with the new data
        $allocation->update($validated);
    
        // Return response with updated allocation data
        return response()->json([
            'success' => true,
            'allocation' => $allocation // Send back the updated allocation data
        ]);
    }

    // Delete an allocation
    public function destroy($id)
    {
        // Find the allocation by ID and delete it
        $allocation = Allocate::findOrFail($id);
        $allocation->delete();

        return redirect()->route('allocate.index');
    }
}
