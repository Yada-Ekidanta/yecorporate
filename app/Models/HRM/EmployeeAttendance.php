<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $casts = [
        'presence_at' => 'datetime',
        'finish_at' => 'datetime',
    ];
}
