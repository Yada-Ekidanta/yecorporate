<?php

namespace App\Models\HRM\Others;

use App\Models\Master\AwardType;
use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;
    public $table = 'employee_awards';
    protected $fillable = [
        'employee_id',
        'award_type',
        'date',
        'gift',
        'description',
        'created_by',
    ];

    public function awardType()
    {
        return $this->hasOne(AwardType::class, 'id', 'award_type_id');
    }

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }
}
