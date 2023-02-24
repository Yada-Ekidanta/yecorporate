<?php

namespace App\Models\CRM;

use App\Models\HRM\Employee;
use App\Models\Regional\Country;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use App\Models\Regional\Regency;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContact extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class, 'regency_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function village()
    {
        return $this->belongsTo(User::class, 'village_id');
    }

    public function callAttendees()
    {
        return $this->hasMany(CallAttendees::class, 'client_id');
    }

    public function lead()
    {
        return $this->hasMany(Leads::class, 'client_contact_id');
    }

    public function opportunity()
    {
        return $this->hasMany(Opportunity::class, 'client_contact_id');
    }

    public function common_case()
    {
        return $this->hasMany(CommonCase::class, 'client_contact_id');
    }
}
