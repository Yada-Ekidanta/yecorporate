<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\Competency;
use App\Http\Controllers\Controller;
use App\Models\Master\PerformanceType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CompetencyController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Competency::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.competency.list', compact('collection'));
        }
        return view('pages.office.master.competency.main');
    }
    public function create()
    {
        $performances = PerformanceType::all();
        return view('pages.office.master.competency.input', [
            'data' => new Competency,
            'performances' => $performances,
        ]);
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
        $competency = new Competency;
        $competency->name = $request->name;
        $competency->performance_type_id = $request->performance_type_id;
        $competency->created_by = Auth::guard('employees')->user()->id;
        $competency->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Competency Created',
        ]);
    }
    public function show(Competency $competency)
    {
        //
    }
    public function edit(Competency $competency)
    {
        $performances = PerformanceType::all();
        return view('pages.office.master.competency.input', [
            'data' => $competency,
            'performances' => $performances,
        ]);
    }
    public function update(Request $request, Competency $competency)
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
        $competency->name = $request->name;
        $competency->performance_type_id = $request->performance_type_id;
        $competency->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Competency Updated',
        ]);
    }
    public function destroy(Competency $competency)
    {
        $competency->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Competency Deleted',
        ]);
    }
}
