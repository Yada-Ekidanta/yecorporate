<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Call;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use App\Models\CRM\CallAttendees;
use App\Http\Controllers\Controller;
use App\Models\CRM\ClientContact;
use App\Models\CRM\Leads;
use Illuminate\Support\Facades\Validator;

class CallAttendeesController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = CallAttendees::where('id','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.call_attendees.list', compact('collection'));
        }
        return view('pages.office.crm.call_attendees.main');
    }

    public function create()
    {
        $call = Call::orderBy('name', 'asc')->get();
        $employee = Employee::orderBy('name', 'asc')->get();
        $contact = ClientContact::orderBy('name', 'asc')->get();
        $lead = Leads::orderBy('title', 'asc')->get();
        return view('pages.office.crm.call_attendees.input', ['data' => new CallAttendees(), 'call' => $call, 'employee' => $employee, 'contact' => $contact, 'lead' => $lead]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'call_id' => 'required',
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
        $call_attendee = new CallAttendees();
        $call_attendee->call_id = $request->call_id;
        $call_attendee->attendees_employee = $request->attendees_employee;
        $call_attendee->attendees_contact = $request->attendees_contact;
        $call_attendee->attendees_lead = $request->attendees_lead;
        $call_attendee->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Call Attendees Created',
        ]);
    }

    public function show(CallAttendees $call_attendee)
    {
        //
    }

    public function edit(CallAttendees $call_attendee)
    {
        $call = Call::orderBy('name', 'asc')->get();
        $employee = Employee::orderBy('name', 'asc')->get();
        $contact = ClientContact::orderBy('name', 'asc')->get();
        $lead = Leads::orderBy('title', 'asc')->get();
        return view('pages.office.crm.call_attendees.input', ['data' => $call_attendee, 'call' => $call, 'employee' => $employee, 'contact' => $contact, 'lead' => $lead]);
    }

    public function update(Request $request, CallAttendees $call_attendee)
    {
        $validator = Validator::make($request->all(), [
            'call_id' => 'required',
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
        $call_attendee->call_id = $request->call_id;
        $call_attendee->attendees_employee = $request->attendees_employee;
        $call_attendee->attendees_contact = $request->attendees_contact;
        $call_attendee->attendees_lead = $request->attendees_lead;
        $call_attendee->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Call Attendees Updated',
        ]);
    }

    public function destroy(CallAttendees $call_attendee)
    {
        $call_attendee->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Call Attendees Deleted',
        ]);
    }
}
