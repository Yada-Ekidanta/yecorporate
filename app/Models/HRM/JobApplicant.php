<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplicant extends Model
{
    use HasFactory,SoftDeletes;
    public $table = 'job_applications';
    public function vacancy ()
    {
        return $this->belongsTo(VacancyJob::class,'vacancy_id','id');
    }
    public function employee ()
    {
        return $this->belongsTo(Employee::class,'employee_id','id');
    }
}
