<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\AwardType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AwardTypeController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = AwardType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.award_type.list', compact('collection'));
        }
        return view('pages.office.master.award_type.main');
    }
    public function create()
    {
        return view('pages.office.master.award_type.input', ['data' => new AwardType]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $awardType = new AwardType;
        $awardType->name = $request->name;
        $awardType->created_by = Auth::guard('employees')->user()->id;
        $awardType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Award Type Created',
        ]);
    }
    public function show(AwardType $awardType)
    {
        //
    }
    public function edit(AwardType $awardType)
    {
        return view('pages.office.master.award_type.input', ['data' => $awardType]);
    }
    public function update(Request $request, AwardType $awardType)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $awardType->name = $request->name;
        $awardType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Award Type Updated',
        ]);
    }
    public function destroy(AwardType $awardType)
    {
        $awardType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Award Type Deleted',
        ]);
    }
}
