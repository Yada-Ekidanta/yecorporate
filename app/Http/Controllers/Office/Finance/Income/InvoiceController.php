<?php

namespace App\Http\Controllers\Office\Finance\Income;

use App\Http\Controllers\Controller;
use App\Models\Finance\Income\Invoice;
use App\Models\Finance\Income\InvoiceProduct;
use App\Models\Master\Client;
use App\Models\Master\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $clients = Client::orderBy('name', 'asc')->get();
        $invoice_number = $this->invoicenumber();
        return view('pages.office.finance.income.invoice.input', ['invoice_number' => $invoice_number, 'clients' => $clients, 'categories' => $categories, 'data' => new Invoice]);
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
        $invoice = new Invoice;
        $invoice->invoice_id = $this->invoiceNumber();
        $invoice->client_id = $request->client_id;
        $invoice->st = 0;
        $invoice->issue_date = $request->issue_date;
        $invoice->due_at = $request->due_at;
        $invoice->category_id = $request->category_id;
        $invoice->ref_number = $request->ref_number;
        $invoice->discount_apply = isset($request->discount_apply) ? 1 : 0;
        $invoice->created_by = 1;
        $invoice->save();

        foreach ($request->kt_docs_repeater_basic as $key => $value) {
            $invoiceProduct = new InvoiceProduct;
            $invoiceProduct->invoice_id = $invoice->id;
            $invoiceProduct->item = $value['item'];
            $invoiceProduct->qty = $value['qty'];
            $invoiceProduct->tax = $value['tax'];
            $invoiceProduct->discount = $value['discount'];
            $invoiceProduct->price = $value['price'];
            $invoiceProduct->desc = $value['desc'];
            $invoiceProduct->save();
            $invoice->save();
        }
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
        $categories = ProductCategory::orderBy('name', 'asc')->get();
        $clients = Client::orderBy('name', 'asc')->get();
        $invoice_number = $this->invoicenumber();

        return view('pages.office.finance.income.invoice.input', ['invoice_number' => $invoice_number, 'clients' => $clients, 'categories' => $categories, 'data' => $invoice]);
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
        $invoice = new Invoice;
$invoice->invoice_id = $this->invoiceNumber();
$invoice->client_id = $request->client_id;
$invoice->st = 0;
$invoice->issue_date = $request->issue_date;
$invoice->due_at = $request->due_at;
$invoice->category_id = $request->category_id;
$invoice->ref_number = $request->ref_number;
$invoice->discount_apply = isset($request->discount_apply) ? 1 : 0;
$invoice->created_by = 1;
$invoice->save();

foreach ($request->kt_docs_repeater_basic as $key => $value) {
    $invoiceProduct = new InvoiceProduct;
    $invoiceProduct->invoice_id = $invoice->id;
    $invoiceProduct->item = $value['item'];
    $invoiceProduct->qty = $value['qty'];
    $invoiceProduct->tax = $value['tax'];
    $invoiceProduct->discount = $value['discount'];
    $invoiceProduct->price = $value['price'];
    $invoiceProduct->desc = $value['desc'];
    $invoiceProduct->save();
    $invoice->save();
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
    public function invoicenumber()
    {
        // $latest = Utility::getValByName('proposal_starting_number');
        $latest = Invoice::where('created_by', '=', 1)->latest()->first();
        if (!$latest) {
            return 1;
        }

        return $latest->invoice_id + 1;
        return $latest;
    }
}
