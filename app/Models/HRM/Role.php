<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function permission ()
    {
        return $this->hasMany(RolePermission::class,'role_id','id');
    }
}
