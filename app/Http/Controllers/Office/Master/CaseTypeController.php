<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\CaseType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CaseTypeController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = CaseType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.case_type.list', compact('collection'));
        }
        return view('pages.office.master.case_type.main');
    }
    public function create()
    {
        return view('pages.office.master.case_type.input', ['data' => new CaseType]);
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
        $caseType = new CaseType;
        $caseType->name = $request->name;
        $caseType->created_by = Auth::guard('employees')->user()->id;
        $caseType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Case Type Created',
        ]);
    }
    public function show(CaseType $caseType)
    {
        //
    }
    public function edit(CaseType $caseType)
    {
        return view('pages.office.master.case_type.input', ['data' => $caseType]);
    }
    public function update(Request $request, CaseType $caseType)
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
        $caseType->name = $request->name;
        $caseType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Case Type Updated',
        ]);
    }
    public function destroy(CaseType $caseType)
    {
        $caseType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Case Type Deleted',
        ]);
    }
}
