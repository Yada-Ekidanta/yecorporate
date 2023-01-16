<?php

namespace App\Models\CRM;

use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\HRM\Employee;
use App\Models\Master\ClientType;
use App\Models\Setting\CompanyIndustry;
use App\Models\Regional\Country;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use App\Models\Regional\Regency;
use App\Models\Regional\Village;


class Client extends Authenticatable
{
    use HasFactory,HasRoles,Notifiable,SoftDeletes;
    public function getImageAttribute()
    {
        if($this->avatar){
            return "<div class='symbol-label'><img src='".asset('storage/' . $this->avatar)."' alt='".$this->name."' class='w-100' /></div>";
        }else{
            $name = Str::substr($this->name, 0, 1);
            return "<div class='symbol-label fs-3 bg-light-danger text-danger'>".$name."</div>";
        }
    }
    public function activities ()
    {
        return $this->hasMany(LeadActivity::class);
    }
    public function groups ()
    {
        return $this->belongsTo(ContactGroup::class,'contact_group_id','id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function clientType()
    {
        return $this->belongsTo(ClientType::class, 'client_type_id');
    }

    public function companyIndustry()
    {
        return $this->belongsTo(CompanyIndustry::class, 'company_industry_id');
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
