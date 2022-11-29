<?php

namespace App\Models\Corporate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    use HasFactory;
    public function objectives ()
    {
        return $this->hasMany(KpiObjective::class,'kpi_id','id');
    }
}
