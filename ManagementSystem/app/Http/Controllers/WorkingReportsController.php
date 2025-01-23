<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WorkingReportsRequest;
use App\Models\Working_Report;

class WorkingReportsController extends Controller
{
    //
    public function index()
    {
        $workingReports = Working_Report::all();
        return view ('working_reports.index',['workingReports' => $workingReports]);
    }

    public function create()
    {
        return view('working_reports.create');
    }

    public function store(WorkingReportsRequest $request)
    {
        $workingReports = new Working_Report;
        $workingReports->employee_id = $request->input('employee_id');
        $workingReports->working_date = $request->input('working_date');
        $workingReports->working_hours = $request->input('working_hours');
        $workingReports->summary = $request->input('summary');
        $workingReports->save();
        
        return view('working_reports.store');
    }

}
