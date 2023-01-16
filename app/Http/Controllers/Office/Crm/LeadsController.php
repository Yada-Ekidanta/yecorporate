<?php

namespace App\Http\Controllers\Office\Crm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\CRM\Client;
use App\Models\HRM\Employee;
use App\Models\CRM\Leads;
use App\Models\Regional\Country;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use App\Models\Regional\Regency;
use App\Models\Regional\Village;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->ajax())
        {
            $collection = Client::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.lead.list', compact('collection'));
        }
        return view('pages.office.crm.lead.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $employee = Employee::get();
        $client = Client::get();
        $country = Country::get();
        $province = Province::get();
        $district = District::get();
        $regency = Regency::get();
        $village = Village::get();
        return view('pages.office.crm.lead.input', ['data' => new Leads(),'employee'=>$employee,'client'=>$client,'country'=>$country,'province'=>$province,'district'=>$district,'regency'=>$regency,'village'=>$village]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'client_id' => 'required',
            'title' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'country_id' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
            'postcode' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $leads = new Leads();
        $leads->employee_id = $request->employee_id;
        $leads->client_id = $request->client_id;
        $leads->title = $request->title;
        $leads->name = $request->name;
        $leads->phone= $request->phone;
        $leads->email = $request->email;
        $leads->address = $request->address;
        $leads->country_id = $request->country_id;
        $leads->province_id = $request->province_id;
        $leads->regency_id = $request->regency_id;
        $leads->district_id = $request->district_id;
        $leads->village_id = $request->village_id;
        $leads->postcode = $request->postcode;
        $leads->description = $request->description;
        $leads->created_by = Auth::guard('employees')->user()->id;
        $leads->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Leads Created',
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
    public function edit(Leads $leads)
    {
        //
        $employee = Employee::get();
        $client = Client::get();
        $country = Country::get();
        $province = Province::get();
        $district = District::get();
        $regency = Regency::get();
        $village = Village::get();
        return view('pages.office.crm.lead.input', ['data' =>$leads,'employee'=>$employee,'client'=>$client,'country'=>$country,'province'=>$province,'district'=>$district,'regency'=>$regency,'village'=>$village]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leads $leads)
    {
        //
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'client_id' => 'required',
            'title' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'country_id' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
            'postcode' => 'required',
            'descriptiom' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $leads->employee_id = $request->employee_id;
        $leads->client_id = $request->client_id;
        $leads->title = $request->title;
        $leads->name = $request->name;
        $leads->phone= $request->phone;
        $leads->email = $request->email;
        $leads->address = $request->address;
        $leads->country_id = $request->country_id;
        $leads->province_id = $request->province_id;
        $leads->regency_id = $request->regency_id;
        $leads->district_id = $request->district_id;
        $leads->village_id = $request->village_id;
        $leads->postcode = $request->postcode;
        $leads->description = $request->description;
        $leads->created_by = Auth::guard('employees')->user()->id;
        $leads->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Leads Update',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leads $leads)
    {
        //
        $leads->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Leads Deleted',
        ]);
    }
}
