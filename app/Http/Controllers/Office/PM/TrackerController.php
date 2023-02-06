<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Task;
use App\Models\PM\Project;
use App\Models\PM\Tracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = Tracker::where('is_active', 1)->first();
        $status = $status ? $status : null;
        $time = Tracker::where('created_by', Auth::guard('employees')->user()->id)->sum(DB::raw("TIME_TO_SEC(total_time)"));
        $timeConvert = gmdate("H:i:s", $time);
        // dd($timeConvert);
        $project = Project::orderBy('name', 'asc')->get();
        $task = Task::get();
        if ($request->ajax()) {
            $collection = Tracker::where('created_by', Auth::guard('employees')->user()->id)->where('name','LIKE','%'.$request->keyword.'%')->paginate(5);
            return view('pages.office.pm.tracker.list', compact('collection'));
        }

        return view('pages.office.pm.tracker.main', compact('project', 'task', 'status', 'timeConvert'));
    }

    public function fetchTask($project_id = null)
    {
        $task = Task::where('project_id', $project_id)->get();
        return response()->json([
            'status' => 1,
            'task' => $task,
        ]);
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
            'project_id' => 'required',
            'task_id' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $tracker = new Tracker;
        $tracker->name = $request->name;
        $tracker->project_id = $request->project_id;
        $tracker->task_id = $request->task_id;
        $tracker->start_time = $request->start_time;
        $tracker->end_time = $request->end_time;
        $tracker->date = $request->date;
        $tracker->total_time = $request->total_time;
        $tracker->is_active = $request->is_active;
        $tracker->created_by = Auth::guard('employees')->user()->id;
        $tracker->save();

        // return response()->json([
        //     'alert' => 'success',
        //     'message' => 'Tracker created successfully',
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracker $tracker)
    {
        $tracker->end_time = $request->end_time;
        $tracker->total_time = $request->total_time;
        $tracker->is_active = $request->is_active;
        $tracker->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracker $tracker)
    {
        $tracker->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Tracker deleted successfully',
        ]);
    }
}
