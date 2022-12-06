<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\ClientType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientTypeController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = ClientType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.client_type.list', compact('collection'));
        }
        return view('pages.office.master.client_type.main');
    }
    public function create()
    {
        return view('pages.office.master.client_type.input', ['data' => new ClientType]);
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
        $clientType = new ClientType;
        $clientType->name = $request->name;
        $clientType->created_by = Auth::guard('employees')->user()->id;
        $clientType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Type Created',
        ]);
    }
    public function show(ClientType $clientType)
    {
        //
    }
    public function edit(ClientType $clientType)
    {
        return view('pages.office.master.client_type.input', ['data' => $clientType]);
    }
    public function update(Request $request, ClientType $clientType)
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
        $clientType->name = $request->name;
        $clientType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Type Updated',
        ]);
    }
    public function destroy(ClientType $clientType)
    {
        $clientType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Type Deleted',
        ]);
    }
}
