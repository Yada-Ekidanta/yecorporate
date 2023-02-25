<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Leads;
use App\Models\CRM\Client;
use App\Models\CRM\Campaign;
use Illuminate\Http\Request;
use Goutte\Client AS GClient;
use App\Models\CRM\ClientContact;
use Google\Service\MyBusiness;
use Google\Client as GoogleClient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

class LeadsController extends Controller
{
    public function index(Request $request)
    {
        $client = new GoogleClient();
        $client->setApplicationName('My Business App');
        $client->setAuthConfig('/path/to/your/json/key/file.json');
        $client->setScopes([Google_Service_MyBusiness::MYBUSINESS_BASIC]);
        
        // $client = HttpClient::create();
        // $response = $client->request('GET', 'https://angel.co/companies?company_types[]=Startup');
        // $html = $response->getContent();

        // $crawler = new Crawler($html);
        // $crawler->filter('div.base.startup')->each(function ($company) {
        //     $name = $company->filter('a.startup-link')->text();
        //     $description = $company->filter('div.pitch')->text();
        //     $location = $company->filter('div.location')->text();

        //     echo $name . ' - ' . $description . ' - ' . $location . '<br>';
        // });
        if($request->ajax())
        {
            $collection = Leads::with('client')
                ->with('client_contact')
                ->get();
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
            'message' => 'Leads has been Created',
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
            'message' => 'Leads has been Update',
        ]);
    }

    public function destroy(Leads $lead)
    {
        $lead->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Leads has been Deleted',
        ]);
    }

    public function updateStatus(Request $request, Leads $lead)
    {
        $lead->st = $request->status;
        $lead->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Leads has been updated',
        ]);
    }
}
