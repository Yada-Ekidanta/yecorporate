<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Client;
use Illuminate\Http\Request;
use App\Models\CRM\ClientContract;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CRM\ClientContractNote;
use Illuminate\Support\Facades\Storage;
use App\Models\CRM\ClientContractComment;
use App\Models\Master\ClientContractType;
use Illuminate\Support\Facades\Validator;
use App\Models\CRM\ClientContractAttachment;

class ClientContractController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = ClientContract::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.client_contract.list', compact('collection'));
        }
        return view('pages.office.crm.client_contract.main');
    }

    public function create()
    {
        $client = Client::orderBy('name', 'asc')->get();
        $client_contract_type = ClientContractType::orderBy('name', 'asc')->get();
        return view('pages.office.crm.client_contract.input', ['data' => new ClientContract(), 'client' => $client, 'client_contract_type' => $client_contract_type]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'name' => 'required',
            'subject' => 'required',
            'value' => 'required',
            'client_contract_type_id' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'desc' => 'required',
            'st' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        date_default_timezone_set('Asia/Jakarta');
        $employee_id = Auth::guard('employees')->user()->id;
        $client_contract = new ClientContract();
        $client_contract->employee_id = $employee_id;
        $client_contract->client_id = $request->client_id;
        $client_contract->name = $request->name;
        $client_contract->subject = $request->subject;
        $client_contract->value = $request->value;
        $client_contract->client_contract_type_id = $request->client_contract_type_id;
        if ($request->start_at < date('Y-m-d')) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The Start At Value Cannot Be Less Than Today'
            ]);
        } elseif ($request->end_at < $request->start_at) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The End At Value Cannot Be Less Than The Start At Value'
            ]);
        }
        $client_contract->start_at = $request->start_at;
        $client_contract->end_at = $request->end_at;
        $client_contract->desc = $request->desc;
        $client_contract->owner_signature = $request->owner_signature;
        $client_contract->client_signature = $request->client_signature;
        $client_contract->st = $request->st;
        $client_contract->save();

        // dd($request->all());
        // foreach ($request->contract_attachment as $key => $value) {
        //     // dd($value['files']);
        //     $contract_attachment = new ClientContractAttachment();
        //     $contract_attachment->employee_id = $employee_id;
        //     $contract_attachment->client_contract_id = $client_contract->id;
        //     if ($contract_attachment->files != null) {
        //         Storage::delete($contract_attachment->files);
        //     }
        //     $file = $value['files']->store('contract_attachment');
        //     $contract_attachment->files = $file;
        //     $contract_attachment->save();
        // }

        // foreach ($request->contract_comment as $key => $value) {
        //     // dd($value['comment']);
        //     $contract_comment = new ClientContractComment();
        //     $contract_comment->employee_id = $employee_id;
        //     $contract_comment->client_contract_id = $client_contract->id;
        //     $contract_comment->comment = $value['comment'];
        //     $contract_comment->save();
        // }

        // foreach ($request->contract_note as $key => $value) {
        //     // dd($value['note']);
        //     $contract_note = new ClientContractNote();
        //     $contract_note->employee_id = $employee_id;
        //     $contract_note->client_contract_id = $client_contract->id;
        //     $contract_note->note = $value['note'];
        //     $contract_note->save();
        // }

        return response()->json([
            'alert' => 'success',
            'message' => 'Client Contract Created'
        ]);
    }

    public function show(ClientContract $client_contract)
    {
        //
    }

    public function edit(ClientContract $client_contract)
    {
        $client = Client::orderBy('name', 'asc')->get();
        $client_contract_type = ClientContractType::orderBy('name', 'asc')->get();
        return view('pages.office.crm.client_contract.input', ['data' => $client_contract, 'client' => $client, 'client_contract_type' => $client_contract_type]);
    }

    public function update(Request $request, ClientContract $client_contract)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'name' => 'required',
            'subject' => 'required',
            'value' => 'required',
            'client_contract_type_id' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'desc' => 'required',
            'st' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $client_contract->employee_id = $employee_id;
        $client_contract->client_id = $request->client_id;
        $client_contract->name = $request->name;
        $client_contract->subject = $request->subject;
        $client_contract->value = $request->value;
        $client_contract->client_contract_type_id = $request->client_contract_type_id;
        if ($request->end_at < $request->start_at) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The End At Value Cannot Be Less Than The Start At Value'
            ]);
        }
        $client_contract->start_at = $request->start_at;
        $client_contract->end_at = $request->end_at;
        $client_contract->desc = $request->desc;
        $client_contract->owner_signature = $request->owner_signature;
        $client_contract->client_signature = $request->client_signature;
        $client_contract->st = $request->st;
        $client_contract->save();

        // foreach ($request->contract_attachment as $key => $value) {
        //     $contract_attachment = new ClientContractAttachment();
        //     $contract_attachment->employee_id = $employee_id;
        //     $contract_attachment->client_contract_id = $client_contract->id;
        //     if (request()->file('files')) {
        //         if ($contract_attachment->files != null) {
        //             Storage::delete($contract_attachment->files);
        //         }
        //         $file = request()->file('files')->store('public/contract_attachment');
        //         $contract_attachment->files = $file;
        //     } else {
        //         $contract_attachment->files = $contract_attachment->files;
        //     }
        //     $contract_attachment->save();
        // }

        // foreach ($request->contract_comment as $key => $value) {
        //     $contract_comment = new ClientContractComment();
        //     $contract_comment->employee_id = $employee_id;
        //     $contract_comment->client_contract_id = $client_contract->id;
        //     $contract_comment->comment = $value['comment'];
        //     $contract_comment->save();
        // }

        // foreach ($request->contract_note as $key => $value) {
        //     $contract_note = new ClientContractNote();
        //     $contract_note->employee_id = $employee_id;
        //     $contract_note->client_contract_id = $client_contract->id;
        //     $contract_note->note = $value['note'];
        //     $contract_note->save();
        // }


        return response()->json([
            'alert' => 'success',
            'message' => 'Client Contract Updated'
        ]);
    }

    public function destroy(ClientContract $client_contract)
    {
        $client_contract->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Contract Deleted',
        ]);
    }
}
