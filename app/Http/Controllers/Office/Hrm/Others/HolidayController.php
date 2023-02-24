<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;  
use App\Models\HRM\Others\Holiday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HolidayController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Holiday::paginate(10);;
            return view('pages.office.hrm.others.holiday.list', compact('collection'));
        }
        return view('pages.office.hrm.others.holiday.main');
    }

    public function create()
    {
        return view('pages.office.hrm.others.holiday.input', [
            'data' => new Holiday,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'occasion' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $holiday = new Holiday;
        $holiday->occasion = $request->occasion;
        $holiday->start_date = $request->start_date;
        $holiday->end_date = $request->end_date;
        $holiday->created_by = Auth::guard('employees')->user()->id;
        $holiday->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Holiday Created',
        ]);
    }

    public function show(Holiday $holiday)
    {
        //
    }

    public function edit(Holiday $holiday)
    {
        return view('pages.office.hrm.others.holiday.input', [
            'data' => $holiday,
        ]);
    }

    public function update(Request $request, Holiday $holiday)
    {
        $validator = Validator::make($request->all(), [
            'occasion' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $holiday->occasion = $request->occasion;
        $holiday->start_date = $request->start_date;
        $holiday->end_date = $request->end_date;
        $holiday->created_by = Auth::guard('employees')->user()->id;
        $holiday->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Holiday Updated',
        ]);
    }

    public function destroy(Holiday $holiday)
    {
        $holiday->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Holiday Deleted',
        ]);
    }
}
