<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;
use App\Models\HRM\Department;
use App\Models\HRM\Employee;
use App\Models\HRM\Others\Transfer;
use App\Models\HRM\Position;
use App\Models\Setting\CompanyBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TransferController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Transfer::paginate(10);;
            return view('pages.office.hrm.others.transfer.list', compact('collection'));
        }
        return view('pages.office.hrm.others.transfer.main');
    }

    public function create()
    {
        $employee = Employee::all();
        $branch = CompanyBranch::all();
        $department = Department::all();
        $position = Position::all();
        return view('pages.office.hrm.others.transfer.input', [
            'data' => new Transfer,
            'branch' => $branch,
            'employee' => $employee,
            'department' => $department,
            'position' => $position,
        ]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'company_branch_id' => 'required',
            'department_id' => 'required',
            'position_id' => 'required',
            'transfer_date' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $transfer = new Transfer;
        $transfer->employee_id = $request->employee_id;
        $transfer->company_branch_id = $request->company_branch_id;
        $transfer->department_id = $request->department_id;
        $transfer->position_id = $request->position_id;
        $transfer->transfer_date = $request->transfer_date;
        $transfer->desc = $request->desc;
        $transfer->created_by = Auth::guard('employees')->user()->id;
        $transfer->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Transfer Created',
        ]);
    }

    public function show(Transfer $transfer)
    {
        //
    }

    public function edit(Transfer $transfer)
    {
        $employee = Employee::all();
        $branch = CompanyBranch::all();
        $department = Department::all();
        $position = Position::all();
        return view('pages.office.hrm.others.transfer.input', [
            'data' => $transfer,
            'branch' => $branch,
            'employee' => $employee,
            'department' => $department,
            'position' => $position,
        ]);
    }

    public function update(Request $request, Transfer $transfer)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'company_branch_id' => 'required',
            'department_id' => 'required',
            'position_id' => 'required',
            'transfer_date' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $transfer->employee_id = $request->employee_id;
        $transfer->company_branch_id = $request->company_branch_id;
        $transfer->department_id = $request->department_id;
        $transfer->position_id = $request->position_id;
        $transfer->transfer_date = $request->transfer_date;
        $transfer->desc = $request->desc;
        $transfer->created_by = Auth::guard('employees')->user()->id;
        $transfer->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Transfer Updated',
        ]);
    }

    public function destroy(Transfer $transfer)
    {
        $transfer->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Transfer Deleted',
        ]);
    }
}
