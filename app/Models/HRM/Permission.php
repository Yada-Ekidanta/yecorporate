<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    public function role_permission ()
    {
        return $this->hasMany(RolePermission::class,'id','permission_id');
    }
}
