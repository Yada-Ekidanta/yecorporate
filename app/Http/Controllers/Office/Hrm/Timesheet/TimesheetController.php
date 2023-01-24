<?php

namespace App\Http\Controllers\Office\Hrm\Timesheet;

use App\Http\Controllers\Controller;
use App\Models\HRM\Timesheet\Timesheet;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Timesheet::paginate(10);;
            return view('pages.office.hrm.timesheet.manage-leave.list', compact('collection'));
        }
        return view('pages.office.hrm.timesheet.manage-leave.main');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Timesheet $timesheet)
    {
        //
    }

    public function edit(Timesheet $timesheet)
    {
        //
    }

    public function update(Request $request, Timesheet $timesheet)
    {
        //
    }

    public function destroy(Timesheet $timesheet)
    {
        //
    }
}
