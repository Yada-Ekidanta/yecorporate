<?php

namespace App\Http\Controllers\Office\Finance\Banking;

use App\Http\Controllers\Controller;
use App\Models\Finance\Banking\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Account::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.banking.account.list', compact('collection'));
        }
        return view('pages.office.finance.banking.account.main');
    }
    public function create()
    {
        return view('pages.office.finance.banking.account.input', ['data' => new Account]);
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
        $account = new Account;
            $account->holder_name     = $request->holder_name;
            $account->bank_name       = $request->bank_name;
            $account->account_number  = $request->account_number;
            $account->opening_balance = $request->opening_balance;
            $account->contact_number  = $request->contact_number;
            $account->bank_address    = $request->bank_address;

        $account->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Account has been saved',
        ], 200);
    }
    public function show(Account $account)
    {
        //
    }
    public function edit(Account $account)
    {
        return view('pages.office.finance.banking.account.input', ['data' => $account]);
    }
    public function update(Request $request, Account $account)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
            $account->holder_name     = $request->holder_name;
            $account->bank_name       = $request->bank_name;
            $account->account_number  = $request->account_number;
            $account->opening_balance = $request->opening_balance;
            $account->contact_number  = $request->contact_number;
            $account->bank_address    = $request->bank_address;
        $account->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Account has been updated',
        ], 200);
    }
    public function destroy(Account $account)
    {
        $account->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Account has been deleted',
        ], 200);
    }
}
