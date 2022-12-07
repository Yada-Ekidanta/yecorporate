<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\TaskStage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TaskStageController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = TaskStage::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.task_stage.list', compact('collection'));
        }
        return view('pages.office.master.task_stage.main');
    }
    public function create()
    {
        return view('pages.office.master.task_stage.input', ['data' => new TaskStage]);
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
        $taskStage = new TaskStage;
        $taskStage->name = $request->name;
        $taskStage->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Task Stage has been saved',
        ], 200);
    }
    public function show(TaskStage $taskStage)
    {
        //
    }
    public function edit(TaskStage $taskStage)
    {
        return view('pages.office.master.task_stage.input', ['data' => $taskStage]);
    }
    public function update(Request $request, TaskStage $taskStage)
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
        $taskStage->name = $request->name;
        $taskStage->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Task Stage has been updated',
        ], 200);
    }
    public function destroy(TaskStage $taskStage)
    {
        $taskStage->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Task Stage has been deleted',
        ], 200);
    }
}
