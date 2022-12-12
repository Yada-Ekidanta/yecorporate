<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'token',
        'created_at',
    ];
    public $timestamps = false;
}
