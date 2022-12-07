<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\ExpenseType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ExpenseTypeController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = ExpenseType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.expense_type.list', compact('collection'));
        }
        return view('pages.office.master.expense_type.main');
    }
    public function create()
    {
        return view('pages.office.master.expense_type.input', ['data' => new ExpenseType]);
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
    }
    public function show(ExpenseType $expenseType)
    {
        //
    }
    public function edit(ExpenseType $expenseType)
    {
        return view('pages.office.master.expense_type.input', ['data' => $expenseType]);
    }
    public function update(Request $request, ExpenseType $expenseType)
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
        $expenseType->name = $request->name;
        $expenseType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Expense Type Updated',
        ]);
    }
    public function destroy(ExpenseType $expenseType)
    {
        $expenseType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Expense Type Deleted',
        ]);
    }
}
