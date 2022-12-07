<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\LeadSource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LeadSourceController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = LeadSource::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.lead_source.list', compact('collection'));
        }
        return view('pages.office.master.lead_source.main');
    }
    public function create()
    {
        return view('pages.office.master.lead_source.input', ['data' => new LeadSource]);
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
        $leadSource = new LeadSource;
        $leadSource->name = $request->name;
        $leadSource->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Lead Source Created',
        ], 200);
    }
    public function show(LeadSource $leadSource)
    {
        //
    }
    public function edit(LeadSource $leadSource)
    {
        return view('pages.office.master.lead_source.input', ['data' => $leadSource]);
    }
    public function update(Request $request, LeadSource $leadSource)
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
        $leadSource->name = $request->name;
        $leadSource->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Lead Source Updated',
        ], 200);
    }
    public function destroy(LeadSource $leadSource)
    {
        $leadSource->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Lead Source Deleted',
        ], 200);
    }
}
