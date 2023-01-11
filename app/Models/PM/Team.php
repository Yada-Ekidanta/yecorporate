<?php

namespace App\Models\PM;
use App\Models\HRM\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function task() {
        return $this->hasMany(Task::class, 'team_id');
    }
}
