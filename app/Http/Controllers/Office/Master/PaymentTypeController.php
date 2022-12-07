<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\PaymentType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PaymentTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = PaymentType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.payment_type.list', compact('collection'));
        }
        return view('pages.office.master.payment_type.main');
    }
    public function create()
    {
        return view('pages.office.master.payment_type.input', ['data' => new PaymentType]);
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
        $paymentType = new PaymentType;
        $paymentType->name = $request->name;
        $paymentType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payment Type has been saved',
        ], 200);
    }
    public function show(PaymentType $paymentType)
    {
        //
    }
    public function edit(PaymentType $paymentType)
    {
        return view('pages.office.master.payment_type.input', ['data' => $paymentType]);
    }
    public function update(Request $request, PaymentType $paymentType)
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
        $paymentType->name = $request->name;
        $paymentType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payment Type has been updated',
        ], 200);
    }
    public function destroy(PaymentType $paymentType)
    {
        $paymentType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Payment Type has been deleted',
        ], 200);
    }
}
