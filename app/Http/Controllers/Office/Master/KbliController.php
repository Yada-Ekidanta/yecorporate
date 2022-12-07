<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\IsicType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KbliController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = IsicType::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.kbli.list', compact('collection'));
        }
        return view('pages.office.master.kbli.main');
    }
    public function create()
    {
        return view('pages.office.master.kbli.input', ['data' => new IsicType]);
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
        $isicType = new IsicType;
        $isicType->name = $request->name;
        $isicType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Isic Type Created',
        ], 200);
    }
    public function show(IsicType $isicType)
    {
        //
    }
    public function edit(IsicType $isicType)
    {
        return view('pages.office.master.kbli.input', ['data' => $isicType]);
    }
    public function update(Request $request, IsicType $isicType)
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
        $isicType->name = $request->name;
        $isicType->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Isic Type has been updated',
        ], 200);
    }
    public function destroy(IsicType $isicType)
    {
        $isicType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Isic Type has been deleted',
        ], 200);
    }
}
