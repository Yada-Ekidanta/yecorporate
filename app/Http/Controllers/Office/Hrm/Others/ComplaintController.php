<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\Others\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ComplaintController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Complaint::paginate(10);;
            return view('pages.office.hrm.others.complaint.list', compact('collection'));
        }
        return view('pages.office.hrm.others.complaint.main');
    }

    public function create()
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.complaint.input', [
            'data' => new Complaint,
            'employee' => $employee,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'complaint_from' => 'required',
            'complaint_against' => 'required',
            'title' => 'required',
            'complaint_date' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $complaint = new Complaint;
        $complaint->complaint_from = $request->complaint_from;
        $complaint->complaint_against = $request->complaint_against;
        $complaint->title = $request->title;
        $complaint->complaint_date = $request->complaint_date;
        $complaint->description = $request->description;
        $complaint->created_by = Auth::guard('employees')->user()->id;
        $complaint->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Complaint Created',
        ]);
    }

    public function show(Complaint $complaint)
    {
        //
    }

    public function edit(Complaint $complaint)
    {
        $employee = Employee::all();
        return view('pages.office.hrm.others.complaint.input', [
            'data' => $complaint,
            'employee' => $employee,
        ]);
    }

    public function update(Request $request, Complaint $complaint)
    {
        $validator = Validator::make($request->all(), [
            'complaint_from' => 'required',
            'complaint_against' => 'required',
            'title' => 'required',
            'complaint_date' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $complaint->complaint_from = $request->complaint_from;
        $complaint->complaint_against = $request->complaint_against;
        $complaint->title = $request->title;
        $complaint->complaint_date = $request->complaint_date;
        $complaint->description = $request->description;
        $complaint->created_by = Auth::guard('employees')->user()->id;
        $complaint->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Complaint Created',
        ]);
    }

    public function destroy(Complaint $complaint)
    {
        $complaint->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Complaint Deleted',
        ]);
    }
}
