<?php

namespace App\Models\HRM\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    public $table = 'announcements';

    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'employee_id',
        'company_branch_id',
        'department_id',
        'desc',
        'created_by',
    ];

}
