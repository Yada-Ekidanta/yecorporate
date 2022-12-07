<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\ShippingProvider;
use Illuminate\Support\Facades\Validator;

class ShippingProviderController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = ShippingProvider::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.shipping_provider.list', compact('collection'));
        }
        return view('pages.office.master.shipping_provider.main');
    }
    public function create()
    {
        return view('pages.office.master.shipping_provider.input', ['data' => new ShippingProvider]);
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
        $shippingProvider = new ShippingProvider;
        $shippingProvider->name = $request->name;
        $shippingProvider->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Shipping Provider has been saved',
        ], 200);
    }
    public function show(ShippingProvider $shippingProvider)
    {
        //
    }
    public function edit(ShippingProvider $shippingProvider)
    {
        return view('pages.office.master.shipping_provider.input', ['data' => $shippingProvider]);
    }
    public function update(Request $request, ShippingProvider $shippingProvider)
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
        $shippingProvider->name = $request->name;
        $shippingProvider->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Shipping Provider has been updated',
        ], 200);
    }
    public function destroy(ShippingProvider $shippingProvider)
    {
        $shippingProvider->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Shipping Provider has been deleted',
        ], 200);
    }
}
