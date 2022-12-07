<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\PerformanceType;
use Illuminate\Support\Facades\Validator;

class PerformanceTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = PerformanceType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.performance_type.list', compact('collection'));
        }
        return view('pages.office.master.performance_type.main');
    }
    public function create()
    {
        return view('pages.office.master.performance_type.input', ['data' => new PerformanceType]);
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
        $performanceType = new PerformanceType;
        $performanceType->name = $request->name;
        $performanceType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Performance Type has been saved',
        ], 200);
    }
    public function show(PerformanceType $performanceType)
    {
        //
    }
    public function edit(PerformanceType $performanceType)
    {
        return view('pages.office.master.performance_type.input', ['data' => $performanceType]);
    }
    public function update(Request $request, PerformanceType $performanceType)
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
        $performanceType->name = $request->name;
        $performanceType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Performance Type has been updated',
        ], 200);
    }
    public function destroy(PerformanceType $performanceType)
    {
        $performanceType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Performance Type has been deleted',
        ], 200);
    }
}
