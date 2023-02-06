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
        $TimeSheet = Tracker::select(DB::raw("date, SUM(TIME_TO_SEC(total_time)) as total_time"))->groupBy('date')->get();

        $data = [];

        foreach ($TimeSheet as $item) {
            $date = $item->date;
            $time = $item->total_time = gmdate("H:i:s", $item->total_time);

            $getData = [
                'title' => $time,
                'start' => $date,
            ];

            array_push($data, $getData);
        }

        return view('pages.office.pm.timesheets.main', ['data' => $data]);
    }
}
