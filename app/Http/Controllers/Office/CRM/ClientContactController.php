<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Client;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use App\Models\Regional\Country;
use App\Models\Regional\Regency;
use App\Models\Regional\Village;
use App\Models\CRM\ClientContact;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientContactController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = ClientContact::where('client_id','LIKE','%'.$request->keyword.'%')->paginate(10);
            return view('pages.office.crm.client_contact.list', compact('collection'));
        }
        return view('pages.office.crm.client_contact.main');
    }

    public function create()
    {
        $client = Client::get();
        $country = Country::get();
        return view('pages.office.crm.client_contact.input', ['data' => new ClientContact(),'client'=>$client,'country'=>$country]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'country_id' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $clientContact = new ClientContact;
        $clientContact->employee_id = $employee_id;
        $clientContact->client_id = $request->client_id;
        $clientContact->title = $request->title;
        $clientContact->name = $request->name;
        $clientContact->phone = $request->phone;
        $clientContact->email = $request->email;
        $clientContact->address = $request->address;
        $clientContact->country_id = $request->country_id;
        $clientContact->province_id = $request->province_id;
        $clientContact->regency_id = $request->regency_id;
        $clientContact->district_id = $request->district_id;
        $clientContact->village_id = $request->village_id;
        $clientContact->postcode = $request->postcode;
        $clientContact->description = $request->description;
        $clientContact->st = $request->st;
        $clientContact->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Client Contact has been Created'
        ]);
    }

    public function show(ClientContact $clientContact)
    {
        //
    }

    public function edit(ClientContact $clientContact)
    {
        $client = Client::get();
        $country = Country::get();
        $province = Province::get();
        $district = District::get();
        $regency = Regency::get();
        $village = Village::get();
        return view('pages.office.crm.client_contact.input', ['data' => $clientContact,'client'=>$client,'country'=>$country,'province'=>$province,'district'=>$district,'regency'=>$regency,'village'=>$village]);
    }

    public function update(Request $request, ClientContact $clientContact)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'country_id' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $clientContact->employee_id = $employee_id;
        $clientContact->client_id = $request->client_id;
        $clientContact->title = $request->title;
        $clientContact->name = $request->name;
        $clientContact->phone = $request->phone;
        $clientContact->email = $request->email;
        $clientContact->address = $request->address;
        $clientContact->country_id = $request->country_id;
        $clientContact->province_id = $request->province_id;
        $clientContact->regency_id = $request->regency_id;
        $clientContact->district_id = $request->district_id;
        $clientContact->village_id = $request->village_id;
        $clientContact->postcode = $request->postcode;
        $clientContact->description = $request->description;
        $clientContact->st = $request->st;
        $clientContact->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Client Contact has been Updated'
        ]);
    }

    public function destroy(ClientContact $clientContact)
    {
        $clientContact->common_case()->delete();
        $clientContact->lead()->delete();
        $clientContact->opportunity()->delete();
        $clientContact->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Contact has been Deleted',
        ]);
    }

    public function filterClientContacts(Request $request)
    {
        $clientContacts = ClientContact::where('client_id', $request->client_id)->get();
        $list = $request->option;
        foreach ($clientContacts as $row) {
            $list .= "<option value='$row->id'>$row->name ($row->phone)</option>";
        }
        return $list;
    }
}
