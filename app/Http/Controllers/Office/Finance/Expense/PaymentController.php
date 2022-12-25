<?php

namespace App\Http\Controllers\Office\Finance\Expense;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\ProductCategory;
use App\Models\Finance\Expense\Payment;
use App\Models\Master\Vendor;
use App\Models\Master\Bank;
class PaymentController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Payment::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.expense.payment.list', compact('collection'));
        }
        return view('pages.office.finance.expense.payment.main');
    }
    public function create()
    {
        $categories = ProductCategory::orderBy('name', 'asc')->get();
        $vendors = Vendor::orderBy('name', 'asc')->get();
        $accounts = Bank::orderBy('name', 'asc')->get();

        return view('pages.office.finance.expense.payment.input', ['accounts' => $accounts, 'vendors' => $vendors, 'categories' => $categories, 'data' => new Payment]);
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
        $payment = new Payment;
        $payment->date = $request->date;
        $payment->amount = $request->amount;
        $payment->account_id = $request->account_id;
        $payment->vender_id = $request->vender_id;
        $payment->category_id = $request->category_id;
        $payment->reference = $request->reference;
        $payment->description = $request->description;
        if (request()->file('add_receipt')) {
            if ($payment->add_receipt != null) {
                Storage::delete($payment->add_receipt);
            }
            $file = request()->file('add_receipt')->store('public/payment');
            $payment->add_receipt = $file;
        } else {
            $payment->add_receipt = $payment->add_receipt;
        }
        $payment->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payment has been saved',
        ], 200);
    }
    public function show(Payment $payment)
    {
        //
    }
    public function edit(Payment $payment)
    {   
        $categories = ProductCategory::orderBy('name', 'asc')->get();
        $vendors = Vendor::orderBy('name', 'asc')->get();
        $accounts = Bank::orderBy('name', 'asc')->get();

        return view('pages.office.finance.expense.payment.input', ['accounts' => $accounts, 'vendors' => $vendors, 'categories' => $categories, 'data' => $payment]);
    }
    public function update(Request $request, Payment $payment)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $payment->date = $request->date;
        $payment->amount = $request->amount;
        $payment->account_id = $request->account_id;
        $payment->vender_id = $request->vender_id;
        $payment->category_id = $request->category_id;
        $payment->reference = $request->reference;
        $payment->description = $request->description;
        if (request()->file('add_receipt')) {
            if ($payment->add_receipt != null) {
                Storage::delete($payment->add_receipt);
            }
            $file = request()->file('add_receipt')->store('public/payment');
            $payment->add_receipt = $file;
        } else {
            $payment->add_receipt = $payment->add_receipt;
        }
        $payment->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payment has been updated',
        ], 200);
    }
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payment has been deleted',
        ], 200);
    }
}
