<?php

namespace App\Models\HRM\Others;

use App\Models\HRM\Employee;
use App\Models\Master\TerminationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termination extends Model
{
    use HasFactory;
    public $table = 'employee_terminations';

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }

    public function terminationType()
    {
        return $this->hasOne(TerminationType::class, 'id', 'termination_type');
    }
}
