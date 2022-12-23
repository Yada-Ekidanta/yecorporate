<?php

namespace App\Http\Controllers\Office\Setting;

use App\Http\Controllers\Controller;
use App\Models\HRM\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Permission::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.setting.permission.list', compact('collection'));
        }
        return view('pages.office.setting.permission.main');
    }
    public function create()
    {
        return view('pages.office.setting.permission.input', ['data' => new Permission]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $permission = new Permission;
        $permission->name = $request->name;
        $permission->guard_name = $request->guard_name;
        $permission->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Permission Created',
        ]);
    }
    public function show(Permission $permission)
    {
        //
    }
    public function edit(Permission $permission)
    {
        return view('pages.office.setting.permission.input', ['data' => $permission]);
    }
    public function update(Request $request, Permission $permission)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $permission->name = $request->name;
        $permission->guard_name = $request->guard_name;
        $permission->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Permission Updated',
        ]);
    }
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Permission Deleted',
        ]);
    }
}
