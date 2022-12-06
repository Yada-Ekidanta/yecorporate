<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\CampaignType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CampaignTypeController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = CampaignType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.campaign_type.list', compact('collection'));
        }
        return view('pages.office.master.campaign_type.main');
    }
    public function create()
    {
        return view('pages.office.master.campaign_type.input', ['data' => new CampaignType]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $campaignType = new CampaignType;
        $campaignType->name = $request->name;
        $campaignType->created_by = Auth::guard('employees')->user()->id;
        $campaignType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Campaign Type Created',
        ]);
    }
    public function show(CampaignType $campaignType)
    {
        //
    }
    public function edit(CampaignType $campaignType)
    {
        return view('pages.office.master.campaign_type.input', ['data' => $campaignType]);
    }
    public function update(Request $request, CampaignType $campaignType)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $campaignType->name = $request->name;
        $campaignType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Campaign Type Updated',
        ]);
    }
    public function destroy(CampaignType $campaignType)
    {
        $campaignType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Campaign Type Deleted',
        ]);
    }
}
