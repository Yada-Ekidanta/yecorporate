<?php

namespace App\Models\CRM;

use Illuminate\Support\Str;
use App\Models\HRM\Employee;
use App\Models\CRM\Opportunity;
use App\Models\Regional\Country;
use App\Models\Regional\Regency;
use App\Models\Regional\Village;
use App\Models\Master\ClientType;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Setting\CompanyIndustry;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Client extends Authenticatable
{
    use HasFactory,HasRoles,Notifiable,SoftDeletes;
    protected $table = 'clients';
    protected $dates = ['deleted_at'];
    
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

    public function client_contact()
    {
        return $this->hasMany(ClientContact::class, 'client_id');
    }

    public function clientType()
    {
        return $this->belongsTo(ClientType::class, 'client_type_id');
    }

    public function companyIndustry()
    {
        return $this->belongsTo(CompanyIndustry::class, 'company_industry_id');
    }

    public function opportunity()
    {
        return $this->hasMany(Opportunity::class, 'client_id');
    }

    public function billingCountry()
    {
        return $this->belongsTo(Country::class, 'billing_country_id');
    }

    public function billingDistrict()
    {
        return $this->belongsTo(District::class, 'billing_district_id');
    }

    public function billingProvince()
    {
        return $this->belongsTo(Province::class, 'billing_province_id');
    }

    public function billingRegency()
    {
        return $this->belongsTo(Regency::class, 'billing_regency_id');
    }

    public function billingVillage()
    {
        return $this->belongsTo(Village::class, 'billing_village_id');
    }

    public function shippingCountry()
    {
        return $this->belongsTo(Country::class, 'shipping_country_id');
    }

    public function shippingDistrict()
    {
        return $this->belongsTo(District::class, 'shipping_district_id');
    }

    public function shippingProvince()
    {
        return $this->belongsTo(Province::class, 'shipping_province_id');
    }

    public function shippingRegency()
    {
        return $this->belongsTo(Regency::class, 'shipping_regency_id');
    }

    public function shippingVillage()
    {
        return $this->belongsTo(Village::class, 'shipping_village_id');
    }

    public function callAttendees()
    {
        return $this->hasMany(CallAttendees::class, 'client_id');
    }

    public function common_case()
    {
        return $this->hasMany(CommonCase::class, 'client_contact_id');
    }
}
