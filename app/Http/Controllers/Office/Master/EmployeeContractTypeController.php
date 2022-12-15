<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\EmployeeContractType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmployeeContractTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = EmployeeContractType::where('name', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.master.employee_contract_type.list', compact('collection'));
        }
        return view('pages.office.master.employee_contract_type.main');
    }
    public function create()
    {
        return view('pages.office.master.employee_contract_type.input', ['data' => new EmployeeContractType]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_contract_type = new EmployeeContractType;
        $employee_contract_type->name = $request->name;
        $employee_contract_type->created_by = Auth::guard('employees')->user()->id;
        $employee_contract_type->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Employee Contract Type Created',
        ]);
    }
    public function show(EmployeeContractType $employeeContractType)
    {
        //
    }
    public function edit(EmployeeContractType $employeeContractType)
    {
        return view('pages.office.master.employee_contract_type.input', ['data' => $employeeContractType]);
    }
    public function update(Request $request, EmployeeContractType $employeeContractType)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employeeContractType->name = $request->name;
        $employeeContractType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Employee Contract Type Updated',
        ]);
    }
    public function destroy(EmployeeContractType $employeeContractType)
    {
        $employeeContractType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Employee Contract Type Deleted',
        ]);
    }
}
