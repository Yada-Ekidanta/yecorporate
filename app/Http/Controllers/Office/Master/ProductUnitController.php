<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\ProductUnit;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductUnitController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = ProductUnit::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.product_unit.list', compact('collection'));
        }
        return view('pages.office.master.product_unit.main');
    }
    public function create()
    {
        return view('pages.office.master.product_unit.input', ['data' => new ProductUnit]);
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
        $productUnit = new ProductUnit;
        $productUnit->name = $request->name;
        $productUnit->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Product Unit has been saved',
        ], 200);
    }
    public function show(ProductUnit $productUnit)
    {
        //
    }
    public function edit(ProductUnit $productUnit)
    {
        return view('pages.office.master.product_unit.input', ['data' => $productUnit]);
    }
    public function update(Request $request, ProductUnit $productUnit)
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
        $productUnit->name = $request->name;
        $productUnit->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Product Unit has been updated',
        ], 200);
    }
    public function destroy(ProductUnit $productUnit)
    {
        $productUnit->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Product Unit has been deleted',
        ], 200);
    }
}
