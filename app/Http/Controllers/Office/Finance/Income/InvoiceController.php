<?php

namespace App\Http\Controllers\Office\Finance\Income;

use App\Http\Controllers\Controller;
use App\Models\Finance\Income\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\ProductCategory;
use App\Models\Master\ProductService;
class InvoiceController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Invoice::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.income.invoice.list', compact('collection'));
        }
        return view('pages.office.finance.income.invoice.main');
    }
    public function create()
    {
        $categories = ProductCategory::orderBy('name', 'asc')->get();
        $productservices = ProductService::orderBy('name', 'asc')->get();

        return view('pages.office.finance.income.invoice.input', ['productservices' => $productservices, 'categories' => $categories, 'data' => new Invoice]);
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
        $invoice = new invoice;

        $invoice->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'invoice has been saved',
        ], 200);
    }
    public function show(invoice $invoice)
    {
        //
    }
    public function edit(invoice $invoice)
    {
        return view('pages.office.finance.income.invoice.input', ['data' => $invoice]);
    }
    public function update(Request $request, invoice $invoice)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $invoice->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'invoice has been updated',
        ], 200);
    }
    public function destroy(invoice $invoice)
    {
        $invoice->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'invoice has been deleted',
        ], 200);
    }
}
