<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Http\Requests\StoreOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offices = Office::all(); // Fetch all offices
        return view('offices.index', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfficeRequest $request)
    {
        echo "test"; die;
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:15',
            'website' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $officeData = $request->all();
        $officeData['created_by'] = Auth::id();
        $officeData['updated_by'] = Auth::id();

        // Handle file uploads
        if ($request->hasFile('logo')) {
            $officeData['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('photo')) {
            $officeData['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Office::create($officeData);

        return redirect()->route('offices.index')->with('success', 'Office created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Office $office)
    {
        return view('offices.edit', compact('office'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfficeRequest $request, Office $office)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:15',
            'website' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $officeData = $request->all();
        $officeData['updated_by'] = Auth::id();

        // Handle file uploads
        if ($request->hasFile('logo')) {
            $officeData['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('photo')) {
            $officeData['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $office->update($officeData);

        return redirect()->route('offices.index')->with('success', 'Office updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Office $office)
    {
        $office->delete();
        
        return redirect()->route('offices.index')->with('success', 'Office deleted successfully.');
    }
}
