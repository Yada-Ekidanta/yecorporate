<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\PayslipType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PayslipTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = PayslipType::where('name','LIKE','%'.$request->keyword.'%')->paginate();;
            return view('pages.office.hrm.master.payslip_type.list', compact('collection'));
        }
        return view('pages.office.hrm.master.payslip_type.main');
    }
    public function create()
    {
        return view('pages.office.hrm.master.payslip_type.input', ['data' => new PayslipType]);
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
        $payslip = new PayslipType;
        $payslip->name = $request->name;
        $payslip->created_by = Auth::guard('employees')->user()->id;
        $payslip->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payslip Type has been saved',
        ], 200);
    }
    public function show(PayslipType $payslip)
    {
        //
    }
    public function edit($id)
    {
        $payslip = PayslipType::findOrFail($id);
        return view('pages.office.hrm.master.payslip_type.input', ['data' => $payslip]);
    }
    public function update(Request $request, $id)
    {
        $payslip = PayslipType::findOrFail($id);
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
        $payslip->name = $request->name;
        $payslip->created_by = Auth::guard('employees')->user()->id;
        $payslip->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payslip Type has been updated',
        ], 200);
    }
    public function destroy($id)
    {
        $payslip = PayslipType::findOrFail($id);
        $payslip->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payslip Type has been deleted',
        ], 200);
    }
}
