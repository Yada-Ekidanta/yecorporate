<?php

namespace App\Http\Controllers\Office\PM;

use Carbon\Carbon;
use App\Models\Utility;
use App\Models\PM\Project;
use App\Models\PM\Tracker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TimesheetController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now                = Carbon::now();
        $data['start_date'] = $now->startOfWeek()->format('m-d-Y');
        $data['end_date']   = $now->endOfWeek()->format('m-d-Y');
        // if(Auth::user()->isClient())
        // {
        //     $projects = Project::where('client_id', Auth::user()->id)->where('status',1);
        // }
        // else
        // {
        //     $projects = Project::where('created_by', Auth::user()->id)->where('status',1);
        // }
        // $data['projects']  = $projects->count();
        // $projects = $projects->pluck('name', 'id');
        // $projects->prepend(__('Select Project'), '');
        // $data['tags']      = Tag::where('created_by', Auth::user()->id)->pluck('name', 'id');
        // $data['sprojects'] = $projects;

        return view('pages.office.pm.timesheets.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Utility::error_res(__('Permission denied.'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     if(Auth::user()->isClient())
    //     {
    //         return Utility::error_res(__('Permission denied.'));
    //     }
    //     $validatorArray = [
    //         'm_start_time' => 'required',
    //         'm_end_time' => 'required',
    //         'date' => 'required',
    //         'project' => 'required|integer',
    //         'task' => 'required',
    //     ];
    //     $attributes     = [
    //         'm_start_time' => 'Start Time',
    //         'm_end_time' => 'End Time',
    //     ];
    //     $validator      = Validator::make(
    //         $request->all(), $validatorArray, [], $attributes
    //     );
    //     if($validator->fails())
    //     {
    //         return Utility::error_res($validator->errors()->first());
    //     }
    //     if($request->has('tags') && !empty($request->input('tags')))
    //     {
    //         $tags = implode(",", $request->input('tags'));
    //     }
    //     else
    //     {
    //         $tags = '';
    //     }
    //     if($request->has('m_start_time'))
    //     {
    //         $start_time = $request->date . ' ' . $request->m_start_time;
    //     }
    //     if($request->has('m_end_time'))
    //     {
    //         $end_time = $request->date . ' ' . $request->m_end_time;
    //     }
    //     $total_time             = Utility::diffance_to_time($request->m_start_time, $request->m_end_time);
    //     $tracker['name']        = $request->has('name') ? $request->input('name') : '';
    //     $tracker['project_id']  = $request->has('project') ? $request->input('project') : '';
    //     $tracker['task_id']     = $request->has('task') ? $request->input('task') : '';
    //     $tracker['is_billable'] = $request->has('billable') ? '1' : '0';
    //     $tracker['tag_id']      = $tags;
    //     $tracker['start_time']  = $request->has('m_start_time') ? date("Y-m-d H:i:s", strtotime($start_time)) : date("Y-m-d H:i:s");
    //     $tracker['end_time']    = $request->has('m_end_time') ? date("Y-m-d H:i:s", strtotime($end_time)) : date("Y-m-d H:i:s");
    //     $tracker['total_time']  = $total_time;
    //     $tracker['is_active']   = 0;
    //     $tracker['created_by']  = Auth::user()->id;
    //     $tracker                = Tracker::create($tracker);

    //     return Utility::success_res(__('Track added successfully.'));
    // }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Utility::error_res(__('Permission denied.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Utility::error_res(__('Permission denied.'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return Utility::error_res(__('Permission denied.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Utility::error_res(__('Permission denied.'));
    }

    public function filterTimesheet(Request $request)
    {
        $now = Carbon::now();
        if($request->has('week'))
        {
            $week = $request->week;
        }
        else
        {
            $week = 0;
        }
        $now           = $now->addWeeks($week);
        $weekStartDate = $now->startOfWeek()->format('m-d-Y');
        $weekEndDate   = $now->endOfWeek()->format('m-d-Y');
        $to            = \Carbon\Carbon::createFromFormat('m-d-Y', $weekStartDate);
        $from          = \Carbon\Carbon::createFromFormat('m-d-Y', $weekEndDate);
        $diff_in_days  = $to->diffInDays($from);
        $start_date    = date('Y-m-d 00:00:00', strtotime($to));
        $end_date      = date('Y-m-d 23:59:59', strtotime($from));
        $previous_week = $to->timestamp;
        if(Auth::user()->isClient())
        {
            $proIds     = Auth::user()->clientProjectId();
            $data_table = Tracker::whereIn('project_id', $proIds)->where('is_active', 0)->whereBetween(
                'start_time', [
                                $start_date,
                                $end_date,
                            ]
            )->get()->groupBy('project_id');
        }elseif(Auth::user()->isCompany()){

            $users = User::where('created_by',Auth::user()->id)->where('type','user')->pluck('id');
            $data_table = Tracker::where('created_by', Auth::user()->id)->orWhereIn('created_by',$users)->where('is_active', 0)->whereBetween(
                'start_time', [
                                $start_date,
                                $end_date,
                            ]
            )->get()->groupBy('project_id');
        }
        else
        {
            $data_table = Tracker::where('created_by', Auth::user()->id)->where('is_active', 0)->whereBetween(
                'start_time', [
                                $start_date,
                                $end_date,
                            ]
            )->get()->groupBy('project_id');
        }
        $timesheet = [];
        $dates     = [];
        for($i = 0; $i <= $diff_in_days; $i++)
        {
            $date          = date('Y-m-d', $previous_week);
            $dates[]       = $date;
            $previous_week = strtotime(date('Y-m-d', $previous_week) . " +1 day");
        }
        $total_week = 0;
        foreach($data_table as $key => $value)
        {
            foreach($dates as $d)
            {
                if(Auth::user()->isClient())
                {
                    $proIds     = Auth::user()->clientProjectId();
                    $total_time = Tracker::whereIn('project_id', $proIds)->where('is_active', 0)->where('project_id', $key)->whereBetween(
                        'start_time', [
                                        $d . " 00:00:00",
                                        $d . " 23:59:59",
                                    ]
                    )->sum('total_time');
                }
                elseif(Auth::user()->isCompany()){

                    $users = User::where('created_by',Auth::user()->id)->where('type','user')->pluck('id');
                    $total_time = Tracker::where('is_active', 0)->where('project_id', $key)->whereBetween(
                        'start_time', [
                                        $d . " 00:00:00",
                                        $d . " 23:59:59",
                                    ]
                    )->sum('total_time');
                }
                else
                {

                    $total_time = Tracker::where('created_by', Auth::user()->id)->where('is_active', 0)->where('project_id', $key)->whereBetween(
                        'start_time', [
                                        $d . " 00:00:00",
                                        $d . " 23:59:59",
                                    ]
                    )->sum('total_time');
                }
                $pname               = Project::getProjectName($key);
                $times['total_time'] = $total_time;
                $times['date']       = $d;
                $timesheet[$key][]   = $times;
                $total_week          += $times['total_time'];
            }
        }
        $res               = Utility::success_res('success');
        $res['blade']      = view("timesheets.timesheet_table", compact('dates', 'timesheet'))->render();
        $res['start_date'] = $weekStartDate;
        $res['week']       = $week;
        $res['total_week'] = Utility::second_to_time($total_week);
        $res['preweek']    = $week - 1;
        $res['nextweek']   = $week + 1;
        $res['end_date']   = $weekEndDate;

        return response()->json($res);
    }

    public function timesheetEdit(Request $request)
    {
        $project     = Project::find($request->project_id);
        $d           = date('Y-m-d', strtotime($request->date));
        $timetracker = Tracker::where('is_active', 0)->where('project_id', $request->project_id)->whereBetween(
            'start_time', [
                            $d . " 00:00:00",
                            $d . " 23:59:59",
                        ]
        )->get()->groupBy('name');

        $task_count = count($timetracker->toArray());
        $time       = $request->time;
        $tag        = Tag::pluck('name', 'id');

        return view("timesheets.edit_timesheet", compact('d', 'time', 'project'));
    }

    public function timesheetUpdate(Request $request)
    {
        $oldtime    = strtotime($request->old_time);
        $time       = strtotime($request->time);
        $total_time = $time - $oldtime;
        if($total_time > 0)
        {
            $start_date             = $request->date . ' 09:00:00';
            $end_date               = date("Y-m-d H:i:s", strtotime('+' . $total_time . ' seconds', strtotime($start_date)));
            $tracker['name']        = $request->has('description') ? $request->input('description') : '';
            $tracker['project_id']  = $request->has('project_id') ? $request->input('project_id') : '';
            $tracker['is_billable'] = $request->has('is_billable') ? '1' : '0';
            $tracker['start_time']  = $request->has('date') ? $start_date : '';
            $tracker['end_time']    = $request->has('date') ? $end_date : '';
            $tracker['total_time']  = $total_time;
            $tracker['is_active']   = 0;
            if($request->has('tag_id'))
            {
                $tracker['tag_id'] = $request->input('tag_id');
            }
            $tracker['created_by'] = Auth::user()->id;
            $tracker               = Tracker::create($tracker);

            return Utility::success_res(__('Timesheet update.'));
        }
        else
        {
            if($total_time == 0)
            {
                return Utility::success_res(__('Timesheet update.'));
            }

            return Utility::error_res(__('Do not decrease original time.'));
        }

    }

    public function jsonTasks(Request $request)
    {
        $project = Project::find($request->project_id);

        if($project){
            $tasks   = $project->task->pluck('title', 'id');
        }else{
            $tasks   = [];
        }

        return response()->json($tasks, 200);
    }

    public function export()
    {

        $name = 'Timesheet_' . date('Y-m-d i:h:s');
        $data = Excel::download(new TimesheetExport(), $name . '.xlsx');

        return $data;
    }
}
