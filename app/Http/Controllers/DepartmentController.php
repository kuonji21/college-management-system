<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\College;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of active departments with optional search functionality.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = Department::with('college')
            ->where('is_active', true);

        // Add search functionality
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('department_name', 'like', '%' . $search . '%')
                  ->orWhere('department_code', 'like', '%' . $search . '%');
            });
        }

        $departments = $query->get();
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new department.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $colleges = College::where('is_active', true)->get();
        return view('departments.create', compact('colleges'));
    }

    /**
     * Store a newly created department in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'department_name' => 'required|string|max:100|unique:departments,department_name',
            'department_code' => 'required|string|max:20|unique:departments,department_code',
            'college_id' => 'required|exists:colleges,id',
        ]);

        Department::create($validated);

        return redirect()->route('departments.index')
            ->with('success', 'Department created successfully.');
    }

    /**
     * Show the form for editing the specified department.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\View\View
     */
    public function edit(Department $department)
    {
        $colleges = College::where('is_active', true)->get();
        return view('departments.edit', compact('department', 'colleges'));
    }

    /**
     * Update the specified department in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Department $department)
    {
        $validated = $request->validate([
            'department_name' => 'required|string|max:100|unique:departments,department_name,' . $department->id,
            'department_code' => 'required|string|max:20|unique:departments,department_code,' . $department->id,
            'college_id' => 'required|exists:colleges,id',
        ]);

        $department->update($validated);

        return redirect()->route('departments.index')
            ->with('success', 'Department updated successfully.');
    }

    /**
     * Soft delete the specified department (set is_active to false).
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Department $department)
    {
        $department->update(['is_active' => false]);

        return redirect()->route('departments.index')
            ->with('success', 'Department deleted successfully.');
    }
}