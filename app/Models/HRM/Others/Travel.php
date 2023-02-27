<?php

namespace App\Models\HRM\Others;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    public $table = 'employee_travels';

    protected $fillable = [
        'employee_id',
        'start_date',
        'end_date',
        'purpose_of_visit',
        'place_of_visit',
        'desc',
        'created_by',
    ];

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }
}
