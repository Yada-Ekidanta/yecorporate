<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Client;
use Illuminate\Http\Request;
use App\Models\CRM\Opportunity;
use App\Models\CRM\ClientDocument;
use App\Models\Master\DocumentType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Master\DocumentFolder;
use Illuminate\Support\Facades\Validator;

class ClientDocumentController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = ClientDocument::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.client_document.list', compact('collection'));
        }
        return view('pages.office.crm.client_document.main');
    }

    public function create()
    {
        $client = Client::orderBy('name', 'asc')->get();
        $document_type = DocumentType::orderBy('name', 'asc')->get();
        $document_folder = DocumentFolder::orderBy('name', 'asc')->get();
        $opportunity = Opportunity::orderBy('name', 'asc')->get();
        return view('pages.office.crm.client_document.input', ['data' => new ClientDocument(),'client'=>$client,'document_type'=>$document_type,'document_folder'=>$document_folder,'opportunity'=>$opportunity]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'name' => 'required',
            'document_folder_id' => 'required',
            'document_type_id' => 'required',
            'opportunity_id' => 'required',
            'publish_date' => 'required',
            'expiration_date' => 'required',
            'st' => 'required',
            'desc' => 'required',
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
        $client_document = new ClientDocument();
        $client_document->employee_id = $employee_id;
        $client_document->client_id = $request->client_id;
        $client_document->name = $request->name;
        $client_document->document_folder_id = $request->document_folder_id;
        $client_document->document_type_id = $request->document_type_id;
        $client_document->opportunity_id = $request->opportunity_id;
        if ($request->publish_date < date('Y-m-d')) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The Publish Date Value Cannot Be Less Than Today'
            ]);
        } elseif ($request->expiration_date < $request->publish_date) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The Expiration Date Value Cannot Be Less Than The Publish Date Value'
            ]);
        }
        $client_document->publish_date = $request->publish_date;
        $client_document->expiration_date = $request->expiration_date;
        $client_document->st = $request->st;
        $client_document->desc = $request->desc;
        $client_document->attachment = $request->attachment;
        $client_document->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Client Document Created',
        ]);
    }

    public function show(ClientDocument $client_document)
    {
        //
    }

    public function edit(ClientDocument $client_document)
    {
        $client = Client::orderBy('name', 'asc')->get();
        $document_type = DocumentType::orderBy('name', 'asc')->get();
        $document_folder = DocumentFolder::orderBy('name', 'asc')->get();
        $opportunity = Opportunity::orderBy('name', 'asc')->get();
        return view('pages.office.crm.client_document.input', ['data' => $client_document,'client'=>$client,'document_type'=>$document_type,'document_folder'=>$document_folder,'opportunity'=>$opportunity]);
    }

    public function update(Request $request, ClientDocument $client_document)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'name' => 'required',
            'document_folder_id' => 'required',
            'document_type_id' => 'required',
            'opportunity_id' => 'required',
            'publish_date' => 'required',
            'expiration_date' => 'required',
            'st' => 'required',
            'desc' => 'required',
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
        $client_document->employee_id = $employee_id;
        $client_document->client_id = $request->client_id;
        $client_document->name = $request->name;
        $client_document->document_folder_id = $request->document_folder_id;
        $client_document->document_type_id = $request->document_type_id;
        $client_document->opportunity_id = $request->opportunity_id;
        if ($request->expiration_date < $request->publish_date) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The Expiration Date Value Cannot Be Less Than The Publish Date Value'
            ]);
        }
        $client_document->publish_date = $request->publish_date;
        $client_document->expiration_date = $request->expiration_date;
        $client_document->st = $request->st;
        $client_document->desc = $request->desc;
        $client_document->attachment = $request->attachment;
        $client_document->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Client Document Updated',
        ]);
    }

    public function destroy(ClientDocument $client_document)
    {
        $client_document->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Document Deleted',
        ]);
    }
}
