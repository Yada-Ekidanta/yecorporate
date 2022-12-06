<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Master\AllowanceOption;
use Illuminate\Support\Facades\Validator;

class AllowanceOptionController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = AllowanceOption::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.allowance.list', compact('collection'));
        }
        return view('pages.office.master.allowance.main');
    }
    public function create()
    {
        return view('pages.office.master.allowance.input', ['data' => new AllowanceOption]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $allowance = new AllowanceOption;
        $allowance->name = $request->name;
        $allowance->created_by = Auth::guard('employees')->user()->id;
        $allowance->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Allowance Option Created',
        ]);
    }
    public function show(AllowanceOption $allowanceOption)
    {
        //
    }
    public function edit(AllowanceOption $allowanceOption)
    {
        return view('pages.office.master.allowance.input', ['data' => $allowanceOption]);
    }
    public function update(Request $request, AllowanceOption $allowanceOption)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $allowanceOption->name = $request->name;
        $allowanceOption->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Allowance Option Updated',
        ]);
    }
    public function destroy(AllowanceOption $allowanceOption)
    {
        $allowanceOption->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Allowance Option Deleted',
        ]);
    }
}
