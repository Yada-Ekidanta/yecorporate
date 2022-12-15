<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\LeaveType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LeaveTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = LeaveType::where('title','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.leave_type.list', compact('collection'));
        }
        return view('pages.office.master.leave_type.main');
    }
    public function create()
    {
        return view('pages.office.master.leave_type.input', ['data' => new LeaveType]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'days' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $leaveType = new LeaveType;
        $leaveType->title = $request->title;
        $leaveType->days = $request->days;
        $leaveType->created_by = Auth::guard('employees')->user()->id;
        $leaveType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Loan Option has been saved',
        ], 200);
    }
    public function show(LeaveType $LeaveType)
    {
        //
    }
    public function edit(LeaveType $leaveType)
    {
        return view('pages.office.master.leave_type.input', ['data' => $leaveType]);
    }
    public function update(Request $request, LeaveType $leaveType)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'days' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $leaveType->title = $request->title;
        $leaveType->days = $request->days;
        $leaveType->created_by = Auth::guard('employees')->user()->id;
        $leaveType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Loan Option has been updated',
        ], 200);
    }
    public function destroy(LeaveType $leaveType)
    {
        $leaveType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Loan Option has been deleted',
        ], 200);
    }
}
