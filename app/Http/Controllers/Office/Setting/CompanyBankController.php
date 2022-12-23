<?php

namespace App\Http\Controllers\Office\Setting;

use App\Http\Controllers\Controller;
use App\Models\Master\Bank;
use App\Models\Setting\CompanyBank;
use App\Models\Setting\CompanyBranch;
use App\Models\Setting\CompanyPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = CompanyBank::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.setting.company_bank.list', compact('collection'));
        }
        return view('pages.office.setting.company_bank.main');
    }

    public function create()
    {
        $company_bank = CompanyBranch::all();
        $bank = Bank::all();
        return view('pages.office.setting.company_bank.input', [
            'data' => new CompanyBank(),
            'company_branch' => $company_bank,
            'bank' => $bank,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_branch_id' => 'required',
            'name' => 'required',
            'bank_id' => 'required',
            // 'account_number ' => 'required',
            'opening_balance' => 'required',
            'branch_name' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $company_bank = new CompanyBank();
        $company_bank->company_branch_id = $request->company_branch_id;
        $company_bank->name = $request->name;
        $company_bank->bank_id = $request->bank_id;
        $company_bank->account_number = $request->account_number;
        $company_bank->opening_balance = $request->opening_balance;
        $company_bank->branch_name = $request->branch_name;
        if($request->is_primary != null){
            $company_bank->is_primary = 1;
        }else{
            $company_bank->is_primary = 0;
        }
        $company_bank->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Bank Created',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $company_bank = CompanyBank::findOrFail($id);
        if($request->ajax()){
            $collection = CompanyPolicy::where('title','LIKE','%'.$request->keyword.'%')->where('company_id',$company_bank->id)->paginate(10);;
            return view('pages.office.setting.company_branch.list', compact('collection'));
        }
        return view('pages.office.setting.company_branch.main',['data' => $company_bank]);
    }

    public function edit($id)
    {
        $company_bank = CompanyBank::findOrFail($id);
        $company_branch = CompanyBranch::all();
        $bank = Bank::all();
        return view('pages.office.setting.company_bank.input', [
            'data' => $company_bank,
            'company_branch' => $company_branch,
            'bank' => $bank,
        ]);
    }

    public function update(Request $request, $id)
    {
        $company_bank = CompanyBranch::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'company_branch_id' => 'required',
            'name' => 'required',
            'bank_id' => 'required',
            'account_number ' => 'unique:company_bank_accounts',
            'opening_balance' => 'required',
            'branch_name' => 'required',
            'is_primary' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $company_bank->company_branch_id = $request->company_branch_id;
        $company_bank->name = $request->name;
        $company_bank->bank_id = $request->bank_id;
        $company_bank->account_number = $request->account_number;
        $company_bank->opening_balance = $request->opening_balance;
        $company_bank->branch_name = $request->branch_name;
        if($request->is_primary != null){
            $company_bank->is_primary = 1;
        }else{
            $company_bank->is_primary = 0;
        }
        $company_bank->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Bank Updated',
        ]);
    }

    public function destroy($id)
    {
        $company_bank = CompanyBank::findOrFail($id);
        $company_bank->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Bank Deleted',
        ]);
    }
}
