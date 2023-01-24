<?php

namespace App\Http\Controllers\Office\Hrm\Timesheet;

use App\Exports\HRM\LeaveExport;
use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\Timesheet\Leave;
use App\Models\Master\LeaveType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class LeaveController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Leave::paginate(10);;
            return view('pages.office.hrm.timesheet.timesheet.list', compact('collection'));
        }
        return view('pages.office.hrm.timesheet.timesheet.main');
    }

    public function create()
    {
        $employee = Employee::all();
        $leave_type = LeaveType::all();

        return view('pages.office.hrm.timesheet.manage-leave.input', [
            'data' => new Leave,
            'employee' => $employee,
            'leave_type' => $leave_type,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'leave_type_id' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'leave_reason' => 'required',
            'remark' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee = Employee::where('id', '=', Auth::user()->id)->first();
        $leave_type = LeaveType::find($request->leave_type_id);
        $startDate = new \DateTime($request->start_date);
        $endDate = new \DateTime($request->end_date);
        $total_leave_days = !empty($startDate->diff($endDate)) ? $startDate->diff($endDate)->days : 0;
        if($leave_type->days >= $total_leave_days) {
            $leave = new Leave;
            if(Auth::user()->type == "employee") {
                $leave->employee_id = $employee->id;
            } else {
                $leave->employee_id = $request->employee_id;
            } 
            $leave->leave_type_id = $request->leave_type_id;
            $leave->applied_on = $request->start_at;
            $leave->start_at = $request->start_at;
            $leave->end_at = $request->end_at;
            $leave->leave_reason = $request->leave_reason;
            $leave->remark = $request->remark;
            $leave->st = "Pending";
            $leave->total_leave_days = $total_leave_days;
            $leave->verified_by = Auth::guard('employees')->user()->id;
            $leave->save();
            return response()->json([
                'alert' => 'success',
                'message' => 'Manage Leave Created',
            ]);
        } else {
            return redirect()->back()->response()->json([
                'alert' => 'danger',
                'message' => __('Leave type '.$leave_type->name.' is provide maximum '.$leave_type->days."  days please make sure your selected days is under ". $leave_type->days.' days.'),
            ]); 
        }
    }

    public function show(Leave $leave)
    {
        //
    }

    public function edit($id)
    {
        $leave = Leave::findOrFail($id);
        $employee = Employee::all();
        $leave_type = LeaveType::all();

        return view('pages.office.hrm.timesheet.manage-leave.input', [
            'data' => $leave,
            'employee' => $employee,
            'leave_type' => $leave_type,
        ]);
    }

    public function update(Request $request, $id)
    {
        $leave = Leave::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'leave_type_id' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'leave_reason' => 'required',
            'remark' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $leave_type = LeaveType::find($request->leave_type_id);
        $startDate = new \DateTime($request->start_date);
        $endDate = new \DateTime($request->end_date);
        $total_leave_days = !empty($startDate->diff($endDate)) ? $startDate->diff($endDate)->days : 0;
        if($leave_type->days >= $total_leave_days) {
            $leave->employee_id = $request->employee_id;
            $leave->leave_type_id = $request->leave_type_id;
            $leave->applied_on = $request->start_at;
            $leave->start_at = $request->start_at;
            $leave->end_at = $request->end_at;
            $leave->leave_reason = $request->leave_reason;
            $leave->remark = $request->remark;
            $leave->st = "Pending";
            $leave->total_leave_days = $total_leave_days;
            $leave->verified_by = Auth::guard('employees')->user()->id;
            $leave->update();
            return response()->json([
                'alert' => 'success',
                'message' => 'Manage Leave Updated',
            ]);
        } else {
            return redirect()->back()->response()->json([
                'alert' => 'danger',
                'message' => __('Leave type '.$leave_type->name.' is provide maximum '.$leave_type->days."  days please make sure your selected days is under ". $leave_type->days.' days.'),
            ]); 
        }
    }

    public function destroy($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Leave Deleted',
        ]);
    }

    public function action($id)
    {
        $leave     = Leave::find($id);
        $employee  = Employee::find($leave->employee_id);
        $leavetype = LeaveType::find($leave->leave_type_id);

        return view('pages.office.hrm.timesheet.manage-leave.action', compact('employee', 'leavetype', 'leave'));
    }

    public function export() 
    {
        $name = 'Leave' . date('Y-m-d i:h:s');
        return Excel::download(new LeaveExport, $name . '.xlsx');
    }
}
