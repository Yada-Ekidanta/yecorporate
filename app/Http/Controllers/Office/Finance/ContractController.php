<?php

namespace App\Http\Controllers\Office\Finance;

use App\Http\Controllers\Controller;
use App\Models\Finance\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Finance\ContractType;
use App\Models\Master\Client;
class ContractController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Contract::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.contract.list', compact('collection'));
        }
        return view('pages.office.finance.contract.main');
    }
    public function create()
    {
        $clients = Client::orderBy('name', 'asc')->get();
        $types = ContractType::orderBy('name', 'asc')->get();
        return view('pages.office.finance.contract.input', ['types' => $types, 'clients' => $clients, 'data' => new Contract]);
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
        $contract = new Contract;
        $contract->client_id      = $request->client_id;
            $contract->subject     = $request->subject;
            $contract->type        = $request->type;
            $contract->value       = $request->value;
            $contract->start_date  = $request->start_date;
            $contract->end_date    = $request->end_date;
            $contract->status    = $request->status;
            $contract->description = $request->description;
            $contract->created_by  = 1;

        $contract->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Contract has been saved',
        ], 200);
    }
    public function show(Contract $contract)
    {
        //
    }
    public function edit(Contract $contract)
    {
        $clients = Client::orderBy('name', 'asc')->get();
        $types = ContractType::orderBy('name', 'asc')->get();
        return view('pages.office.finance.contract.input', ['types' => $types, 'clients' => $clients, 'data' => $contract]);
    }
    public function update(Request $request, Contract $contract)
    {
        $validator = Validator::make($request->all(), [
          
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $contract->client_id      = $request->client_id;
            $contract->subject     = $request->subject;
            $contract->type        = $request->type;
            $contract->value       = $request->value;
            $contract->start_date  = $request->start_date;
            $contract->end_date    = $request->end_date;
            $contract->status    = $request->status;
            $contract->description = $request->description;
            $contract->created_by  = 1;

        $contract->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Contract has been updated',
        ], 200);
    }
    public function destroy(Contract $contract)
    {
        $contract->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Contract has been deleted',
        ], 200);
    }
}
