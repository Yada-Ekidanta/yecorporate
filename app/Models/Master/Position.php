<?php

namespace App\Models\Master;

use App\Models\HRM\Role;
use App\Models\HRM\RolePermission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function department ()
    {
        return $this->belongsTo(Department::class);
    }
    public function role ()
    {
        return $this->belongsTo(Role::class,'id','id');
    }
    public function permission ()
    {
        return $this->belongsTo(RolePermission::class,'id','role_id');
    }
    public function role_permission ()
    {
        return $this->hasMany(RolePermission::class,'role_id','id');
    }
}
