<?php

namespace App\Http\Controllers\Office\Hrm;

use App\Http\Controllers\Controller;
use App\Models\HRM\Contract;
use App\Models\HRM\Employee;
use App\Models\HRM\Ticket;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Contract::paginate(10);;
            return view('pages.office.hrm.contract.list', compact('collection'));
        }
        return view('pages.office.hrm.contract.main');
    }

    public function create()
    {
        $employee = Employee::all();
        return view('pages.office.hrm.contract.input', [
            'data' => new Ticket(),
            'employee' => $employee,
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Contract $contract)
    {
        //
    }

    public function edit(Contract $contract)
    {
        //
    }

    public function update(Request $request, Contract $contract)
    {
        //
    }

    public function destroy(Contract $contract)
    {
        //
    }
}
