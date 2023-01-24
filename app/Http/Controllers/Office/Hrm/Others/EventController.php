<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Models\HRM\Others\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            return view('pages.office.hrm.event.list');
        }
        return view('pages.office.hrm.event.main');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Event $event)
    {
        //
    }

    public function edit(Event $event)
    {
        //
    }

    public function update(Request $request, Event $event)
    {
        //
    }

    public function destroy(Event $event)
    {
        //
    }
}
