<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\Others\Termination;
use App\Models\Master\TerminationType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TerminationController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Termination::paginate(10);;
            return view('pages.office.hrm.others.termination.list', compact('collection'));
        }
        return view('pages.office.hrm.others.termination.main');
    }

    public function create()
    {
        $employee = Employee::all();
        $termination_type = TerminationType::all();
        return view('pages.office.hrm.others.termination.input', [
            'data' => new Termination,
            'employee' => $employee,
            'termination_type' => $termination_type,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'notice_date' => 'required',
            'termination_date' => 'required',
            'termination_type' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $termination = new Termination;
        $termination->employee_id = $request->employee_id;
        $termination->notice_date = $request->notice_date;
        $termination->termination_date = $request->termination_date;
        $termination->termination_type = $request->termination_type;
        $termination->description = $request->description;
        $termination->created_by = Auth::guard('employees')->user()->id;
        $termination->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Termination Created',
        ]);
    }

    public function show(Termination $termination)
    {
        //
    }

    public function edit(Termination $termination)
    {
        $employee = Employee::all();
        $termination_type = TerminationType::all();
        return view('pages.office.hrm.others.termination.input', [
            'data' => $termination,
            'employee' => $employee,
            'termination_type' => $termination_type,
        ]);
    }

    public function update(Request $request, Termination $termination)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'notice_date' => 'required',
            'termination_date' => 'required',
            'termination_type' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $termination->employee_id = $request->employee_id;
        $termination->notice_date = $request->notice_date;
        $termination->termination_date = $request->termination_date;
        $termination->termination_type = $request->termination_type;
        $termination->description = $request->description;
        $termination->created_by = Auth::guard('employees')->user()->id;
        $termination->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Termination Updated',
        ]);
    }

    public function destroy(Termination $termination)
    {
        $termination->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Termination Deleted',
        ]);
    }
}
