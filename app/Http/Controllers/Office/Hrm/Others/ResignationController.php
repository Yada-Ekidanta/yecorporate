<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\Others\Resignation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ResignationController extends Controller
{
  
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Resignation::paginate(10);;
            return view('pages.office.hrm.others.resignation.list', compact('collection'));
        }
        return view('pages.office.hrm.others.resignation.main');
    }

    public function create()
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.resignation.input', [
            'data' => new Resignation,
            'employee' => $employee,
        ]);
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'resignation_date' => 'required',
            'notice_date' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $resignation = new Resignation;
        $resignation->employee_id = $request->employee_id;
        $resignation->resignation_date = $request->resignation_date;
        $resignation->notice_date = $request->notice_date;
        $resignation->description = $request->description;
        $resignation->created_by = Auth::guard('employees')->user()->id;
        $resignation->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Resignation Created',
        ]);
    }

    public function show(Resignation $resignation)
    {
        //
    }

    public function edit(Resignation $resignation)
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.resignation.input', [
            'data' => $resignation,
            'employee' => $employee,
        ]);
    }

    public function update(Request $request, Resignation $resignation)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'resignation_date' => 'required',
            'notice_date' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $resignation->employee_id = $request->employee_id;
        $resignation->resignation_date = $request->resignation_date;
        $resignation->notice_date = $request->notice_date;
        $resignation->description = $request->description;
        $resignation->created_by = Auth::guard('employees')->user()->id;
        $resignation->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Resignation Updated',
        ]);
    }

    public function destroy(Resignation $resignation)
    {
        $resignation->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Resignation Deleted',
        ]);
    }
}
