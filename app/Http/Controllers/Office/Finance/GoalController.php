<?php

namespace App\Http\Controllers\Office\Finance;

use App\Http\Controllers\Controller;
use App\Models\Finance\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GoalController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Goal::where('name', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.goal.list', compact('collection'));
        }
        return view('pages.office.finance.goal.main');
    }
    public function create()
    {
        return view('pages.office.finance.goal.input', ['data' => new Goal]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'from' => 'required',
            'to' => 'required',
            'amount' => 'required',
            'is_display' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $goal = new Goal;
        $goal->name = $request->name;
        $goal->type = $request->type;
        $goal->from = $request->from;
        $goal->to = $request->to;
        $goal->amount = $request->amount;
        $goal->is_display = isset($request->is_display) ? 1 : 0;

        $goal->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Goal has been saved',
        ], 200);
    }
    public function show(Goal $goal)
    {
        //
    }
    public function edit(Goal $goal)
    {
        return view('pages.office.finance.goal.input', ['data' => $goal]);
    }
    public function update(Request $request, Goal $goal)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'from' => 'required',
            'to' => 'required',
            'amount' => 'required',
            'is_display' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $goal->name = $request->name;
        $goal->type = $request->type;
        $goal->from = $request->from;
        $goal->to = $request->to;
        $goal->amount = $request->amount;
        $goal->is_display = isset($request->is_display) ? 1 : 0;

        $goal->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Goal has been updated',
        ], 200);
    }
    public function destroy(Goal $goal)
    {
        $goal->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Goal has been deleted',
        ], 200);
    }
}
