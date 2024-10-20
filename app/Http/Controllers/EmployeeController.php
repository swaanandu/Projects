<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('employees.index', ['employees' => Employee::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request) : RedirectResponse
    {
        Employee::create($request->validated());

        return redirect()->route('employees.index')->withSuccess('New Employee is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee) : View
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee) : View
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee) : RedirectResponse
    {
        $employee->update($request->validated());

        return redirect()->back()->withSuccess('Employee is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee) : RedirectResponse
    {
        $employee->delete();

        return redirect()->route('employees.index')->withSuccess('Employee deleted successfully.');
    }
}