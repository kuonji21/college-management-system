<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::where('is_active', true)->get();
        return view('colleges.index', compact('colleges'));
    }

    public function create()
    {
        return view('colleges.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'college_name' => 'required|string|max:100',
            'college_code' => 'required|string|max:20',
        ]);

        College::create($validated);

        return redirect()->route('colleges.index')
            ->with('success', 'College created successfully.');
    }

    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    public function update(Request $request, College $college)
    {
        $validated = $request->validate([
            'college_name' => 'required|string|max:100',
            'college_code' => 'required|string|max:20',
        ]);

        $college->update($validated);

        return redirect()->route('colleges.index')
            ->with('success', 'College updated successfully.');
    }

    public function destroy(College $college)
    {
        // Soft delete
        $college->update(['is_active' => false]);

        return redirect()->route('colleges.index')
            ->with('success', 'College deleted successfully.');
    }
}
