<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Leads;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use App\Models\CRM\ClientContact;
use App\Http\Controllers\Controller;
use App\Models\CRM\ClientMeeting;
use Illuminate\Support\Facades\Validator;
use App\Models\CRM\ClientMeetingAttendees;

class ClientMeetingAttendeesController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = ClientMeetingAttendees::where('id','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.client_meeting_attendees.list', compact('collection'));
        }
        return view('pages.office.crm.client_meeting_attendees.main');
    }

    public function create()
    {
        $meeting = ClientMeeting::orderBy('name', 'asc')->get();
        $employee = Employee::orderBy('name', 'asc')->get();
        $contact = ClientContact::orderBy('name', 'asc')->get();
        $lead = Leads::orderBy('title', 'asc')->get();
        return view('pages.office.crm.client_meeting_attendees.input', ['data' => new ClientMeetingAttendees(),'meeting' => $meeting,'employee' => $employee, 'contact' => $contact, 'lead' => $lead]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'meeting_id' => 'required',
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
        $meeting_attendee = new ClientMeetingAttendees();
        $meeting_attendee->meeting_id = $request->meeting_id;
        $meeting_attendee->attendees_employee = $request->attendees_employee;
        $meeting_attendee->attendees_contact = $request->attendees_contact;
        $meeting_attendee->attendees_lead = $request->attendees_lead;
        $meeting_attendee->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Meeting Attendees Created',
        ]);
    }

    public function show(ClientMeetingAttendees $meeting_attendee)
    {
        //
    }

    public function edit(ClientMeetingAttendees $meeting_attendee)
    {
        $meeting = ClientMeeting::orderBy('name', 'asc')->get();
        $employee = Employee::orderBy('name', 'asc')->get();
        $contact = ClientContact::orderBy('name', 'asc')->get();
        $lead = Leads::orderBy('title', 'asc')->get();
        return view('pages.office.crm.client_meeting_attendees.input', ['data' => $meeting_attendee,'meeting' => $meeting,'employee' => $employee, 'contact' => $contact, 'lead' => $lead]);
    }

    public function update(Request $request, ClientMeetingAttendees $meeting_attendee)
    {
        $validator = Validator::make($request->all(), [
            'meeting_id' => 'required',
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
        $meeting_attendee->meeting_id = $request->meeting_id;
        $meeting_attendee->attendees_employee = $request->attendees_employee;
        $meeting_attendee->attendees_contact = $request->attendees_contact;
        $meeting_attendee->attendees_lead = $request->attendees_lead;
        $meeting_attendee->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Meeting Attendees Updated',
        ]);
    }

    public function destroy(ClientMeetingAttendees $meeting_attendee)
    {
        $meeting_attendee->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Meeting Attendees Deleted',
        ]);
    }
}
