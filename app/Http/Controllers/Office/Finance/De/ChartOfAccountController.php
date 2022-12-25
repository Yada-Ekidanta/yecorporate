<?php

namespace App\Http\Controllers\Office\Finance\De;

use App\Http\Controllers\Controller;
use App\Models\Finance\De\ChartOfAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Finance\De\ChartOfAccountType;
class ChartOfAccountController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $types = ChartOfAccountType::get();

            $chartAccounts = [];
            foreach($types as $type)
            {
                $accounts = ChartOfAccount::where('type', $type->id);

                $chartAccounts[$type->name] = $accounts;

            }
            $collection = ChartOfAccount::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.de.chartofaccount.list', compact('collection', 'types', 'chartAccounts'));
        }
        return view('pages.office.finance.de.chartofaccount.main');
    }
    public function create()
    {
        $types = ChartOfAccountType::orderBy('name', 'asc')->get();
        $subtypes = ChartOfAccountType::orderBy('name', 'asc')->get();
        return view('pages.office.finance.de.chartofaccount.input', ['subtypes' => $subtypes, 'types' => $types, 'data' => new ChartOfAccount]);
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
        $chartofaccount = new ChartOfAccount;

        $chartofaccount->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'ChartOfAccount has been saved',
        ], 200);
    }
    public function show(ChartOfAccount $chartofaccount)
    {
        //
    }
    public function edit(ChartOfAccount $chartofaccount)
    {
        return view('pages.office.finance.de.chartofaccount.input', ['data' => $chartofaccount]);
    }
    public function update(Request $request, ChartOfAccount $chartofaccount)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $chartofaccount->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'ChartOfAccount has been updated',
        ], 200);
    }
    public function destroy(ChartOfAccount $chartofaccount)
    {
        $chartofaccount->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'ChartOfAccount has been deleted',
        ], 200);
    }
}
