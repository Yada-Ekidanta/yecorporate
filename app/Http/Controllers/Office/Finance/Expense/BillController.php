<?php

namespace App\Http\Controllers\Office\Finance\Expense;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\ProductCategory;
use App\Models\Finance\Expense\Bill;
use App\Models\Master\Vendor;
use App\Models\Master\ProductService;

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
        $categories = ProductCategory::orderBy('name', 'asc')->get();
        $vendors = Vendor::orderBy('name', 'asc')->get();
        $productservices = ProductService::orderBy('name', 'asc')->get();
        return view('pages.office.finance.expense.bill.input', ['productservices' => $productservices, 'vendors' => $vendors, 'categories' => $categories, 'data' => new Bill]);
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
}
