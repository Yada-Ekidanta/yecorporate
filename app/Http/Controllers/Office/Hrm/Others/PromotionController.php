<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\Others\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PromotionController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Promotion::paginate(10);;
            return view('pages.office.hrm.others.promotion.list', compact('collection'));
        }
        return view('pages.office.hrm.others.promotion.main');
    }

    public function create()
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.promotion.input', [
            'data' => new Promotion,
            'employee' => $employee,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'promotion_title' => 'required',
            'promotion_date' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $promotion = new Promotion();
        $promotion->employee_id = $request->employee_id;
        $promotion->designation_id = 0;
        $promotion->promotion_title = $request->promotion_title;
        $promotion->promotion_date = $request->promotion_date;
        $promotion->description = $request->description;
        $promotion->created_by = Auth::guard('employees')->user()->id;
        $promotion->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Resignation Created',
        ]);
    }

    public function show(Promotion $promotion)
    {
        //
    }

    public function edit(Promotion $promotion)
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.promotion.input', [
            'data' => $promotion,
            'employee' => $employee,
        ]);
    }

    public function update(Request $request, Promotion $promotion)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'promotion_title' => 'required',
            'promotion_date' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $promotion->employee_id = $request->employee_id;
        $promotion->designation_id = 0;
        $promotion->promotion_title = $request->promotion_title;
        $promotion->promotion_date = $request->promotion_date;
        $promotion->description = $request->description;
        $promotion->created_by = Auth::guard('employees')->user()->id;
        $promotion->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Resignation Updated',
        ]);
    }

    public function destroy(Promotion $promotion)
    {
        //
    }
}
