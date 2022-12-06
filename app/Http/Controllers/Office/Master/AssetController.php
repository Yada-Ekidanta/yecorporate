<?php

namespace App\Http\Controllers\Office\Master;

use App\Models\Master\Asset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AssetController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Asset::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.asset.list', compact('collection'));
        }
        return view('pages.office.master.asset.main');
    }
    public function create()
    {
        return view('pages.office.master.asset.input', ['data' => new Asset]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'purchase_at' => 'required',
            'supported_at' => 'required',
            'amount' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $asset = new Asset;
        $asset->name = $request->name;
        $asset->purchase_at = $request->purchase_at;
        $asset->supported_at = $request->supported_at;
        $asset->amount = $request->amount;
        $asset->desc = $request->desc;
        $asset->created_by = Auth::guard('employees')->user()->id;
        $asset->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Asset Created',
        ]);
    }
    public function show(Asset $asset)
    {
        //
    }
    public function edit(Asset $asset)
    {
        return view('pages.office.master.asset.input', ['data' => $asset]);
    }
    public function update(Request $request, Asset $asset)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'purchase_at' => 'required',
            'supported_at' => 'required',
            'amount' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $asset->name = $request->name;
        $asset->purchase_at = $request->purchase_at;
        $asset->supported_at = $request->supported_at;
        $asset->amount = $request->amount;
        $asset->desc = $request->desc;
        $asset->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Asset Updated',
        ]);
    }
    public function destroy(Asset $asset)
    {
        $asset->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Asset Deleted',
        ]);
    }
}
