<?php

namespace App\Models\CRM;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallAttendees extends Model
{
    use HasFactory;

    public function call()
    {
        return $this->belongsTo(Call::class, 'call_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'attendees_employee');
    }

    public function clientContact()
    {
        return $this->belongsTo(ClientContact::class, 'attendees_contact');
    }

    public function lead()
    {
        return $this->belongsTo(Leads::class, 'attendees_lead');
    }
}
