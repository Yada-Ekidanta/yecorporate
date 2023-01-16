<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Opportunity;
use App\Models\Master\OpportunityStage;
use App\Models\CRM\Client;
use App\Models\HRM\Employee;
use App\Models\Master\LeadSource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = Client::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.opportunity.list', compact('collection'));
        }
        return view('pages.office.crm.opportunity.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Employee::get();
        $client = Client::get();
        $leadSource = LeadSource::get();
        $opportunityStage = OpportunityStage::get();
        return view('pages.office.crm.opportunity.input', ['data' => new Opportunity(),'employee'=>$employee,'client'=>$client,'leadSource'=>$leadSource,'opportunityStage'=>$opportunityStage]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'client_id' => 'required',
            'name' => 'required',
            'client_contact_id' => 'required',
            'opportunities_stage_id' => 'required',
            'amount' => 'required',
            'probability' => 'required',
            'close_date' => 'required',
            'lead_source_id' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $opportunity = new Opportunity();
        $opportunity->employee_id = $request->employee_id;
        $opportunity->client_id = $request->client_id;  
        $opportunity->name = $request->name;
        $opportunity->client_contact_id = $request->client_contact_id;
        $opportunity->opportunities_stage_id = $request->opportunities_stage_id;
        $opportunity->amount = $request->amount;
        $opportunity->probability = $request->probability;
        $opportunity->close_date = $request->close_date;
        $opportunity->lead_source_id = $request->lead_source_id;
        $opportunity->desc = $request->desc;
        $opportunity->created_by = Auth::guard('employees')->user()->id;
        $opportunity->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity Created',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function show(Opportunity $opportunity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function edit(Opportunity $opportunity)
    {
        $employee = Employee::get();
        $client = Client::get();
        $leadSource = LeadSource::get();
        $opportunityStage = OpportunityStage::get();
        return view('pages.office.crm.opportunity.input', ['data' =>$opportunity,'employee'=>$employee,'client'=>$client,'leadSource'=>$leadSource,'opportunityStage'=>$opportunityStage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opportunity $opportunity)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'client_id' => 'required',
            'name' => 'required',
            'client_contact_id' => 'required',
            'opportunities_stage_id' => 'required',
            'amount' => 'required',
            'probability' => 'required',
            'close_date' => 'required',
            'lead_source_id' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $opportunity->employee_id = $request->employee_id;
        $opportunity->client_id = $request->client_id;  
        $opportunity->name = $request->name;
        $opportunity->client_contact_id = $request->client_contact_id;
        $opportunity->opportunities_stage_id = $request->opportunities_stage_id;
        $opportunity->amount = $request->amount;
        $opportunity->probability = $request->probability;
        $opportunity->close_date = $request->close_date;
        $opportunity->lead_source_id = $request->lead_source_id;
        $opportunity->desc = $request->desc;
        $opportunity->created_by = Auth::guard('employees')->user()->id;
        $opportunity->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity Update',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opportunity $opportunity)
    {
        $opportunity->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity Deleted',
        ]);
    }
}
