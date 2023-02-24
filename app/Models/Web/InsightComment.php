<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsightComment extends Model
{
    use HasFactory;
    protected $casts = [
		'created_at' => 'datetime',
	];
    public function insight()
    {
        return $this->belongsTo(Insight::class);
    }
    public function parent()
    {
        return $this->belongsTo(InsightComment::class, 'comment_id','id');
    }
    public function replies()
    {
        return $this->hasMany(InsightComment::class, 'comment_id');
    }
}
