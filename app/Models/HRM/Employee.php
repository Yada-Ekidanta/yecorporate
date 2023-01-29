<?php

namespace App\Models\HRM;

use App\Models\Setting\CompanyBranch;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use HasFactory,HasRoles,Notifiable,SoftDeletes;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_seen' => 'datetime',
    ];
    public function getImageAttribute()
    {
        if(Cache::has('is_employee_online'. $this->id) == 0){
            $simbol = '<div class="symbol-badge bg-danger start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>';
        }else{
            $simbol = '<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>';
        }
        if($this->avatar){
            return "<div class='symbol-label'><img src='".asset('storage/' . $this->avatar)."' alt='".$this->name."' class='w-100' /></div>" . $simbol;
        }else{
            $name = Str::substr($this->name, 0, 1);
            return "<div class='symbol-label fs-3 bg-light-danger text-danger'>".$name."</div>" . $simbol;
        }
    }
    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function branch()
    {
        return $this->belongsTo(CompanyBranch::class,'company_branch_id','id');
    }
    
    public function position ()
    {
        return $this->belongsTo(Position::class,'position_id','id');
    }
    public function chat ()
    {
        return $this->hasMany(Chat::class,'to_id','id');
    }
    public static function calculate_profile($profile)
    {
        if ( ! $profile) {
            return 0;
        }
        $columns    = preg_grep('/(.+ed_at)|(.*id)/', array_keys($profile->makeHidden(['nip','jobdesc','email_verified_at','google_id','paypal','password','remember_token','last_seen','created_at','updated_at','department_id','avatar','position_id'])->toArray()), PREG_GREP_INVERT);
        $per_column = count($columns) > 1 ? 100 / count($columns) : 0;
        $total      = 0;

        foreach ($profile->toArray() as $key => $value) {
            if ($value !== NULL && $value !== [] && in_array($key, $columns)) {
                $total += $per_column;
            }
        }
        return round($total);
    }

    public function team() {
        return $this->hasMany(Team::class, 'employee_id');
    }
}
