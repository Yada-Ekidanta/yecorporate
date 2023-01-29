<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Tracker;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TimesheetController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tracker::select('start_time', 'end_time', 'total_time')->get();
        // $start_time = Tracker::orderBy('start_time', 'desc')->select('start_time')->first();
        // $end_time = Tracker::orderBy('end_time', 'desc')->select('end_time')->first();
        $time = Tracker::where('start_time', date('Y-m-d'))->sum(DB::raw("TIME_TO_SEC(total_time)"));
        $timeConvert = gmdate("H:i:s", $time);
        // dd($time);
        return view('pages.office.pm.timesheets.main', ['data' => $data, 'timeConvert' => $timeConvert]);
    }
}
