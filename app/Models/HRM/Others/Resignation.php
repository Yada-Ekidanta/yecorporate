<?php

namespace App\Models\HRM\Others;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resignation extends Model
{
    use HasFactory;
    public $table = 'employee_resignations';

    protected $fillable = [
        'employee_id',
        'notice_date',
        'resignation_date',
        'description',
        'created_by',
    ];

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }
}
