<?php

namespace App\Http\Controllers\Office\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Company;
use App\Models\Setting\CompanyBank;
use Illuminate\Http\Request;
use App\Models\Setting\CompanyBranch;
use App\Models\Setting\CompanyPolicy;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CompanyBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = CompanyBranch::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.setting.company_branch.list', compact('collection'));
        }
        return view('pages.office.setting.company_branch.main');
    }

    public function create()
    {
        $company = Company::all();
        return view('pages.office.setting.company_branch.input', [
            'data' => new CompanyBranch(),
            'company' => $company,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'company_id' => 'required',
            'instruction' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
            'postcode' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $company_branch = new CompanyBranch();
        $company_branch->name = $request->name;
        $company_branch->address = $request->address;
        $company_branch->company_id = $request->company_id;
        $company_branch->instruction = $request->instruction;
        $company_branch->province_id = $request->province_id;
        $company_branch->regency_id = $request->regency_id;
        $company_branch->district_id = $request->district_id;
        $company_branch->village_id = $request->village_id;
        $company_branch->postcode = $request->postcode;
        if($request->is_primary != null){
            $company_branch->is_primary = 1;
        }else{
            $company_branch->is_primary = 0;
        }
        $company_branch->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Branch Created',
        ]);
    }

    public function show(Request $request, $id)
    {
        $company_branch = CompanyBranch::findOrFail($id);
        if($request->ajax()){
            $collection = CompanyBank::where('name','LIKE','%'.$request->keyword.'%')->where('company_branch_id',$company_branch->id)->paginate(10);;
            return view('pages.office.setting.company_bank.list', compact('collection'));
        }
        return view('pages.office.setting.company_bank.main',['data' => $company_branch]);
    }

    public function showPolicy(Request $request, $id)
    {
        $company_branch = CompanyBranch::findOrFail($id);
        if($request->ajax()){
            $collection = CompanyPolicy::where('title','LIKE','%'.$request->keyword.'%')->where('company_branch_id',$company_branch->id)->paginate(10);;
            return view('pages.office.setting.company_policy.list', compact('collection'));
        }
        return view('pages.office.setting.company_policy.main',['data' => $company_branch]);
    }

    public function edit($id)
    {
        $company = Company::all();
        $company_branch = CompanyBranch::findOrFail($id);
        return view('pages.office.setting.company_branch.input', [
            'data' => $company_branch,
            'company' => $company,
        ]);
    }

    public function update(Request $request, $id)
    {
        $company_branch = CompanyBranch::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'company_id' => 'required',
            'instruction' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
            'postcode' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $company_branch->name = $request->name;
        $company_branch->address = $request->address;
        $company_branch->company_id = $request->company_id;
        $company_branch->instruction = $request->instruction;
        $company_branch->province_id = $request->province_id;
        $company_branch->regency_id = $request->regency_id;
        $company_branch->district_id = $request->district_id;
        $company_branch->village_id = $request->village_id;
        $company_branch->postcode = $request->postcode;
        if($request->is_primary != null){
            $company_branch->is_primary = 1;
        }else{
            $company_branch->is_primary = 0;
        }
        $company_branch->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Branch Updated',
        ]);
    }

    public function destroy($id)
    {
        $company_branch = CompanyBranch::findOrFail($id);
        $company_branch->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Branch Deleted',
        ]);
    }
}
