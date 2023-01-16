<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Task;
use App\Models\PM\Team;
use App\Models\PM\Project;
use App\Models\PM\Milestone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PM\TodoList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index (Request $request, Project $project) {
        if($request->ajax()){
            $tasks = Task::where('project_id', $project->id)->paginate(3);
            return view('pages.office.pm.task.list', compact('tasks', 'project'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        $team = Team::where('project_id', $project->id)->get();
        $milestone = Milestone::where('project_id', $project->id)->get();
        return view('pages.office.pm.task.input', ['data' => new Task, 'team' => $team, 'milestone' => $milestone, 'project' => $project]);
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
            'team_id' => 'required',
            'milestone_id' => 'required',
            'priority' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'desc' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $task = new Task;
        $task->team_id = $request->team_id;
        $task->name = $request->name;
        $task->milestone_id = $request->milestone_id;
        $task->priority = $request->priority;
        $task->start_at = $request->start_at;

        if ($request->end_at >= $request->start_at) {
            $task->end_at = $request->end_at;
        } else {
            return response()->json([
                'alert' => 'failed',
                'message' => 'End Date cannot be less than Start Date',
            ]);
        }

        $task->project_id = $request->project_id;
        $task->desc = $request->desc;
        $task->created_by = Auth::guard('employees')->user()->name;
        $task->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Task has been created',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Task $task)
    {
        $todoList = TodoList::where('task_id', $task->id)->get();
        return view('pages.office.pm.task.detail', ['data' => $task, 'todoList' => $todoList]);

        // if ($request->ajax()) {
        //     $todoList = TodoList::where('task_id', $task->id)->get();
        //     return view('pages.office.pm.task.detail', ['data' => $task, 'todoList' => $todoList]);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $team = Team::where('project_id', request()->query('id'))->get();
        $milestone = Milestone::where('project_id', request()->query('id'))->get();
        $project = Project::first();
        return view('pages.office.pm.task.input', ['data' => $task, 'team' => $team, 'milestone' => $milestone, 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'team_id' => 'required',
            'milestone_id' => 'required',
            'priority' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'desc' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $task->team_id = $request->team_id;
        $task->name = $request->name;
        $task->milestone_id = $request->milestone_id;
        $task->priority = $request->priority;
        $task->start_at = $request->start_at;

        if ($request->end_at >= $request->start_at) {
            $task->end_at = $request->end_at;
        } else {
            return response()->json([
                'alert' => 'failed',
                'message' => 'End Date cannot be less than Start Date',
            ]);
        }

        $task->desc = $request->desc;
        $task->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Task has been updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Task has been deleted',
        ], 200);
    }
}
