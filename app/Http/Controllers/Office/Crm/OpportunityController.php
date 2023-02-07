<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Opportunity;
use App\Models\Master\OpportunityStage;
use App\Models\CRM\Client;
use App\Models\HRM\Employee;
use App\Models\Master\LeadSource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CRM\ClientContact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OpportunityController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = Opportunity::with('client')
                ->with('client_contact')
                ->get();
            return view('pages.office.crm.opportunity.list', compact('collection'));
        }
        return view('pages.office.crm.opportunity.main');
    }

    public function create()
    {
        $client = Client::get();
        $clientContact = ClientContact::get();
        $leadSource = LeadSource::get();
        $opportunityStage = OpportunityStage::get();
        return view('pages.office.crm.opportunity.input', ['data' => new Opportunity(),'client'=>$client,'clientContact'=>$clientContact,'leadSource'=>$leadSource,'opportunityStage'=>$opportunityStage]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'name' => 'required',
            'client_contact_id' => 'required',
            'opportunities_stage_id' => 'required',
            'amount' => 'required',
            'probability' => 'required',
            'close_date' => 'required',
            'lead_source_id' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $opportunity = new Opportunity();
        $opportunity->employee_id = $employee_id;
        $opportunity->client_id = $request->client_id;
        $opportunity->name = $request->name;
        $opportunity->client_contact_id = $request->client_contact_id;
        $opportunity->opportunities_stage_id = $request->opportunities_stage_id;
        $opportunity->amount = $request->amount;
        $opportunity->probability = $request->probability;
        $opportunity->close_date = $request->close_date;
        $opportunity->lead_source_id = $request->lead_source_id;
        $opportunity->desc = $request->desc;
        $opportunity->created_by = $employee_id;
        $opportunity->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity has been Created',
        ]);
    }

    public function show(Opportunity $opportunity)
    {
        //
    }

    public function edit(Opportunity $opportunity)
    {
        $client = Client::get();
        $clientContact = ClientContact::get();
        $leadSource = LeadSource::get();
        $opportunityStage = OpportunityStage::get();
        return view('pages.office.crm.opportunity.input', ['data' =>$opportunity,'client'=>$client,'clientContact'=>$clientContact,'leadSource'=>$leadSource,'opportunityStage'=>$opportunityStage]);
    }

    public function update(Request $request, Opportunity $opportunity)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'name' => 'required',
            'client_contact_id' => 'required',
            'opportunities_stage_id' => 'required',
            'amount' => 'required',
            'probability' => 'required',
            'close_date' => 'required',
            'lead_source_id' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $opportunity->employee_id = $employee_id;
        $opportunity->client_id = $request->client_id;
        $opportunity->name = $request->name;
        $opportunity->client_contact_id = $request->client_contact_id;
        $opportunity->opportunities_stage_id = $request->opportunities_stage_id;
        $opportunity->amount = $request->amount;
        $opportunity->probability = $request->probability;
        $opportunity->close_date = $request->close_date;
        $opportunity->lead_source_id = $request->lead_source_id;
        $opportunity->desc = $request->desc;
        $opportunity->created_by = $employee_id;
        $opportunity->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity has been Update',
        ]);
    }

    public function destroy(Opportunity $opportunity)
    {
        $opportunity->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity has been Deleted',
        ]);
    }

    public function updateLeadSource(Request $request, Opportunity $opportunity)
    {
        $opportunity->lead_source_id = $request->lead_source;
        $opportunity->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity has been updated',
        ], 200);
    }
}
