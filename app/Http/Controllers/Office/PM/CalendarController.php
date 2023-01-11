<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Calendar;
use App\Http\Controllers\Controller;
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

        return view('pages.office.pm.calendar.main');

    }
}
