<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\EmployeeContractType;
use Illuminate\Http\Request;

class EmployeeContractTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = EmployeeContractType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.employee_contract_type.list', compact('collection'));
        }
        return view('pages.office.master.employee_contract_type.main');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(EmployeeContractType $employeeContractType)
    {
        //
    }
    public function edit(EmployeeContractType $employeeContractType)
    {
        //
    }
    public function update(Request $request, EmployeeContractType $employeeContractType)
    {
        //
    }
    public function destroy(EmployeeContractType $employeeContractType)
    {
        //
    }
}
