<?php

namespace App\Models\Master;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory,SoftDeletes;
    public function employee ()
    {
        return $this->belongsTo(Employee::class);
    }
}
