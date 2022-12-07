<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\IncomeType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IncomeTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = IncomeType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.income_type.list', compact('collection'));
        }
        return view('pages.office.master.income_type.main');
    }
    public function create()
    {
        return view('pages.office.master.income_type.input', ['data' => new IncomeType]);
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
        $incomeType = new IncomeType;
        $incomeType->name = $request->name;
        $incomeType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Income Type Created',
        ], 200);
    }
    public function show(IncomeType $incomeType)
    {
        //
    }
    public function edit(IncomeType $incomeType)
    {
        return view('pages.office.master.income_type.input', ['data' => $incomeType]);
    }
    public function update(Request $request, IncomeType $incomeType)
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
        $incomeType->name = $request->name;
        $incomeType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Income Type Updated',
        ], 200);
    }
    public function destroy(IncomeType $incomeType)
    {
        $incomeType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Income Type Deleted',
        ], 200);
    }
}
