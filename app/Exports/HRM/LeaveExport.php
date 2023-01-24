<?php

namespace App\Exports\HRM;

use App\Models\HRM\Employee;
use App\Models\HRM\Timesheet\Leave;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LeaveExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // $user     = Auth::user();
        // $data= Leave::get();
        // if (Auth::user()->type == 'employee')
        // {
        //     $employee = Employee::where('user_id', '=', $user->id)->first();
        //     $data= Leave::where('employee_id', '=', $employee->id)->get();
            
        //     foreach($data as $k=>$leave)
        //     {    
        //         $data[$k]["employee_id"]=Employee::employee_name($leave->employee_id);
        //         $data[$k]["leave_type_id"]= !empty(Auth::user()->getLeaveType($leave->leave_type_id))?Auth::user()->getLeaveType($leave->leave_type_id)->title:'';
        //         $data[$k]["created_by"]=Employee::login_user($leave->created_by);
        //         unset($leave->created_at,$leave->updated_at);
        //     }
        // }
        // else{  
        //     $data= Leave::get();
        //     foreach($data as $k=>$leave)
        //     {    
        //         $data[$k]["employee_id"]=Employee::employee_name($leave->employee_id);
        //         $data[$k]["leave_type_id"]= !empty(Auth::user()->getLeaveType($leave->leave_type_id))?Auth::user()->getLeaveType($leave->leave_type_id)->title:'';
        //         $data[$k]["created_by"]=Employee::login_user($leave->created_by);
        //         unset($leave->created_at,$leave->updated_at);
        //     }
        //     return $data;
        // }
    
        // return $data;
        return Leave::all();
    }

    public function headings(): array
    {
        return [
            "ID",
            "Employee Name",
            "Leave Type",
            "Applied on",
            "Start Date",
            "End date",
            "Total leave Days",
            "Leave Reason",
            "Remark",
            "Status",
            "Created By"
        ];
    }

    // public function map($leave): array
    // {
    //     return [
    //         $leave->id,
    //         $leave->employee->name,
    //         $leave->leave_type->title,
    //         $leave->applied_on,
    //         $leave->start_date,
    //         $leave->end_date,
    //         $leave->total_leave_days,
    //         $leave->leave_reason,
    //         $leave->remark,
    //         $leave->st,
    //         $leave->verified_by,
    //     ];
    // }
}
