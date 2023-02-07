<?php

namespace App\Models\CRM;

use App\Models\HRM\Employee;
use App\Models\CRM\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leads extends Model
{
    use HasFactory;
    protected $table = 'leads';

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function client_contact()
    {
        return $this->belongsTo(ClientContact::class, 'client_contact_id');
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }

    public function callAttendees()
    {
        return $this->hasMany(CallAttendees::class, 'client_id');
    }
}
