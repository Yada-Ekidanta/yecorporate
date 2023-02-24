<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;
use App\Models\HRM\Department;
use App\Models\HRM\Employee;
use App\Models\HRM\Others\Announcement;
use App\Models\Setting\CompanyBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Announcement::paginate(10);;
            return view('pages.office.hrm.others.announcement.list', compact('collection'));
        }
        return view('pages.office.hrm.others.announcement.main');
    }

    public function create()
    {
        $employee = Employee::all();
        $department = Department::all();
        $company_branch = CompanyBranch::all();
        return view('pages.office.hrm.others.announcement.input', [
            'data' => new Announcement,
            'employee' => $employee,
            'department' => $department,
            'company_branch' => $company_branch,
        ]);
    }

   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'company_branch_id' => 'required',
            'department_id' => 'required',
            'employee_id' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $announcement = new Announcement;
        $announcement->title = $request->title;
        $announcement->start_date = $request->start_date;
        $announcement->end_date = $request->end_date;
        $announcement->company_branch_id = $request->company_branch_id;
        $announcement->department_id = $request->department_id;
        $announcement->employee_id = $request->employee_id;
        $announcement->desc = $request->desc;
        $announcement->created_by = Auth::guard('employees')->user()->id;
        $announcement->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Announcement Created',
        ]);
    }

    public function show(Announcement $announcement)
    {
        //
    }

    public function edit(Announcement $announcement)
    {
        $employee = Employee::all();
        $department = Department::all();
        $company_branch = CompanyBranch::all();
        return view('pages.office.hrm.others.announcement.input', [
            'data' => $announcement,
            'employee' => $employee,
            'department' => $department,
            'company_branch' => $company_branch,
        ]);
    }

    public function update(Request $request, Announcement $announcement)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'company_branch_id' => 'required',
            'department_id' => 'required',
            'employee_id' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $announcement->title = $request->title;
        $announcement->start_date = $request->start_date;
        $announcement->end_date = $request->end_date;
        $announcement->company_branch_id = $request->company_branch_id;
        $announcement->department_id = $request->department_id;
        $announcement->employee_id = $request->employee_id;
        $announcement->desc = $request->desc;
        $announcement->created_by = Auth::guard('employees')->user()->id;
        $announcement->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Announcement Updated',
        ]);
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Announcement Deleted',
        ]);
    }
}
