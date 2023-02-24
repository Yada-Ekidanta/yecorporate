<?php

namespace App\Http\Controllers\Office\Finance\Income;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\ProductCategory;
use App\Models\Finance\Income\Revenue;
use App\Models\Master\Client;
use App\Models\Master\Bank;
use Illuminate\Support\Facades\Storage;
class RevenueController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Revenue::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.income.revenue.list', compact('collection'));
        }
        return view('pages.office.finance.income.revenue.main');
    }
    public function create()
    {
        $categories = ProductCategory::orderBy('name', 'asc')->get();
        $clients = Client::orderBy('name', 'asc')->get();
        $accounts = Bank::orderBy('name', 'asc')->get();
        return view('pages.office.finance.income.revenue.input', ['accounts' => $accounts, 'clients' => $clients, 'categories' => $categories, 'data' => new Revenue]);
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
        $revenue = new Revenue;
        $revenue->date = $request->date;
        $revenue->amount = $request->amount;
        $revenue->account_id = $request->account_id;
        $revenue->client_id = $request->client_id;
        $revenue->category_id = $request->category_id;
        $revenue->reference = $request->reference;
        $revenue->description = $request->description;
        if (request()->file('add_receipt')) {
            if ($revenue->add_receipt != null) {
                Storage::delete($revenue->add_receipt);
            }
            $file = request()->file('add_receipt')->store('public/revenue');
            $revenue->add_receipt = $file;
        } else {
            $revenue->add_receipt = $revenue->add_receipt;
        }
        
        $revenue->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Revenue has been saved',
        ], 200);
    }
    public function show(Revenue $revenue)
    {
        //
    }
    public function edit(Revenue $revenue)
    {
        $categories = ProductCategory::orderBy('name', 'asc')->get();
        $clients = Client::orderBy('name', 'asc')->get();
        $accounts = Bank::orderBy('name', 'asc')->get();
        return view('pages.office.finance.income.revenue.input', ['accounts' => $accounts, 'clients' => $clients, 'categories' => $categories, 'data' => $revenue]);
    }
    public function update(Request $request, Revenue $revenue)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $revenue->date = $request->date;
        $revenue->amount = $request->amount;
        $revenue->account_id = $request->account_id;
        $revenue->client_id = $request->client_id;
        $revenue->category_id = $request->category_id;
        $revenue->reference = $request->reference;
        $revenue->description = $request->description;
        if (request()->file('add_receipt')) {
            if ($revenue->add_receipt != null) {
                Storage::delete($revenue->add_receipt);
            }
            $file = request()->file('add_receipt')->store('public/revenue');
            $revenue->add_receipt = $file;
        } else {
            $revenue->add_receipt = $revenue->add_receipt;
        }
        $revenue->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Revenue has been updated',
        ], 200);
    }
    public function destroy(Revenue $revenue)
    {
        $revenue->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Revenue has been deleted',
        ], 200);
    }
}
