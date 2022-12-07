<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\OpportunityStage;
use Illuminate\Support\Facades\Validator;

class OpportunityStageController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = OpportunityStage::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.opportunity_stage.list', compact('collection'));
        }
        return view('pages.office.master.opportunity_stage.main');
    }
    public function create()
    {
        return view('pages.office.master.opportunity_stage.input', ['data' => new OpportunityStage]);
    }
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
        $opportunityStage = new OpportunityStage;
        $opportunityStage->name = $request->name;
        $opportunityStage->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity Stage has been saved',
        ], 200);
    }
    public function show(OpportunityStage $opportunityStage)
    {
        //
    }
    public function edit(OpportunityStage $opportunityStage)
    {
        return view('pages.office.master.opportunity_stage.input', ['data' => $opportunityStage]);
    }
    public function update(Request $request, OpportunityStage $opportunityStage)
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
        $opportunityStage->name = $request->name;
        $opportunityStage->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity Stage has been updated',
        ], 200);
    }
    public function destroy(OpportunityStage $opportunityStage)
    {
        $opportunityStage->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Opportunity Stage has been deleted',
        ], 200);
    }
}
