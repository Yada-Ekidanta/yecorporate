<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\Others\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TravelController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Travel::paginate(10);;
            return view('pages.office.hrm.others.travel.list', compact('collection'));
        }
        return view('pages.office.hrm.others.travel.main');
    }
    
    public function create()
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.travel.input', [
            'data' => new Travel,
            'employee' => $employee,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'purpose_of_visit' => 'required',
            'place_of_visit' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $travel = new Travel;
        $travel->employee_id = $request->employee_id;
        $travel->start_date = $request->start_date;
        $travel->end_date = $request->end_date;
        $travel->purpose_of_visit = $request->purpose_of_visit;
        $travel->place_of_visit = $request->place_of_visit;
        $travel->description = $request->description;
        $travel->created_by = Auth::guard('employees')->user()->id;
        $travel->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Travel Created',
        ]);
    }

    public function show(Travel $travel)
    {
        
    }

    public function edit(Travel $travel)
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.travel.input', [
            'data' => $travel,
            'employee' => $employee,
        ]);
    }

    public function update(Request $request, Travel $travel)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'purpose_of_visit' => 'required',
            'place_of_visit' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $travel->employee_id = $request->employee_id;
        $travel->start_date = $request->start_date;
        $travel->end_date = $request->end_date;
        $travel->purpose_of_visit = $request->purpose_of_visit;
        $travel->place_of_visit = $request->place_of_visit;
        $travel->description = $request->description;
        $travel->created_by = Auth::guard('employees')->user()->id;
        $travel->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Travel Updated',
        ]);
    }

    public function destroy(Travel $travel)
    {
        $travel->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Travel Deleted',
        ]);
    }
}
