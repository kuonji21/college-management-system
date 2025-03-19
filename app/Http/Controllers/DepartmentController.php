<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\College;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::with('college')
            ->where('is_active', true)
            ->get();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        $colleges = College::where('is_active', true)->get();
        return view('departments.create', compact('colleges'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'department_name' => 'required|string|max:100',
            'department_code' => 'required|string|max:20',
            'college_id' => 'required|exists:colleges,id',
        ]);

        Department::create($validated);

        return redirect()->route('departments.index')
            ->with('success', 'Department created successfully.');
    }

    public function edit(Department $department)
    {
        $colleges = College::where('is_active', true)->get();
        return view('departments.edit', compact('department', 'colleges'));
    }

    public function update(Request $request, Department $department)
    {
        $validated = $request->validate([
            'department_name' => 'required|string|max:100',
            'department_code' => 'required|string|max:20',
            'college_id' => 'required|exists:colleges,id',
        ]);

        $department->update($validated);

        return redirect()->route('departments.index')
            ->with('success', 'Department updated successfully.');
    }

    public function destroy(Department $department)
    {
        // Soft delete
        $department->update(['is_active' => false]);

        return redirect()->route('departments.index')
            ->with('success', 'Department deleted successfully.');
    }
}
