<?php

namespace App\Http\Controllers\Office\Finance\Expense;

use App\Http\Controllers\Controller;
use App\Models\Finance\Expense\Bill;
use App\Models\Finance\Expense\BillItem;
use App\Models\Master\ExpenseType;
use App\Models\Master\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BillController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Bill::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.expense.bill.list', compact('collection'));
        }
        return view('pages.office.finance.expense.bill.main');
    }
    public function create()
    {
        $categories = ExpenseType::orderBy('name', 'asc')->get();
        $vendors = Vendor::orderBy('name', 'asc')->get();
        $bill_number = $this->billnumber();
        return view('pages.office.finance.expense.bill.input', ['bill_number' => $bill_number, 'vendors' => $vendors, 'categories' => $categories, 'data' => new Bill]);
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
        $bill = new Bill;
        $bill->bill_id = $this->billNumber();
        $bill->vendor_id = $request->vendor_id;
        $bill->date = $request->date;
        $bill->st = 0;
        $bill->category_id = $request->category_id;
        $bill->due_at = $request->due_at;
        $bill->discount_apply = isset($request->discount_apply) ? 1 : 0;
        $bill->created_by = 1;
        $bill->save();

        foreach ($request->kt_docs_repeater_basic as $key => $value) {
            $billProduct = new BillItem;
            $billProduct->bill_id = $bill->id;
            $billProduct->name = $value['name'];
            $billProduct->qty = $value['qty'];
            $billProduct->tax = $value['tax'];
            $billProduct->discount = $value['discount'];
            $billProduct->price = $value['price'];
            $billProduct->save();
        }
        $bill->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Bill has been saved',
        ], 200);
    }
    public function show(Bill $bill)
    {
        //
    }
    public function edit(Bill $bill)
    {
        return view('pages.office.finance.expense.bill.input', ['data' => $bill]);
    }
    public function update(Request $request, Bill $bill)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $bill->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Bill has been updated',
        ], 200);
    }
    public function destroy(Bill $bill)
    {
        $bill->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Bill has been deleted',
        ], 200);
    }
    public function billnumber()
    {
        // $latest = Utility::getValByName('proposal_starting_number');
        $latest = Bill::where('created_by', '=', 1)->latest()->first();
        if (!$latest) {
            return 1;
        }

        return $latest->bill_id + 1;
        return $latest;
    }
}
