<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Master\DeductionOption;
use Illuminate\Support\Facades\Validator;

class DeductionOptionController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = DeductionOption::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.deduction_option.list', compact('collection'));
        }
        return view('pages.office.master.deduction_option.main');
    }
    public function create()
    {
        return view('pages.office.master.deduction_option.input', ['data' => new DeductionOption]);
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
        $deduction_option = new DeductionOption;
        $deduction_option->name = $request->name;
        $deduction_option->created_by = Auth::guard('employees')->user()->id;
        $deduction_option->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Deduction Option Created',
        ]);
    }
    public function show(DeductionOption $deductionOption)
    {
        //
    }
    public function edit(DeductionOption $deductionOption)
    {
        return view('pages.office.master.deduction_option.input', ['data' => $deductionOption]);
    }
    public function update(Request $request, DeductionOption $deductionOption)
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
        $deductionOption->name = $request->name;
        $deductionOption->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Deduction Option Updated',
        ]);
    }
    public function destroy(DeductionOption $deductionOption)
    {
        $deductionOption->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Deduction Option Deleted',
        ]);
    }
}
