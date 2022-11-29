<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory,SoftDeletes;
    public $timestamps = false;
    public function position ()
    {
        return $this->hasMany(Position::class);
    }
}
