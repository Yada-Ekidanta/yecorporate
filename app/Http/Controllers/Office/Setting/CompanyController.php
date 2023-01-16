<?php

namespace App\Http\Controllers\Office\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Company;
use App\Models\Setting\CompanyBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Company::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.setting.company.list', compact('collection'));
        }
        return view('pages.office.setting.company.main');
    }

    public function create()
    {
        return view('pages.office.setting.company.input', ['data' => new Company]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'logo' => 'required',
            'icon' => 'required',
            'web_url' => 'required',
            'instagram_url' => 'required',
            'linkedin_url' => 'required',
            'facebook_url' => 'required',
            'twitter_url' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $company = new Company;
        $company->name = $request->name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->email = $request->email;
        if (request()->file('logo')){
            $file = request()->file('logo')->store('files/setting/company/logo');
            $company->logo = $file;
        } else {
            $company->logo = $company->logo;
        }
        if (request()->file('icon')){
            $file = request()->file('icon')->store('files/setting/company/icon');
            $company->icon = $file;
        } else {
            $company->icon = $company->icon;
        }
        $company->web_url = $request->web_url;
        $company->instagram_url = $request->instagram_url;
        $company->linkedin_url = $request->linkedin_url;
        $company->facebook_url = $request->facebook_url;
        $company->twitter_url = $request->twitter_url;
        $company->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Created',
        ]);
    }

    public function show(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        if($request->ajax()){
            $collection = CompanyBranch::where('name','LIKE','%'.$request->keyword.'%')->where('company_id',$company->id)->paginate(10);;
            return view('pages.office.setting.company_branch.list', compact('collection'));
        }
        return view('pages.office.setting.company_branch.main',['data' => $company]);
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('pages.office.setting.company.input', ['data' => $company]);
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'logo' => 'required',
            'icon' => 'required',
            'web_url' => 'required',
            'instagram_url' => 'required',
            'linkedin_url' => 'required',
            'facebook_url' => 'required',
            'twitter_url' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $company->name = $request->name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->email = $request->email;
        if (request()->file('logo')){
            if($company->logo != null){
            Storage::delete($company->logo);
            }
            $file = request()->file('logo')->store('files/setting/company/logo');
            $company->logo = $file;
        } else {
            $company->logo = $company->logo;
        }
        if (request()->file('icon')){
            if($company->icon != null){
            Storage::delete($company->icon);
            }
            $file = request()->file('icon')->store('files/setting/company/icon');
            $company->icon = $file;
        } else {
            $company->icon = $company->icon;
        }
        $company->web_url = $request->web_url;
        $company->instagram_url = $request->instagram_url;
        $company->linkedin_url = $request->linkedin_url;
        $company->facebook_url = $request->facebook_url;
        $company->twitter_url = $request->twitter_url;
        $company->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Updated',
        ]);
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        Storage::delete($company->icon);
        Storage::delete($company->logo);
        $company->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Company Deleted',
        ]);
    }
    
    public function displayImageLogo($id)
    {
        $company  = Company::findOrFail($id);
        try {
            return Storage::download($company->logo);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
    public function displayImageIcon($id)
    {
        $company  = Company::findOrFail($id);
        try {
            return Storage::download($company->icon);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
}
