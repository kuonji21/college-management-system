<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Display a listing of active colleges.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch only active colleges
        $colleges = College::where('is_active', true)->get();
        return view('colleges.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new college.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('colleges.create');
    }

    /**
     * Store a newly created college in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'college_name' => 'required|string|max:100|unique:colleges',
            'college_code' => 'required|string|max:20|unique:colleges',
        ]);

        // Create a new college record
        College::create([
            'college_name' => $validated['college_name'],
            'college_code' => $validated['college_code'],
            'is_active' => true, // Set college as active by default
        ]);

        // Redirect with success message
        return redirect()->route('colleges.index')
            ->with('success', 'College created successfully.');
    }

    /**
     * Show the form for editing the specified college.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\View\View
     */
    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    /**
     * Update the specified college in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, College $college)
    {
        // Validate the request data, ignoring the current college's ID for uniqueness
        $validated = $request->validate([
            'college_name' => 'required|string|max:100|unique:colleges,college_name,' . $college->id,
            'college_code' => 'required|string|max:20|unique:colleges,college_code,' . $college->id,
        ]);

        // Update the college record
        $college->update([
            'college_name' => $validated['college_name'],
            'college_code' => $validated['college_code'],
        ]);

        // Redirect with success message
        return redirect()->route('colleges.index')
            ->with('success', 'College updated successfully.');
    }

    /**
     * Soft delete the specified college (set is_active to false).
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(College $college)
    {
        // Soft delete by setting is_active to false
        $college->update(['is_active' => false]);

        // Redirect with success message
        return redirect()->route('colleges.index')
            ->with('success', 'College deleted successfully.');
    }
}