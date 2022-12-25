<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\HRM\Department;
use App\Models\HRM\Employee;
use App\Models\HRM\Position;
use App\Models\Setting\CompanyBranch;
use Illuminate\Http\Request;

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
        return view('pages.office.hrm.employee.input', [
            'data' => new Employee,
            'branch' => $branch,
            'department' => $department,
            'position' => $position,
        ]);
    }
   
    public function store(Request $request)
    {
        //
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
