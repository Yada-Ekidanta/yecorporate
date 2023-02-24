<?php

namespace App\Http\Controllers\Office\Hrm;

use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Ticket::where('title','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.hrm.ticket.list', compact('collection'));
        }
        return view('pages.office.hrm.ticket.main');
    }

    public function create()
    {
        $employee = Employee::all();
        return view('pages.office.hrm.ticket.input', [
            'data' => new Ticket(),
            'employee' => $employee,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'title' => 'required',
            'priority' => 'required',
            'end_date' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $ticket = new Ticket();
        $rand = date('hms');
        $ticket->employee_id = $request->employee_id;
        $ticket->title = $request->title;
        $ticket->code = $rand;
        $ticket->end_date = $request->end_date;
        $ticket->priority = $request->priority;
        $ticket->ticket_created =  Auth::guard('employees')->user()->id;
        $ticket->created_by = Auth::guard('employees')->user()->id;
        $ticket->st = 'open';
        $ticket->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Ticket Created',
        ]);
    }

    public function show(Ticket $ticket)
    {
        //
    }

    public function edit(Ticket $ticket)
    {
        $employee = Employee::all();
        return view('pages.office.hrm.ticket.reply', [
            'data' => $ticket,
            'employee' => $employee,
        ]);
    }

    public function update(Request $request, Ticket $ticket)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'title' => 'required',
            'priority' => 'required',
            'end_date' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $ticket = new Ticket();
        $rand = date('hms');
        $ticket->employee_id = $request->employee_id;
        $ticket->title = $request->title;
        $ticket->code = $rand;
        $ticket->end_date = $request->end_date;
        $ticket->priority = $request->priority;
        $ticket->ticket_created =  Auth::guard('employees')->user()->id;
        $ticket->created_by = Auth::guard('employees')->user()->id;
        $ticket->st = 'open';
        $ticket->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Ticket Created',
        ]);
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Ticket Deleted',
        ]);
    }
}
