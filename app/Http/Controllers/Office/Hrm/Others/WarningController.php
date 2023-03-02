<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\Others\Warning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WarningController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Warning::paginate(10);;
            return view('pages.office.hrm.others.warning.list', compact('collection'));
        }
        return view('pages.office.hrm.others.warning.main');
    }

    public function create()
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.warning.input', [
            'data' => new Warning,
            'employee' => $employee,
        ]);
    }

   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'warning_by' => 'required',
            'warning_to' => 'required',
            'subject' => 'required',
            'warning_date' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $warning = new Warning;
        $warning->warning_by = $request->warning_by;
        $warning->warning_to = $request->warning_to;
        $warning->subject = $request->subject;
        $warning->warning_date = $request->warning_date;
        $warning->desc = $request->desc;
        $warning->created_by = Auth::guard('employees')->user()->id;
        $warning->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Warning Created',
        ]);
    }
     
    public function show(Warning $warning)
    {
        //
    }

    public function edit(Warning $warning)
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.warning.input', [
            'data' => $warning,
            'employee' => $employee,
        ]);
    }

    public function update(Request $request, Warning $warning)
    {
        $validator = Validator::make($request->all(), [
            'warning_by' => 'required',
            'warning_to' => 'required',
            'subject' => 'required',
            'warning_date' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $warning->warning_by = $request->warning_by;
        $warning->warning_to = $request->warning_to;
        $warning->subject = $request->subject;
        $warning->warning_date = $request->warning_date;
        $warning->desc = $request->desc;
        $warning->created_by = Auth::guard('employees')->user()->id;
        $warning->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Warning Created',
        ]);
    }

    public function destroy(Warning $warning)
    {
        $warning->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Warning Deleted',
        ]);
    }
}
