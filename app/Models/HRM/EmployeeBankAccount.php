<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeBankAccount extends Model
{
    use HasFactory;
    public $table = 'employee_bank_accounts';

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
