<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Leads;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use App\Models\CRM\ClientContact;
use App\Models\CRM\ClientMeeting;
use App\Http\Controllers\Controller;
use App\Models\CRM\ClientMeetingAttendees;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientMeetingController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = ClientMeeting::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.client_meeting.list', compact('collection'));
        }
        return view('pages.office.crm.client_meeting.main');
    }

    public function create()
    {
        $employee = Employee::orderBy('name', 'asc')->get();
        $lead = Leads::orderBy('title', 'asc')->get();
        $client_contact = ClientContact::orderBy('name', 'asc')->get();
        return view('pages.office.crm.client_meeting.input', ['data' => new ClientMeeting(), 'meeting_attendee' => new ClientMeetingAttendees(),'employee' => $employee, 'client_contact' => $client_contact, 'lead' => $lead]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'st' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'parent' => 'required',
            'attendees_employee' => 'required',
            'attendees_contact' => 'required',
            'attendees_lead' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        date_default_timezone_set('Asia/Jakarta');
        $employee_id = Auth::guard('employees')->user()->id;
        $client_meeting = new ClientMeeting();
        $client_meeting->employee_id = $employee_id;
        $client_meeting->name = $request->name;
        $client_meeting->st = $request->st;
        if ($request->start_at < date('Y-m-d')) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The Start At Value Cannot Be Less Than Today'
            ]);
        } elseif ($request->end_at < $request->start_at) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The End At Value Cannot Be Less Than The Start At Value'
            ]);
        }
        $client_meeting->start_at = $request->start_at;
        $client_meeting->end_at = $request->end_at;
        $client_meeting->parent = $request->parent;
        if ($request->parent === 'client') {
            $parent_id = 1;
        } elseif ($request->parent === 'lead') {
            $parent_id = 2;
        } elseif ($request->parent === 'contact') {
            $parent_id = 3;
        } elseif ($request->parent === 'opportunities') {
            $parent_id = 4;
        } elseif ($request->parent === 'case') {
            $parent_id = 5;
        }
        $client_meeting->parent_id = $parent_id;
        $client_meeting->desc = $request->desc;
        $client_meeting->save();

        $meeting_attendee = new ClientMeetingAttendees();
        $meeting_attendee->meeting_id = $client_meeting->id;
        $meeting_attendee->attendees_employee = $request->attendees_employee;
        $meeting_attendee->attendees_contact = $request->attendees_contact;
        $meeting_attendee->attendees_lead = $request->attendees_lead;
        $meeting_attendee->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Client Meeting Created',
        ]);
    }

    public function show(ClientMeeting $client_meeting)
    {
        //
    }

    public function edit(ClientMeeting $client_meeting)
    {
        $employee = Employee::orderBy('name', 'asc')->get();
        $lead = Leads::orderBy('title', 'asc')->get();
        $client_contact = ClientContact::orderBy('name', 'asc')->get();
        $meeting_attendee = ClientMeetingAttendees::where('meeting_id', $client_meeting->id)->first();
        return view('pages.office.crm.client_meeting.input', ['data' => $client_meeting, 'meeting_attendee' => $meeting_attendee,'employee' => $employee, 'client_contact' => $client_contact, 'lead' => $lead]);
    }

    public function update(Request $request, ClientMeeting $client_meeting)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'st' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'parent' => 'required',
            'attendees_employee' => 'required',
            'attendees_contact' => 'required',
            'attendees_lead' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        date_default_timezone_set('Asia/Jakarta');
        $employee_id = Auth::guard('employees')->user()->id;
        $client_meeting->employee_id = $employee_id;
        $client_meeting->name = $request->name;
        $client_meeting->st = $request->st;
        if ($request->end_at < $request->start_at) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The End At Value Cannot Be Less Than The Start At Value'
            ]);
        }
        $client_meeting->start_at = $request->start_at;
        $client_meeting->end_at = $request->end_at;
        $client_meeting->parent = $request->parent;
        if ($request->parent === 'client') {
            $parent_id = 1;
        } elseif ($request->parent === 'lead') {
            $parent_id = 2;
        } elseif ($request->parent === 'contact') {
            $parent_id = 3;
        } elseif ($request->parent === 'opportunities') {
            $parent_id = 4;
        } elseif ($request->parent === 'case') {
            $parent_id = 5;
        }
        $client_meeting->parent_id = $parent_id;
        $client_meeting->desc = $request->desc;
        $client_meeting->update();

        $meeting_attendee = ClientMeetingAttendees::where('meeting_id', $client_meeting->id)->first();
        $meeting_attendee->meeting_id = $client_meeting->id;
        $meeting_attendee->attendees_employee = $request->attendees_employee;
        $meeting_attendee->attendees_contact = $request->attendees_contact;
        $meeting_attendee->attendees_lead = $request->attendees_lead;
        $meeting_attendee->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Client Meeting Updated',
        ]);
    }

    public function destroy(ClientMeeting $client_meeting)
    {
        $client_meeting->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Client Meeting Deleted',
        ]);
    }
}
