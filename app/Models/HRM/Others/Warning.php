<?php

namespace App\Models\HRM\Others;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{
    use HasFactory;

    public $table = 'employee_warnings';

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }

    public function warningTo($warningto)
    {
        return Employee::where('id',$warningto)->first();
    }
    
    public function warningBy($warningby)
    {
        return Employee::where('id',$warningby)->first();
    }
}
