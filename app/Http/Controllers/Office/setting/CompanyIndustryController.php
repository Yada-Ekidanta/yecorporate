<?php

namespace App\Http\Controllers\Office\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting\CompanyIndustry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CompanyIndustryController extends Controller
{
    public function __construct()
    {
        // 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = CompanyIndustry::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.setting.company_industry.list', compact('collection'));
        }
        return view('pages.office.setting.company_industry.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.office.setting.company_industry.input', ['data' => new CompanyIndustry()]);
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
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $companyIndustry = new CompanyIndustry();
        $companyIndustry->name = $request->name;
        $companyIndustry->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Type Created',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyIndustry  $companyIndustry
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyIndustry  $companyIndustry
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyIndustry $companyIndustry)
    {
        return view('pages.office.setting.company_industry.input', ['data' => $companyIndustry]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyIndustry  $companyIndustry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyIndustry $companyIndustry)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $companyIndustry->name = $request->name;
        $companyIndustry->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Type Updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyIndustry  $companyIndustry
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyIndustry $companyIndustry)
    {
        $companyIndustry->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Type Deleted',
        ]);
    }
}
