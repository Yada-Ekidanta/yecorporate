<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\JobStage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class JobStageController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = JobStage::where('title','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.job_stage.list', compact('collection'));
        }
        return view('pages.office.master.job_stage.main');
    }
    public function create()
    {
        return view('pages.office.master.job_stage.input', ['data' => new JobStage]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'order' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $jobStage = new JobStage;
        $jobStage->title = $request->title;
        $jobStage->order = $request->order;
        $jobStage->created_by = Auth::guard('employees')->user()->id;
        $jobStage->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Job Stage has been saved',
        ], 200);
    }
    public function show(JobStage $jobStage)
    {
        //
    }
    public function edit(JobStage $jobStage)
    {
        return view('pages.office.master.job_stage.input', ['data' => $jobStage]);
    }
    public function update(Request $request, JobStage $jobStage)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'order' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $jobStage->title = $request->title;
        $jobStage->order = $request->order;
        $jobStage->created_by = Auth::guard('employees')->user()->id;
        $jobStage->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Job Stage has been updated',
        ], 200);
    }
    public function destroy(JobStage $jobStage)
    {
        $jobStage->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Job Stage has been deleted',
        ], 200);
    }
}
