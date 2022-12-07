<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\LoanOption;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoanOptionController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = LoanOption::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.loan_option.list', compact('collection'));
        }
        return view('pages.office.master.loan_option.main');
    }
    public function create()
    {
        return view('pages.office.master.loan_option.input', ['data' => new LoanOption]);
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
        $loanOption = new LoanOption;
        $loanOption->name = $request->name;
        $loanOption->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Data has been saved',
        ], 200);
    }
    public function show(LoanOption $loanOption)
    {
        //
    }
    public function edit(LoanOption $loanOption)
    {
        return view('pages.office.master.loan_option.input', ['data' => $loanOption]);
    }
    public function update(Request $request, LoanOption $loanOption)
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
        $loanOption->name = $request->name;
        $loanOption->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Loan Option has been updated',
        ], 200);
    }
    public function destroy(LoanOption $loanOption)
    {
        $loanOption->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Loan Option has been deleted',
        ], 200);
    }
}
