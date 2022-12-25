<?php

namespace App\Http\Controllers\Office\Finance\Banking;

use App\Http\Controllers\Controller;
use App\Models\Finance\Banking\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Finance\Banking\Account;
class TransferController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Transfer::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.banking.transfer.list', compact('collection'));
        }
        return view('pages.office.finance.banking.transfer.main');
    }
    public function create()
    {
        $accounts = Account::select('*', \DB::raw("CONCAT(bank_name,' ',holder_name) AS name"))->get();
        return view('pages.office.finance.banking.transfer.input', ['accounts'=> $accounts,'data' => new Transfer]);
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
        $transfer = new Transfer;
        $transfer->from_account   = $request->from_account;
            $transfer->to_account     = $request->to_account;
            $transfer->amount         = $request->amount;
            $transfer->date           = $request->date;
            $transfer->payment_method = 0;
            $transfer->reference      = $request->reference;
            $transfer->description    = $request->description;
        $transfer->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Transfer has been saved',
        ], 200);
    }
    public function show(Transfer $transfer)
    {
        //
    }
    public function edit(Transfer $transfer)
    {
        return view('pages.office.finance.banking.transfer.input', ['data' => $transfer]);
    }
    public function update(Request $request, Transfer $transfer)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $transfer->from_account   = $request->from_account;
            $transfer->to_account     = $request->to_account;
            $transfer->amount         = $request->amount;
            $transfer->date           = $request->date;
            $transfer->payment_method = 0;
            $transfer->reference      = $request->reference;
            $transfer->description    = $request->description;
        $transfer->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Transfer has been updated',
        ], 200);
    }
    public function destroy(Transfer $transfer)
    {
        $transfer->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Transfer has been deleted',
        ], 200);
    }
}
