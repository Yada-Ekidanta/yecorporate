<?php

namespace App\Models\HRM\Timesheet;

use App\Models\HRM\Employee;
use App\Models\Master\LeaveType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    public function employee ()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function leaveType ()
    {
        return $this->belongsTo(LeaveType::class, 'leave_type_id');
    }
}
