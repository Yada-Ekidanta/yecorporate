<?php

namespace App\Http\Controllers\Office\Finance\Expense;

use App\Http\Controllers\Controller;
use App\Models\Finance\Expense\Bill;
use App\Models\Finance\Expense\DebitNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DebitNoteController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = DebitNote::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.expense.debit.list', compact('collection'));
        }
        return view('pages.office.finance.expense.debit.main');
    }
    public function create()
    {
        $bills = Bill::orderBy('id', 'asc')->get();

        return view('pages.office.finance.expense.debit.input', ['bills' => $bills, 'data' => new DebitNote]);
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

        $debit = new DebitNote;
        $debit->bill_id = $request->bill_id;
        $debit->date = $request->date;
        $debit->amount = $request->amount;
        $debit->desc = $request->desc;

        $debit->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'DebitNote has been saved',
        ], 200);
    }
    public function show(DebitNote $debit)
    {
        //
    }
    public function edit(DebitNote $debit)
    {
        return view('pages.office.finance.expense.debit.input', ['data' => $debit]);
    }
    public function update(Request $request, DebitNote $debit)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $debit->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'DebitNote has been updated',
        ], 200);
    }
    public function destroy(DebitNote $debit)
    {
        $debit->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'DebitNote has been deleted',
        ], 200);
    }

    public function getbill(Request $request)
    {

        $bill = Bill::where('id', $request->bill_id)->first();
        echo json_encode($bill->getDue());
    }
}
