<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VacancyJob extends Model
{
    use HasFactory,SoftDeletes;
    public function applicant ()
    {
        return $this->hasMany(JobApplicant::class,'vacancy_id','id');
    }
    public function department ()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }
    public function position ()
    {
        return $this->belongsTo(Position::class,'position_id','id');
    }
}
