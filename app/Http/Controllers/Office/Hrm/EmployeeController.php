<?php

namespace App\Http\Controllers\Office\Hrm;

use App\Http\Controllers\Controller;
use App\Models\HRM\Department;
use App\Models\HRM\Employee;
use App\Models\HRM\EmployeeBankAccount;
use App\Models\HRM\Position;
use App\Models\Master\Bank;
use App\Models\Setting\CompanyBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Employee::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.hrm.employee.list', compact('collection'));
        }
        return view('pages.office.hrm.employee.main');
    }

   
    public function create()
    {
        $branch = CompanyBranch::all();
        $department = Department::all();
        $position = Position::all();
        $employee = Employee::all();
        $bank = Bank::all();
        return view('pages.office.hrm.employee.input', [
            'data_employee' => new Employee,
            'data_employee_bank_account' => new EmployeeBankAccount,
            'branch' => $branch,
            'department' => $department,
            'position' => $position,
            'employee' => $employee,
            'bank' => $bank,
        ]);
    }
   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $expenseType = new Employee;
        $expenseType->name = $request->name;
        $expenseType->created_by = Auth::guard('employees')->user()->id;
        $expenseType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Expense Type Created',
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
