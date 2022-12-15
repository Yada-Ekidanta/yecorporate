<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\HRM\Department;
use App\Models\Master\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PositionController extends Controller
{
    public function index()
    {
        //
    }

    public function createPosition(Department $department)
    {
        return view('pages.office.master.position.input', [
            'data' => new Position(),
            'department' => $department,
        ]);
    }

    public function create(Department $department)
    {
        
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $position = new Position;
        $position->name = $request->name;
        $position->department_id = $request->department_id;
        $position->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Position Created',
        ]);
    }
    public function show(Position $position)
    {
        //
    }
    public function edit(Position $position,Department $department )
    {
        
    }
    public function editPosition(Department $department, Position $position )
    {
        return view('pages.office.master.position.input', [
            'data' => $position,
            'department' => $department,
        ]);
    }
    public function update(Request $request, Position $position)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $position->name = $request->name;
        $position->department_id = $request->department_id;
        $position->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Position Updated',
        ]);
    }
    public function destroy(Position $position)
    {
        $position->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Position has been deleted',
        ], 200);
    }

    public function permission(Position $position)
    {
        return view('pages.office.master.position.input-permission', [
            'data' => new Position(),
            // 'department' => $department,
        ]);
    }
}
