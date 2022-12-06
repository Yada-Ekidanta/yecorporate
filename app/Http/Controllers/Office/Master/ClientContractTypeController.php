<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Master\ClientContractType;
use Illuminate\Support\Facades\Validator;

class ClientContractTypeController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = ClientContractType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.client_contract_type.list', compact('collection'));
        }
        return view('pages.office.master.client_contract_type.main');
    }
    public function create()
    {
        return view('pages.office.master.client_contract_type.input', ['data' => new ClientContractType]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $clientContractType = new ClientContractType;
        $clientContractType->name = $request->name;
        $clientContractType->created_by = Auth::guard('employees')->user()->id;
        $clientContractType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Contract Type Created',
        ]);
    }
    public function show(ClientContractType $clientContractType)
    {
        //
    }
    public function edit(ClientContractType $clientContractType)
    {
        return view('pages.office.master.client_contract_type.input', ['data' => $clientContractType]);
    }
    public function update(Request $request, ClientContractType $clientContractType)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $clientContractType->name = $request->name;
        $clientContractType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Contract Type Updated',
        ]);
    }
    public function destroy(ClientContractType $clientContractType)
    {
        $clientContractType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Contract Type Deleted',
        ]);
    }
}
