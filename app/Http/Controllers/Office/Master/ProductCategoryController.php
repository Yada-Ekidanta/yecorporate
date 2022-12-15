<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = ProductCategory::where('name', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.master.product_category.list', compact('collection'));
        }
        return view('pages.office.master.product_category.main');
    }
    public function create()
    {
        return view('pages.office.master.product_category.input', ['data' => new ProductCategory]);
    }
    public function store(Request $request)
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
        $productCategory = new ProductCategory;
        $productCategory->name = $request->name;
        $productCategory->type = $request->type;
        $productCategory->color = $request->color;
        $productCategory->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Product Category has been saved',
        ], 200);
    }
    public function show(ProductCategory $productCategory)
    {
        //
    }
    public function edit(ProductCategory $productCategory)
    {
        return view('pages.office.master.product_category.input', ['data' => $productCategory]);
    }
    public function update(Request $request, ProductCategory $productCategory)
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
        $productCategory->name = $request->name;
        $productCategory->type = $request->type;
$productCategory->color = $request->color;

        $productCategory->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Product Category has been updated',
        ], 200);
    }
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Product Category has been deleted',
        ], 200);
    }
}
