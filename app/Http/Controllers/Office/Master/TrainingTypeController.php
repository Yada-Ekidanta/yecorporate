<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\TrainingType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TrainingTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = TrainingType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.training_type.list', compact('collection'));
        }
        return view('pages.office.master.training_type.main');
    }
    public function create()
    {
        return view('pages.office.master.training_type.input', ['data' => new TrainingType]);
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
        $trainingType = new TrainingType;
        $trainingType->name = $request->name;
        $trainingType->created_by = Auth::guard('employees')->user()->id;
        $trainingType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Training Type has been saved',
        ], 200);
    }
    public function show(TrainingType $trainingType)
    {
        //
    }
    public function edit(TrainingType $trainingType)
    {
        return view('pages.office.master.training_type.input', ['data' => $trainingType]);
    }
    public function update(Request $request, TrainingType $trainingType)
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
        $trainingType->name = $request->name;
        $trainingType->created_by = Auth::guard('employees')->user()->id;
        $trainingType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Training Type has been updated',
        ], 200);
    }
    public function destroy(TrainingType $trainingType)
    {
        $trainingType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Training Type has been deleted',
        ], 200);
    }
}
