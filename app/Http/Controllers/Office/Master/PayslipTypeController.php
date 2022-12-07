<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\Payslip;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PayslipTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Payslip::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.payslip_type.list', compact('collection'));
        }
        return view('pages.office.master.payslip_type.main');
    }
    public function create()
    {
        return view('pages.office.master.payslip_type.input', ['data' => new Payslip]);
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
        $payslip = new Payslip;
        $payslip->name = $request->name;
        $payslip->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payslip Type has been saved',
        ], 200);
    }
    public function show(Payslip $payslip)
    {
        //
    }
    public function edit(Payslip $payslip)
    {
        return view('pages.office.master.payslip_type.input', ['data' => $payslip]);
    }
    public function update(Request $request, Payslip $payslip)
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
        $payslip->name = $request->name;
        $payslip->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payslip Type has been updated',
        ], 200);
    }
    public function destroy(Payslip $payslip)
    {
        $payslip->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payslip Type has been deleted',
        ], 200);
    }
}
