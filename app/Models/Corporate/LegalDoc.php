<?php

namespace App\Models\Corporate;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LegalDoc extends Model
{
    use HasFactory,SoftDeletes;
    public $timestamps = false;
}
