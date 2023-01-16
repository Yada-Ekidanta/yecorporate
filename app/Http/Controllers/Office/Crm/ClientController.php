<?php

namespace App\Http\Controllers\Office\Crm;

use Illuminate\Http\Request;
use App\Models\Crm\Client;
use App\Models\HRM\Employee;
use App\Models\Master\ClientType;
use App\Models\Setting\CompanyIndustry;
use App\Models\Regional\Country;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use App\Models\Regional\Regency;
use App\Models\Regional\Village;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
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
            return view('pages.office.crm.client.list', compact('collection'));
        }
        return view('pages.office.crm.client.main');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Employee::get();
        $client_type = ClientType::get();
        $company_industry = CompanyIndustry::get();
        $country = Country::get();
        $province = Province::get();
        $district = District::get();
        $regency = Regency::get();
        $village = Village::get();
        return view('pages.office.crm.client.input', ['data' => new Client(),'employee'=>$employee,'client_type'=>$client_type,'company_industry'=>$company_industry,'country'=>$country,'province'=>$province,'district'=>$district,'regency'=>$regency,'village'=>$village]);
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
            'document_id' => 'required',
            'employee_id' => 'required',
            'client_type_id' => 'required',
            'company_industry_id' => 'required',
            'company_name' => 'required',
            'company_logo' => 'required|image',
            'title' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'billing_address' => 'required',
            'billing_country_id' => 'required',
            'billing_province_id' => 'required',
            'billing_regency_id' => 'required',
            'billing_district_id' => 'required',
            'billing_village_id' => 'required',
            'billing_postcode' => 'required',
            'shipping_address' => 'required',
            'shipping_country_id' => 'required',
            'shipping_province_id' => 'required',
            'shipping_regency_id' => 'required',
            'shipping_district_id' => 'required',
            'shipping_village_id' => 'required',
            'shipping_postcode' => 'required',
            'password' => 'required',
            // 'date_birth' => 'required',
            // 'url' => 'required',
            // 'paypal' => 'required',
            // 'google_id' => 'required',
            'category' => 'required',
            'st' => 'required',
            // 'avatar' => 'required',
            'last_seen' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $client = new Client();
        $client->document_id = $request->document_id;
        $client->employee_id = $request->employee_id;  
        $client->client_type_id = $request->client_type_id;
        $client->company_industry_id = $request->company_industry_id;
        $client->company_name = $request->company_name;
        if($request->file('company_logo')){
            if($client->company_logo != null){
                Storage::delete($client->company_logo);
            }
            $file = $request->file('company_logo')->store('public/company_logo');
            $client->company_logo=$file;
        }else{
            $client->company_logo= $client->company_logo;
        }
        $client->title = $request->title;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->billing_address = $request->billing_address;
        $client->billing_country_id = $request->billing_country_id;
        $client->billing_province_id = $request->billing_province_id;
        $client->billing_regency_id = $request->billing_regency_id;
        $client->billing_district_id = $request->billing_district_id;
        $client->billing_village_id = $request->billing_village_id;
        $client->billing_postcode = $request->billing_postcode;
        $client->shipping_address = $request->shipping_address;
        $client->shipping_country_id = $request->shipping_country_id;
        $client->shipping_province_id = $request->shipping_province_id;
        $client->shipping_regency_id = $request->shipping_regency_id;
        $client->shipping_district_id = $request->shipping_district_id;
        $client->shipping_village_id = $request->shipping_village_id;
        $client->shipping_postcode = $request->shipping_postcode;
        $client->password = $request->password;
        $client->date_birth = $request->date_birth;
        // $client->url = $request->url;
        // $client->paypal = $request->paypal;
        // $client->google_id = $request->google_id;
        $client->category = $request->category;
        $client->st = $request->st;
        // $client->avatar = $request->avatar;
        $client->last_seen = $request->last_seen;
        // $client->created_by = Auth::guard('employees')->user()->id;
        $client->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Created',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $employee = Employee::get();
        $client_type = ClientType::get();
        $company_industry = CompanyIndustry::get();
        $country = Country::get();
        $province = Province::get();
        $district = District::get();
        $regency = Regency::get();
        $village = Village::get();
        return view('pages.office.crm.client.input', ['data' => $client,'employee'=>$employee,'client_type'=>$client_type,'company_industry'=>$company_industry,'country'=>$country,'province'=>$province,'district'=>$district,'regency'=>$regency,'village'=>$village]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validator = Validator::make($request->all(), [
            'document_id' => 'required',
            'employee_id' => 'required',
            'client_type_id' => 'required',
            'company_industry_id' => 'required',
            'company_name' => 'required',
            'company_logo' => 'required|image',
            'title' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'billing_address' => 'required',
            'billing_country_id' => 'required',
            'billing_province_id' => 'required',
            'billing_regency_id' => 'required',
            'billing_district_id' => 'required',
            'billing_village_id' => 'required',
            'billing_postcode' => 'required',
            'shipping_address' => 'required',
            'shipping_country_id' => 'required',
            'shipping_province_id' => 'required',
            'shipping_regency_id' => 'required',
            'shipping_district_id' => 'required',
            'shipping_village_id' => 'required',
            'shipping_postcode' => 'required',
            'password' => 'required',
            'date_birth' => 'required',
            // 'url' => 'required',
            // 'paypal' => 'required',
            // 'google_id' => 'required',
            'category' => 'required',
            'st' => 'required',
            // 'avatar' => 'required',
            'last_seen' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $client->document_id = $request->document_id;
        $client->employee_id = $request->employee_id;  
        $client->client_type_id = $request->client_type_id;
        $client->company_industry_id = $request->company_industry_id;
        $client->company_name = $request->company_name;
        if($request->file('company_logo')){
            if($client->company_logo != null){
                Storage::delete($client->company_logo);
            }
            $file = $request->file('company_logo')->store('public/company_logo');
            $client->company_logo=$file;
        }else{
            $client->company_logo= $client->company_logo;
        }
        $client->title = $request->title;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->billing_address = $request->billing_address;
        $client->billing_country_id = $request->billing_country_id;
        $client->billing_province_id = $request->billing_province_id;
        $client->billing_regency_id = $request->billing_regency_id;
        $client->billing_district_id = $request->billing_district_id;
        $client->billing_village_id = $request->billing_village_id;
        $client->billing_postcode = $request->billing_postcode;
        $client->shipping_address = $request->shipping_address;
        $client->shipping_country_id = $request->shipping_country_id;
        $client->shipping_province_id = $request->shipping_province_id;
        $client->shipping_regency_id = $request->shipping_regency_id;
        $client->shipping_district_id = $request->shipping_district_id;
        $client->shipping_village_id = $request->shipping_village_id;
        $client->shipping_postcode = $request->shipping_postcode;
        $client->password = $request->password;
        $client->date_birth = $request->date_birth;
        // $client->url = $request->url;
        // $client->paypal = $request->paypal;
        // $client->google_id = $request->google_id;
        $client->category = $request->category;
        $client->st = $request->st;
        // $client->avatar = $request->avatar;
        $client->last_seen = $request->last_seen;
        // $client->created_by = Auth::guard('employees')->user()->id;
        $client->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Update',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Deleted',
        ]);
    }
}
