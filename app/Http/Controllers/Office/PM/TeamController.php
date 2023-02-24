<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Team;
use App\Models\PM\Project;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function index (Request $request, Project $project) {
        if($request->ajax()){
            $teams = Team::where('project_id', $project->id)->paginate(3);
            return view('pages.office.pm.team.list', compact('teams', 'project'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        $employee = Employee::get();
        return view('pages.office.pm.team.input', ['data' => new Team, 'employee' => $employee, 'project' => $project]);
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
            'employee_id' => ['required', Rule::unique('teams')->where(function ($query) use ($request) {
                return $query->where('project_id', $request->project_id);
            })],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'danger',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $team = new Team;
        $team->employee_id = $request->employee_id;
        $team->project_id = $request->project_id;
        $team->created_by = Auth::guard('employees')->user()->id;
        $team->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Team Created',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('pages.office.pm.team.show', ['data' => $team]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $employee = Employee::get();
        $project = Project::first();
        return view('pages.office.pm.team.input', ['data' => $team, 'employee' => $employee, 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => ['required', Rule::unique('teams')->where(function ($query) use ($request) {
                return $query->where('project_id', $request->query('id'));
            })],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'danger',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $team->employee_id = $request->employee_id;
        $team->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Team Updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Team Deleted',
        ], 200);
    }
}
