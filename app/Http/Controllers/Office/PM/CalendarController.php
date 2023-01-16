<?php

namespace App\Http\Controllers\Office\PM;

use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('pages.office.pm.calendar.main');
    }
}
