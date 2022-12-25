<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competency extends Model
{
    use HasFactory;

    public function performance(){
        return $this->belongsTo(PerformanceType::class, 'performance_type_id','id');
    }
}
