<?php

namespace App\Http\Controllers\Office\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\CompanyPolicy;
use App\Models\Setting\CompanyBank;
use Illuminate\Http\Request;
use App\Models\Setting\CompanyBranch;
use Illuminate\Support\Facades\Validator;

class CompanyPolicyController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = CompanyPolicy::where('title','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.setting.company_policy.list', compact('collection'));
        }
        return view('pages.office.setting.company_policy.main');
    }

    public function create()
    {
        $company_branch = CompanyBranch::all();
        return view('pages.office.setting.company_policy.input', [
            'data' => new CompanyBranch(),
            'company_branch' => $company_branch,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_branch_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'attachment' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $company_policy = new CompanyPolicy();
        $company_policy->company_branch_id = $request->company_branch_id;
        $company_policy->title = $request->title;
        $company_policy->desc = $request->desc;
        $company_policy->attachment = $request->attachment;
        $company_policy->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Policy Created',
        ]);
    }

    public function show(Request $request, $id)
    {
        $company_policy = CompanyPolicy::findOrFail($id);
        if($request->ajax()){
            $collection = CompanyBank::where('name','LIKE','%'.$request->keyword.'%')->where('company_branch_id',$company_policy->id)->paginate(10);;
            return view('pages.office.setting.company_bank.list', compact('collection'));
        }
        return view('pages.office.setting.company_bank.main',['data' => $company_policy]);
    }

    public function edit($id)
    {
        $company_policy = CompanyPolicy::findOrFail($id);
        $company_branch = CompanyPolicy::all();
        return view('pages.office.setting.company_policy.input', [
            'data' => $company_policy,
            'company_branch' => $company_branch,
        ]);
    }

    public function update(Request $request, $id)
    {
        $company_policy = CompanyPolicy::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'company_branch_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'attachment' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $company_policy->company_branch_id = $request->company_branch_id;
        $company_policy->title = $request->title;
        $company_policy->desc = $request->desc;
        $company_policy->attachment = $request->attachment;
        $company_policy->save();
        $company_policy->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Policy Updated',
        ]);
    }

    public function destroy($id)
    {
        $company_policy = CompanyPolicy::findOrFail($id);
        $company_policy->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Policy Deleted',
        ]);
    }
}
