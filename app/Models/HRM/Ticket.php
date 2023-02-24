<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'employee_tickets';

    public function createdBy()
    {
        return $this->hasOne(Employee::class,'id', 'ticket_created');
    }
}
