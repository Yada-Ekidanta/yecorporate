<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        $role = Role::where('id',$request->position)->first();
        $role->syncPermissions($request->input('permission'));
        return response()->json([
            'alert' => 'success',
            'message' => 'Role Saved',
        ]);
    }
}
