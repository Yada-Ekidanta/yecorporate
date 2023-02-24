<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insight extends Model
{
    use HasFactory;
    public function category ()
    {
        return $this->belongsTo(InsightCategory::class,'insight_category_id','id');
    }
    public function comments ()
    {
        return $this->hasMany(InsightComment::class,'insight_id','id');
    }
    public function likes ()
    {
        return $this->hasMany(InsightLike::class,'insight_id','id');
    }
    public function shares ()
    {
        return $this->hasMany(InsightShare::class,'insight_id','id');
    }
}
