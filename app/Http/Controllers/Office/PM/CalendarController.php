<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Calendar;
use App\Http\Controllers\Controller;
use App\Models\PM\Milestone;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $calendar = Calendar::all();

            $data = [];

            foreach ($calendar as $item) {
                $getData = [
                    'id' => $item->id,
                    'title' => $item->title,
                    'start' => $item->start,
                    'end' => $item->end,
                    'allDay' => $item->all_day,
                ];

                array_push($data, $getData);
            }

            return view('pages.office.pm.calendar.list', compact('data'));
        }

        return view('pages.office.pm.calendar.main');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $calendar = new Calendar();
        $calendar->title = $request->input('title');
        $calendar->start = $request->input('start');
        $calendar->end = $request->input('end');
        $calendar->all_day = $request->input('allDay');
        $calendar->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Event Created',
        ], 200);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function destroy($id)
    {
        $calendar = Calendar::find($id);
        $calendar->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Event Deleted',
        ], 200);
    }
}
