<?php

namespace App\Http\Controllers\office\PM;

use App\Models\PM\Milestone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PM\Project;
use Illuminate\Support\Facades\Validator;

class MilestoneController extends Controller
{
    public function index (Request $request, Project $project) {
        if($request->ajax()){
            $milestones = Milestone::where('project_id', $project->id)->paginate(3);
            return view('pages.office.pm.milestone.list', compact('milestones', 'project'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('pages.office.pm.milestone.input', ['data' => new Milestone, 'project' => $project]);

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
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $milestone = new Milestone;
        $milestone->title = $request->title;
        $milestone->status = $request->status;
        $milestone->desc = $request->desc;
        $milestone->project_id = $request->project_id;
        $milestone->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Milestone Created',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Milestone $milestone, Project $project)
    {
        $project = Project::first();
        return view('pages.office.pm.milestone.detail', ['data' => $milestone, 'project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Milestone $milestone, Project $project)
    {
        $project = Project::first();
        return view('pages.office.pm.milestone.input', ['data' => $milestone, 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Milestone $milestone)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $milestone->title = $request->title;
        $milestone->status = $request->status;
        $milestone->desc = $request->desc;
        $milestone->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Milestone Updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Milestone $milestone)
    {
        $milestone->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Milestone Deleted',
        ], 200);
    }
}
