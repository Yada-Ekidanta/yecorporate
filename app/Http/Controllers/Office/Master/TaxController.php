<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaxController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Tax::where('name', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.master.tax.list', compact('collection'));
        }
        return view('pages.office.master.tax.main');
    }
    public function create()
    {
        return view('pages.office.master.tax.input', ['data' => new Tax]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'rates' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $tax = new Tax;
        $tax->name = $request->name;
        $tax->rates = $request->rates;

        $tax->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Tax has been saved',
        ], 200);
    }
    public function show(Tax $tax)
    {
        //
    }
    public function edit(Tax $tax)
    {
        return view('pages.office.master.tax.input', ['data' => $tax]);
    }
    public function update(Request $request, Tax $tax)
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
        $tax->name = $request->name;
        $tax->rates = $request->rates;

        $tax->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Tax has been updated',
        ], 200);
    }
    public function destroy(Tax $tax)
    {
        $tax->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Tax has been deleted',
        ], 200);
    }
}
