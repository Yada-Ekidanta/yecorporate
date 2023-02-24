<?php

namespace App\Models\HRM\Others;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    public $table = 'employee_promotions';
    
    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }
}
