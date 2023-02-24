<?php

namespace App\Http\Controllers\Office\Hrm;

use App\Http\Controllers\Controller;
use App\Models\HRM\Department;
use App\Models\HRM\Employee;
use App\Models\HRM\EmployeeBankAccount;
use App\Models\HRM\Position;
use App\Models\Master\Bank;
use App\Models\Regional\Country;
use App\Models\Setting\CompanyBranch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $cek = Employee::count();
            if ($cek == 0){
                $urut = 0000000;
                $nomer = 'EMP' . $urut;
                // dd($nomer);
            }else {
                // echo('ssdf');
                $ambil = Employee::all()->last();
                $urut = (int)substr($ambil->employee_bank_accounts, -4) + 1;
                $nomer = 'EMP' . $urut;
            }

            $collection = Employee::where('name','LIKE','%'.$request->keyword.'%')->orderBy('updated_at','DESC')->paginate(10);;
            return view('pages.office.hrm.employee.list', compact('collection','nomer'));
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
        $country = Country::all();
        $employee_bank_account = EmployeeBankAccount::select('name', 'id')->get();
        return view('pages.office.hrm.employee.input', [
            'data_employee' => new Employee,
            'data_employee_bank_account' => new EmployeeBankAccount,
            'branch' => $branch,
            'department' => $department,
            'position' => $position,
            'employee' => $employee,
            'bank' => $bank,
            'country' => $country,
            'employee_bank_account' => $employee_bank_account,
        ]);
    }
   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'date_birth' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jobdesc' => 'required',
            'address' => 'required',
            'country_id' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
            'company_branch_id' => 'required',
            'department_id' => 'required',
            'position_id' => 'required',
            'name' => 'required',
            'employee_id' => 'required',
            'bank_id' => 'required',
            'account_number' => 'required',
            'branch_name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->date_birth = $request->date_birth;
        $employee->email = $request->email;
        $employee->password = bcrypt($request->password);
        $employee->jobdesc = $request->jobdesc;
        $employee->address = $request->address;
        $employee->country_id = $request->country_id;
        $employee->province_id = $request->province_id;
        $employee->regency_id = $request->regency_id;
        $employee->district_id = $request->district_id;
        $employee->village_id = $request->village_id;
        $employee->postcode = $request->postcode;
        $employee->company_branch_id = $request->company_branch_id;
        $employee->department_id = $request->department_id;
        $employee->position_id = $request->position_id;
        if (request()->file('avatar')){
            $file = request()->file('avatar')->store('files/office/hrm/recruitment/avatar');
            $employee->avatar = $file;
        } else {
            $employee->avatar = $employee->avatar;
        }
        $employee->avatar = $request->avatar;
        $employee->save();
        $employee_bank_account = new EmployeeBankAccount;
        $employee_bank_account->name = $request->name_bank;
        $employee_bank_account->employee_id = $request->employee_id;
        $employee_bank_account->bank_id = $request->bank_id;
        $employee_bank_account->account_number = $request->account_number;
        $employee_bank_account->branch_name = $request->branch_name;
        if($request->is_primary != null){
            $employee_bank_account->is_primary = 1;
        }else{
            $employee_bank_account->is_primary = 0;
        }
        // dd($employee_bank_account);
        $employee_bank_account->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Employee Created',
        ]);
    }

    public function show($id)
    {
        //
    }

    public function editEmployee($employee,$bank)
    {
        $branch = CompanyBranch::all();
        $department = Department::all();
        $position = Position::all();
        $bank = Bank::all();
        $country = Country::all();
        $employee = Employee::findOrFail($employee);
        dd($bank);
        $data_employee_bank_account = $bank;
        return view('pages.office.hrm.employee.input', [
            'data_employee' => $employee,
            'data_employee_bank_account' => $data_employee_bank_account,
            'branch' => $branch,
            'department' => $department,
            'position' => $position,
            'employee' => $employee,
            'bank' => $bank,
            'country' => $country,
        ]);
    }
    // public function edit($id)
    // {
    //     $branch = CompanyBranch::all();
    //     $department = Department::all();
    //     $position = Position::all();
    //     $employee = Employee::all();
    //     $bank = Bank::all();
    //     $country = Country::all();
    //     $data_employee_bank_account = EmployeeBankAccount::all();
    //     return view('pages.office.hrm.employee.input', [
    //         'data_employee' => $employee,
    //         'data_employee_bank_account' => $data_employee_bank_account,
    //         'branch' => $branch,
    //         'department' => $department,
    //         'position' => $position,
    //         'employee' => $employee,
    //         'bank' => $bank,
    //         'country' => $country,
    //     ]);
    // }

    public function update(Request $request, $id)
    {
        // if (request()->file('logo')){
        //     if($company->logo != null){
        //     Storage::delete($company->logo);
        //     }
        //     $file = request()->file('logo')->store('files/setting/company/logo');
        //     $company->logo = $file;
        // } else {
        //     $company->logo = $company->logo;
        // }
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        Storage::delete($employee->avatar);
        $employee->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Employee Deleted',
        ]);
    }
}
