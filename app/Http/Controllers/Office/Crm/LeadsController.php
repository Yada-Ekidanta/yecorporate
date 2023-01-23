<?php

namespace App\Http\Controllers\Office\Crm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CRM\Campaign;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\CRM\Client;
use App\Models\CRM\ClientContact;
use App\Models\HRM\Employee;
use App\Models\CRM\Leads;

class LeadsController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = Leads::where('title','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.lead.list', compact('collection'));
        }
        return view('pages.office.crm.lead.main');
    }

    public function create()
    {
        $client = Client::get();
        $clientContact = ClientContact::get();
        $campaign = Campaign::get();
        return view('pages.office.crm.lead.input', ['data' => new Leads(),'client'=>$client,'clientContact'=>$clientContact,'campaign'=>$campaign]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'campaign_id' => 'required',
            'title' => 'nullable',
            'opportunity_amount' => 'required',
            'st' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $leads = new Leads();
        $leads->employee_id = $employee_id;
        $leads->client_id = $request->client_id;
        $leads->client_contact_id = $request->client_contact_id;
        $leads->campaign_id = $request->campaign_id;
        $leads->title = $request->title;
        $leads->opportunity_amount = $request->opportunity_amount;
        $leads->st = $request->st;
        $leads->description = $request->description;
        $leads->created_by = $employee_id;
        $leads->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Leads Created',
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit(Leads $lead)
    {
        $client = Client::get();
        $clientContact = ClientContact::get();
        $campaign = Campaign::get();
        return view('pages.office.crm.lead.input', ['data' =>$lead,'client'=>$client,'clientContact'=>$clientContact,'campaign'=>$campaign]);
    }

    public function update(Request $request, Leads $lead)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'campaign_id' => 'required',
            'title' => 'nullable',
            'opportunity_amount' => 'required',
            'st' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $lead->employee_id = $employee_id;
        $lead->client_id = $request->client_id;
        $lead->client_contact_id = $request->client_contact_id;
        $lead->campaign_id = $request->campaign_id;
        $lead->title = $request->title;
        $lead->opportunity_amount = $request->opportunity_amount;
        $lead->st = $request->st;
        $lead->description = $request->description;
        $lead->created_by = $employee_id;
        $lead->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Leads Update',
        ]);
    }

    public function destroy(Leads $lead)
    {
        $lead->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Leads Deleted',
        ]);
    }
}
