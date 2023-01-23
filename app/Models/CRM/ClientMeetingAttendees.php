<?php

namespace App\Models\CRM;

use App\Models\HRM\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientMeetingAttendees extends Model
{
    use HasFactory;

    public function meeting()
    {
        return $this->belongsTo(ClientMeeting::class, 'meeting_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'attendees_employee');
    }

    public function client_contact()
    {
        return $this->belongsTo(ClientContact::class, 'attendees_contact');
    }

    public function lead()
    {
        return $this->belongsTo(Leads::class, 'attendees_lead');
    }
}
