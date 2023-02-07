<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\Crm\Client;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use App\Models\Regional\Country;
use App\Models\Regional\Regency;
use App\Models\Regional\Village;
use App\Models\Master\ClientType;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting\CompanyIndustry;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = Client::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.client.list', compact('collection'));
        }
        return view('pages.office.crm.client.main');
    }

    public function create()
    {
        $document = Employee::get();
        $employee = Employee::get();
        $client_type = ClientType::get();
        $company_industry = CompanyIndustry::get();
        $country = Country::get();
        $province = Province::get();
        $district = District::get();
        $regency = Regency::get();
        $village = Village::get();
        return view('pages.office.crm.client.input', ['data' => new Client(),'employee'=>$employee,'document'=>$document,'client_type'=>$client_type,'company_industry'=>$company_industry,'country'=>$country,'province'=>$province,'district'=>$district,'regency'=>$regency,'village'=>$village]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'document_id' => 'nullable',
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
            'shipping_address' => 'required',
            'shipping_country_id' => 'required',
            'shipping_province_id' => 'required',
            'shipping_regency_id' => 'required',
            'shipping_district_id' => 'required',
            'shipping_village_id' => 'required',
            'password' => 'required',
            'category' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $account = new Client();
        $account->document_id = $request->document_id;
        $account->employee_id = Auth::guard('employees')->user()->id;
        $account->client_type_id = $request->client_type_id;
        $account->company_industry_id = $request->company_industry_id;
        $account->company_name = $request->company_name;
        if($request->file('company_logo')){
            if($account->company_logo != null){
                Storage::delete($account->company_logo);
            }
            $file = $request->file('company_logo')->store('company_logo');
            $account->company_logo=$file;
        }else{
            $account->company_logo= $account->company_logo;
        }
        $account->title = $request->title;
        $account->name = $request->name;
        $account->phone = $request->phone;
        $account->email = $request->email;
        $account->billing_address = $request->billing_address;
        $account->billing_country_id = $request->billing_country_id;
        $account->billing_province_id = $request->billing_province_id;
        $account->billing_regency_id = $request->billing_regency_id;
        $account->billing_district_id = $request->billing_district_id;
        $account->billing_village_id = $request->billing_village_id;
        $account->billing_postcode = $request->billing_postcode;
        $account->shipping_address = $request->shipping_address;
        $account->shipping_country_id = $request->shipping_country_id;
        $account->shipping_province_id = $request->shipping_province_id;
        $account->shipping_regency_id = $request->shipping_regency_id;
        $account->shipping_district_id = $request->shipping_district_id;
        $account->shipping_village_id = $request->shipping_village_id;
        $account->shipping_postcode = $request->shipping_postcode;
        $account->password = $request->password;
        $account->date_birth = $request->date_birth;
        $account->category = $request->category;
        $account->st = $request->st;
        $account->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Created',
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit(Client $account)
    {
        $employee = Employee::get();
        $client_type = ClientType::get();
        $company_industry = CompanyIndustry::get();
        $country = Country::get();
        $province = Province::get();
        $district = District::get();
        $regency = Regency::get();
        $village = Village::get();
        return view('pages.office.crm.client.input', ['data' => $account,'employee'=>$employee,'client_type'=>$client_type,'company_industry'=>$company_industry,'country'=>$country,'province'=>$province,'district'=>$district,'regency'=>$regency,'village'=>$village]);
    }

    public function update(Request $request, Client $account)
    {
        $validator = Validator::make($request->all(), [
            'client_type_id' => 'required',
            'company_industry_id' => 'required',
            'company_name' => 'required',
            'company_logo' => 'nullable|image',
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
            'shipping_address' => 'required',
            'shipping_country_id' => 'required',
            'shipping_province_id' => 'required',
            'shipping_regency_id' => 'required',
            'shipping_district_id' => 'required',
            'shipping_village_id' => 'required',
            'date_birth' => 'required',
            'category' => 'required',
            'st' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $account->employee_id = Auth::guard('employees')->user()->id;
        $account->client_type_id = $request->client_type_id;
        $account->company_industry_id = $request->company_industry_id;
        $account->company_name = $request->company_name;
        if($request->file('company_logo')){
            if($account->company_logo != null){
                Storage::delete($account->company_logo);
            }
            $file = $request->file('company_logo')->store('company_logo');
            $account->company_logo=$file;
        }else{
            $account->company_logo= $account->company_logo;
        }
        $account->title = $request->title;
        $account->name = $request->name;
        $account->phone = $request->phone;
        $account->email = $request->email;
        $account->billing_address = $request->billing_address;
        $account->billing_country_id = $request->billing_country_id;
        $account->billing_province_id = $request->billing_province_id;
        $account->billing_regency_id = $request->billing_regency_id;
        $account->billing_district_id = $request->billing_district_id;
        $account->billing_village_id = $request->billing_village_id;
        $account->billing_postcode = $request->billing_postcode;
        $account->shipping_address = $request->shipping_address;
        $account->shipping_country_id = $request->shipping_country_id;
        $account->shipping_province_id = $request->shipping_province_id;
        $account->shipping_regency_id = $request->shipping_regency_id;
        $account->shipping_district_id = $request->shipping_district_id;
        $account->shipping_village_id = $request->shipping_village_id;
        $account->shipping_postcode = $request->shipping_postcode;
        $account->password = $request->password;
        $account->date_birth = $request->date_birth;
        $account->category = $request->category;
        $account->st = $request->st;
        $account->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Update',
        ]);
    }

    public function destroy(Client $account)
    {
        // dd($account->client_contact);
        $account->client_contact()->delete();
        $account->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Deleted',
        ]);
    }
}
