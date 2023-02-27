<?php

namespace App\Http\Controllers\Office\Hrm;

use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\Ticket;
use App\Models\HRM\TicketReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        $countOpenTicket  = Ticket::where('st', '=', 'open')->count();
        $countonHoldTicket  = Ticket::where('st', '=', 'onhold')->count();
        $countCloseTicket = Ticket::where('st', '=', 'close')->count();
        $countTicket      = $countOpenTicket + $countonHoldTicket + $countCloseTicket;

        $arr=[];
        array_push($arr,$countTicket,$countOpenTicket,$countonHoldTicket,$countCloseTicket);
        $ticket_arr=json_encode($arr);
        
        if($request->ajax()){
            $collection = Ticket::where('title','LIKE','%'.$request->keyword.'%')->orderBy('updated_at', 'DESC')->paginate(10);;
            return view('pages.office.hrm.ticket.list', compact('collection'));
        }
        return view('pages.office.hrm.ticket.main', compact('countOpenTicket','countonHoldTicket','countCloseTicket','countTicket','ticket_arr'));
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

    public function changereply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'desc' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $ticket = Ticket::find($request->ticket_id);
        $ticket_reply = new TicketReply();
        $ticket_reply->ticket_id = $request->ticket_id;
        $ticket_reply->employee_id = $ticket->employee_id;
        $ticket_reply->desc = $request->desc;
        $ticket_reply->created_by = Auth::guard('employees')->user()->id;
        $ticket_reply->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Ticket Reply successfully Send.',
        ]);
    }

    public function show(Ticket $ticket)
    {
        //
    }

    public function edit(Ticket $ticket)
    {
        $employee = Employee::all();
        return view('pages.office.hrm.ticket.input', [
            'data' => $ticket,
            'employee' => $employee,
        ]);
    }
    public function reply($id)
    {
        $ticket = Ticket::findOrFail($id);
        $employee = Employee::all();
        $ticket_reply = TicketReply::all();
        return view('pages.office.hrm.ticket.reply', [
            'data' => $ticket,
            'ticketreply' => $ticket_reply,
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
        $rand = date('hms');
        $ticket->employee_id = $request->employee_id;
        $ticket->title = $request->title;
        $ticket->code = $rand;
        $ticket->end_date = $request->end_date;
        $ticket->priority = $request->priority;
        $ticket->ticket_created =  Auth::guard('employees')->user()->id;
        $ticket->created_by = Auth::guard('employees')->user()->id;
        $ticket->st = $request->st;
        $ticket->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Ticket Updated',
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
