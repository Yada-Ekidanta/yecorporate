<?php

namespace App\Models\Master;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DocumentType extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id','id');
    }
}
