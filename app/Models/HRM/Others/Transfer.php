<?php

namespace App\Models\HRM\Others;

use App\Models\HRM\Department;
use App\Models\HRM\Employee;
use App\Models\HRM\Position;
use App\Models\Setting\CompanyBranch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    public $table = 'employee_transfers';
    protected $guarded = ['id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function branch()
    {
        return $this->belongsTo(CompanyBranch::class, 'company_branch_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
    
}
