<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Task;
use App\Models\PM\Project;
use App\Models\PM\Tracker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Tracker::all();
        $project = Project::orderBy('name', 'asc')->get();
        $task = Task::get();
        $status = Tracker::where('is_active', 1)->first();
        $status = $status ? $status : null;
        return view('pages.office.pm.tracker.main', compact('collection', 'project', 'task', 'status'));
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // return view('pages.office.pm.tracker.main');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        // ]);

        // if ($validator->fails()){
        //     return response()->json([
        //         'alert' => 'error',
        //         'message' => $validator->errors()->first(),
        //     ], 200);
        // }

        $tracker = new Tracker;
        $tracker->name = $request->name;
        $tracker->project_id = $request->project_id;
        $tracker->task_id = $request->task_id;
        $tracker->start_time = $request->start_time;
        $tracker->end_time = $request->end_time;
        $tracker->total_time = $request->total_time;
        $tracker->is_active = $request->is_active;
        $tracker->created_by = Auth::guard('employees')->user()->name;
        $tracker->save();
        // dd($tracker);

        // return response()->json([
        //     'alert' => 'success',
        //     'message' => 'Tracker created successfully',
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
