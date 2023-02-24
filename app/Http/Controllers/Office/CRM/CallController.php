<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Call;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CRM\CallAttendees;
use App\Models\CRM\ClientContact;
use App\Models\CRM\Leads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CallController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = Call::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.call.list', compact('collection'));
        }
        return view('pages.office.crm.call.main');
    }

    public function create()
    {
        $employee = Employee::orderBy('name', 'asc')->get();
        $contact = ClientContact::orderBy('name', 'asc')->get();
        $lead = Leads::orderBy('title', 'asc')->get();
        return view('pages.office.crm.call.input', ['data' => new Call(), 'call_attendee' => new CallAttendees(), 'employee' => $employee, 'contact' => $contact, 'lead' => $lead]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'st' => 'required',
            'direction' => 'required',
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
        $parent_id = 0;
        $call = new Call();
        $call->employee_id = $employee_id;
        $call->name = $request->name;
        $call->st = $request->st;
        $call->direction = $request->direction;
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
        $call->start_at = $request->start_at;
        $call->end_at = $request->end_at;
        $call->parent = $request->parent;
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
        $call->parent_id = $parent_id;
        $call->desc = $request->desc;
        $call->save();

        $call_attendee = new CallAttendees();
        $call_attendee->call_id = $call->id;
        $call_attendee->attendees_employee = $request->attendees_employee;
        $call_attendee->attendees_contact = $request->attendees_contact;
        $call_attendee->attendees_lead = $request->attendees_lead;
        $call_attendee->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Call Created',
        ]);
    }

    public function show(Call $call)
    {
        //
    }

    public function edit(Call $call)
    {
        $employee = Employee::orderBy('name', 'asc')->get();
        $contact = ClientContact::orderBy('name', 'asc')->get();
        $lead = Leads::orderBy('title', 'asc')->get();
        $call_attendee = CallAttendees::where('call_id', $call->id)->first();
        return view('pages.office.crm.call.input', ['data' => $call, 'call_attendee' => $call_attendee, 'employee' => $employee, 'contact' => $contact, 'lead' => $lead]);
    }

    public function update(Request $request, Call $call)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'st' => 'required',
            'direction' => 'required',
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
        $parent_id = 0;
        $call->employee_id = $employee_id;
        $call->name = $request->name;
        $call->st = $request->st;
        $call->direction = $request->direction;
        if ($request->end_at < $request->start_at) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The End At Value Cannot Be Less Than The Start At Value'
            ]);
        }
        $call->start_at = $request->start_at;
        $call->end_at = $request->end_at;
        $call->parent = $request->parent;
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
        $call->parent_id = $parent_id;
        $call->desc = $request->desc;
        $call->update();

        $call_attendee = CallAttendees::where('call_id', $call->id)->first();
        $call_attendee->call_id = $call->id;
        $call_attendee->attendees_employee = $request->attendees_employee;
        $call_attendee->attendees_contact = $request->attendees_contact;
        $call_attendee->attendees_lead = $request->attendees_lead;
        $call_attendee->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Call Updated',
        ]);
    }

    public function destroy(Call $call)
    {
        $call->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Call Deleted',
        ]);
    }
}
