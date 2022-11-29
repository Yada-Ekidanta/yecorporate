<?php

namespace App\Models\CRM;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory,SoftDeletes;
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
}
