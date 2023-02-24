<?php

namespace App\Models\HRM\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;

    public $table = 'employee_holidays';
    protected $fillable = [
        'start_date',
        'end_date',
        'occasion',
        'created_by',
    ];
}
