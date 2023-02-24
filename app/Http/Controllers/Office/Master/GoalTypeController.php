<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\GoalType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GoalTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = GoalType::where('name', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.master.goal_type.list', compact('collection'));
        }
        return view('pages.office.hrm.master.goal_type.main');
    }
    public function create()
    {
        $goalType = [
            'Invoice',
            'Bill',
            'Revenue',
            'Payment',
        ];

        return view('pages.office.master.goal_type.input', ['goalType' => $goalType, 'data' => new GoalType]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $goalType = new GoalType;
        $goalType->name = $request->name;
        $goalType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Goal Type has been saved',
        ], 200);
    }
    public function show(GoalType $goalType)
    {
        //
    }
    public function edit(GoalType $goalType)
    {
        return view('pages.office.hrm.master.goal_type.input', ['data' => $goalType]);
    }
    public function update(Request $request, GoalType $goalType)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $goalType->name = $request->name;
        $goalType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Goal Type has been Updated',
        ], 200);
    }
    public function destroy(GoalType $goalType)
    {
        $goalType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Goal Type has been Deleted',
        ], 200);
    }
}
