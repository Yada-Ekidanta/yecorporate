<?php

namespace App\Http\Controllers\Office\Finance\Presale;

use App\Http\Controllers\Controller;
use App\Models\Finance\Presale\Retainers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\ProductCategory;
use App\Models\Master\ProductService;
class RetainersController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Retainers::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.presale.retainers.list', compact('collection'));
        }
        return view('pages.office.finance.presale.retainers.main');
    }
    public function create()
    {
        $categories = ProductCategory::orderBy('name', 'asc')->get();
        $productservices = ProductService::orderBy('name', 'asc')->get();
        return view('pages.office.finance.presale.retainers.input', ['productservices' => $productservices, 'categories' => $categories, 'data' => new Retainers]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $Retainers = new Retainers;

        $Retainers->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Retainers has been saved',
        ], 200);
    }
    public function show(Retainers $Retainers)
    {
        //
    }
    public function edit(Retainers $Retainers)
    {
        return view('pages.office.finance.presale.retainers.input', ['data' => $Retainers]);
    }
    public function update(Request $request, Retainers $Retainers)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $Retainers->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Retainers has been updated',
        ], 200);
    }
    public function destroy(Retainers $Retainers)
    {
        $Retainers->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Retainers has been deleted',
        ], 200);
    }
}
