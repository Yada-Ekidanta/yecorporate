<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;
    protected $table = "role_has_permissions";
    public function role ()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }
    public function permission ()
    {
        return $this->belongsTo(Permission::class,'permission_id','id');
    }
}
