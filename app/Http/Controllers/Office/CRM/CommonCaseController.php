<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Client;
use Illuminate\Http\Request;
use App\Models\CRM\CommonCase;
use App\Models\CRM\ClientContact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommonCaseController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = CommonCase::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.common_case.list', compact('collection'));
        }
        return view('pages.office.crm.common_case.main');
    }

    public function create()
    {
        $client = Client::orderBy('name', 'asc')->get();
        $client_contact = ClientContact::orderBy('name', 'asc')->get();
        return view('pages.office.crm.common_case.input', ['data' => new CommonCase(), 'client' => $client, 'client_contact' => $client_contact]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'number' => 'required',
            'st' => 'required',
            'client_id' => 'required',
            'priority' => 'required',
            'client_contact_id' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $common_case = new CommonCase();
        $common_case->employee_id = $employee_id;
        $common_case->name = $request->name;
        $common_case->number = $request->number;
        $common_case->st = $request->st;
        $common_case->client_id = $request->client_id;
        $common_case->priority = $request->priority;
        $common_case->client_contact_id = $request->client_contact_id;
        $common_case->attachment = $request->attachment;
        $common_case->desc = $request->desc;
        $common_case->created_by = $employee_id;
        $common_case->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Common Case Created',
        ]);
    }

    public function show(CommonCase $common_case)
    {
        //
    }

    public function edit(CommonCase $common_case)
    {
        $client = Client::orderBy('name', 'asc')->get();
        $client_contact = ClientContact::orderBy('name', 'asc')->get();
        return view('pages.office.crm.common_case.input', ['data' => $common_case, 'client' => $client, 'client_contact' => $client_contact]);
    }

    public function update(Request $request, CommonCase $common_case)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'number' => 'required',
            'st' => 'required',
            'client_id' => 'required',
            'priority' => 'required',
            'client_contact_id' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $common_case->employee_id = $employee_id;
        $common_case->name = $request->name;
        $common_case->number = $request->number;
        $common_case->st = $request->st;
        $common_case->client_id = $request->client_id;
        $common_case->priority = $request->priority;
        $common_case->client_contact_id = $request->client_contact_id;
        $common_case->attachment = $request->attachment;
        $common_case->desc = $request->desc;
        $common_case->created_by = $employee_id;
        $common_case->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Common Case Updated',
        ]);
    }

    public function destroy(CommonCase $common_case)
    {
        $common_case->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Common Case Deleted',
        ]);
    }
}
