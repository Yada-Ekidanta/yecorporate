<?php

namespace App\Models\Corporate;

use App\Models\HRM\Position;
use App\Models\HRM\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KpiObjective extends Model
{
    use HasFactory;
    public function keyresults ()
    {
        return $this->hasMany(KpiKeyResult::class,'kpi_objective_id','id');
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
