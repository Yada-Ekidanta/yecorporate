<?php

namespace App\Http\Controllers\Office\PM;

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
        if ($request->ajax()) {
            return view('pages.office.pm.calendar.list');
        }

        return view('pages.office.pm.calendar.main');
    }
}
