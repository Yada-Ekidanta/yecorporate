<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HRM\Employee;
use App\Models\CRM\Client;
use App\Models\Regional\Country;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use App\Models\Regional\Regency;
use App\Models\Regional\Village;

class Leads extends Model
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

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class, 'regency_id');
    }

    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }
}
