<?php

namespace App\Models\HRM\Others;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    public $table = 'employee_complaints';
    protected $fillable = [
        'complaint_from',
        'complaint_against',
        'title',
        'complaint_date',
        'description',
        'created_by',
    ];


    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id')->first();
    }

    public function complaintFrom($complaint_from)
    {
        return Employee::where('id',$complaint_from)->first();
    }
    public function complaintAgainst($complaint_against)
    {
        return Employee::where('id',$complaint_against)->first();
    }
}
