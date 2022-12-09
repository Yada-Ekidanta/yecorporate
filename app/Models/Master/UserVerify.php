<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVerify extends Model
{
    use HasFactory;
    public $table = "user_verify";
    protected $fillable = [
        'employee_id',
        'token',
    ];
}
