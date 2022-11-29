<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IsicType extends Model
{
    use HasFactory,SoftDeletes;
    public $timestamps = false;
}
