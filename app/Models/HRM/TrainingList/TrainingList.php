<?php

namespace App\Models\HRM\TrainingList;

use App\Models\HRM\Employee;
use App\Models\Master\Trainer;
use App\Models\Master\TrainingType;
use App\Models\Setting\CompanyBranch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingList extends Model
{
    use HasFactory;
    public $table = 'employee_trainings';

    protected $guarded = 'id';

    public function companyBranch()
    {
        return $this->hasOne(CompanyBranch::class, 'id', 'company_branch_id');
    }

    public function trainings()
    {
        return $this->hasOne(TrainingType::class, 'id', 'training_type_id');
    }

    public function employees()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }

    public function trainers()
    {
        return $this->hasOne(Trainer::class, 'id', 'trainer_id');
    }
}
