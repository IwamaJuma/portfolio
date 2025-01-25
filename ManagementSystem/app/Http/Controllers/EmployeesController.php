<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Working_Report;

class EmployeesController extends Controller
{
    //
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index',['employees' => $employees]);
    }

    public function show(Request $request) 
    {
        $employee_id = $request->query('employee_id');
        
        //$employee = Employee::find($employee_id);

        if (!$employee_id || !$employee = Employee::find($employee_id)) {
            abort(404, 'Employee not found');
        }

        $workingReports = Working_Report::where('employee_id',$employee_id)->get();

        return view('employees.show',['employee' => $employee , 'workingReports' => $workingReports]);
    }

}
