<?php

namespace App\Models\HRM;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory,SoftDeletes;
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
