<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDetail;

class EmployeeDetailController extends Controller
{
    public function index()
    {
        $employees = EmployeeDetail::all();
        return view('admin.dashboard', compact('employees'));
    }
    public function create()
    {
        return view('admin.add_employee');
    }

    public function store(Request $request)
    {

        // return 1;
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employee_details,email',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'company_id' => 'required|string|max:255',
            // 'position' => 'required|string|max:100',
        ]);
        unset($validated['position']);
        $validated['phone_number'] = "51545454545";

        

        EmployeeDetail::create($validated);

        return redirect()->route('employee_details')->with('success', 'Employee added successfully!');
    }

    public function edit($id)
    {
    $employee = EmployeeDetail::findOrFail($id);
    return view('admin.edit_employee', compact('employee'));
    }


    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employee_details,email,' . $id,
            'phone_number' => 'required|string|max:20',
            'position' => 'nullable|string|max:255',
        ]);

        $employee = EmployeeDetail::findOrFail($id);
        $employee->update($validated);

        return redirect()->route('employee_details');
    }

    public function destroy($id)
{
    $employee = EmployeeDetail::findOrFail($id);
    $employee->delete();

    return redirect()->route('employee_details');
}

}
