<?php

namespace App\Models\HRM\Timesheet;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function employees()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }
}
