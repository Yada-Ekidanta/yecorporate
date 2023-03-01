<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Task;
use App\Models\PM\Team;
use App\Models\PM\Project;
use App\Models\PM\TodoList;
use App\Models\PM\Milestone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $type = $request->type;
            $collection = Project::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);
            return view('pages.office.pm.project.list', compact('collection', 'type'));
        }

        return view('pages.office.pm.project.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.office.pm.project.input', ['data' => new Project]);
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
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'estimated_hrs' => 'required',
            'budget' => 'required',
            'currency' => 'required',
            'status' => 'required',
            'desc' => ['required', function($attribute, $value, $fail) {
                if (str_word_count($value) > 60) {
                    $fail("Description is too long, use core description");
                }
            }],
            'image' => 'required|image',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $project = new Project;
        $project->name = $request->name;
        $project->start_date = $request->start_date;

        if ($request->end_date >= $request->start_date) {
            $project->end_date = $request->end_date;
        } else {
            return response()->json([
                'alert' => 'failed',
                'message' => 'End Date cannot be less than Start Date',
            ]);
        }

        if ($request->file('image')) {
            if($project->image != null){
                Storage::delete($project->image);
            }
            $file = $request->file('image')->store('project-img');
            $project->image = $file;
        } else {
            $project->image = $project->image;
        }

        $project->estimated_hrs = $request->estimated_hrs;
        $project->budget = $request->budget;
        $project->currency = $request->currency;
        $project->status = $request->status;
        $project->desc = $request->desc;
        $project->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Project Created',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $count = Task::where('project_id', $project->id)->count();
        $milestones = Milestone::where('project_id', $project->id)->paginate(3);
        $tasks = Task::where('project_id', $project->id)->paginate(3);
        $teams = Team::where('project_id', $project->id)->paginate(3);
        $todo_list = TodoList::join('tasks', 'todo_list.task_id', '=', 'tasks.id')->where('tasks.project_id', $project->id)->count();
        $todo_list_done = TodoList::where('status', 4)->count();
        if ($todo_list == 0) {
            $todo_list_percentage = 0;
        } else {
            $todo_list_percentage = round(($todo_list_done / $todo_list) * 100);
        }

        return view('pages.office.pm.project.detail',
        [
            'data' =>  $project,
            'count' => $count,
            'milestones' => $milestones,
            'tasks' => $tasks,
            'teams' => $teams,
            'todo_list_percentage' => $todo_list_percentage,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('pages.office.pm.project.input', ['data' =>  $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'estimated_hrs' => 'required',
            'budget' => 'required',
            'currency' => 'required',
            'status' => 'required',
            'desc' => ['required', function($attribute, $value, $fail) {
                if (str_word_count($value) > 60) {
                    $fail("Description is too long, use core description");
                }
            }],
            'image' => 'image',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $project->name = $request->name;
        $project->start_date = $request->start_date;

        if ($request->end_date >= $request->start_date) {
            $project->end_date = $request->end_date;
        } else {
            return response()->json([
                'alert' => 'failed',
                'message' => 'End Date cannot be less than Start Date',
            ]);
        }

        if ($request->file('image')) {
            if($project->image != null){
                Storage::delete($project->image);
            }
            $file = $request->file('image')->store('project-img');
            $project->image = $file;
        } else {
            $project->image = $project->image;
        }

        $project->estimated_hrs = $request->estimated_hrs;
        $project->budget = $request->budget;
        $project->currency = $request->currency;
        $project->status = $request->status;
        $project->desc = $request->desc;
        $project->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Project Updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if($project->image){
            Storage::delete($project->image);
        }

        $project->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Project Deleted',
        ]);
    }
}
