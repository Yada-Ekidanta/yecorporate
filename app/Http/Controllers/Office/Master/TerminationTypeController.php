<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\TerminationType;
use Illuminate\Support\Facades\Validator;

class TerminationTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = TerminationType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.termination_type.list', compact('collection'));
        }
        return view('pages.office.master.termination_type.main');
    }
    public function create()
    {
        return view('pages.office.master.termination_type.input', ['data' => new TerminationType]);
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
        $terminationType = new TerminationType;
        $terminationType->name = $request->name;
        $terminationType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Termination Type has been saved',
        ], 200);
    }
    public function show(TerminationType $terminationType)
    {
        //
    }
    public function edit(TerminationType $terminationType)
    {
        return view('pages.office.master.termination_type.input', ['data' => $terminationType]);
    }
    public function update(Request $request, TerminationType $terminationType)
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
        $terminationType->name = $request->name;
        $terminationType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Termination Type has been updated',
        ], 200);
    }
    public function destroy(TerminationType $terminationType)
    {
        $terminationType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Termination Type has been deleted',
        ], 200);
    }
}
