<?php

namespace App\Http\Controllers\Office\Finance\Income;

use App\Http\Controllers\Controller;
use App\Models\Finance\Income\Credit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\ProductCategory;
use App\Models\Finance\Income\Invoice;
class CreditController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Credit::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.income.credit.list', compact('collection'));
        }
        return view('pages.office.finance.income.credit.main');
    }
    public function create()
    {
        $invoices = Invoice::orderBy('name', 'asc')->get();
        return view('pages.office.finance.income.credit.input', ['invoices' => $invoices, 'data' => new Credit]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $credit = new credit;
        $credit->invoice_id        = $request->invoice_id;
            $credit->date        = $request->date;
            $credit->amount      = $request->amount;
            $credit->description = $request->description;
        $credit->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'credit has been saved',
        ], 200);
    }
    public function show(credit $credit)
    {
        //
    }
    public function edit(credit $credit)
    {
        return view('pages.office.finance.income.credit.input', ['data' => $credit]);
    }
    public function update(Request $request, credit $credit)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $credit->invoice_id        = $request->invoice_id;
            $credit->date        = $request->date;
            $credit->amount      = $request->amount;
            $credit->description = $request->description;
        $credit->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'credit has been updated',
        ], 200);
    }
    public function destroy(credit $credit)
    {
        $credit->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'credit has been deleted',
        ], 200);
    }
}
