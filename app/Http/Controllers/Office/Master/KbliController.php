<?php

namespace App\Http\Controllers\Office\Master;

use App\Models\Master\Isic;
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
            'message' => 'kbli Created',
        ], 200);
    }
    public function show(Request $request,IsicType $kbli)
    {
        if($request->ajax()){
            $collection = Isic::where('name','LIKE','%'.$request->keyword.'%')->where('isic_type_id',$kbli->id)->paginate(10);;
            return view('pages.office.master.kbli.show_list', compact('collection'));
        }
        return view('pages.office.master.kbli.show',['data' => $kbli]);
    }
    public function edit(IsicType $kbli)
    {
        return view('pages.office.master.kbli.input', ['data' => $kbli]);
    }
    public function update(Request $request, IsicType $kbli)
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
        $kbli->name = $request->name;
        $kbli->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'kbli has been updated',
        ], 200);
    }
    public function destroy(IsicType $kbli)
    {
        $kbli->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'KBLI has been deleted',
        ], 200);
    }
    public function create_sub(IsicType $kbli)
    {
        return view('pages.office.master.kbli.show_input', ['data' => new Isic, 'kbli' => $kbli]);
    }
    public function store_sub(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $isic = new Isic;
        $isic->isic_type_id = $request->isic_type_id;
        $isic->code = $request->code;
        $isic->name = $request->name;
        $isic->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'kbli Created',
        ], 200);
    }
    public function edit_sub(IsicType $kbli, Isic $data)
    {
        return view('pages.office.master.kbli.show_input', ['data' => $data, 'kbli' => $kbli]);
    }
    public function update_sub(Request $request, Isic $kbli)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $kbli->isic_type_id = $request->isic_type_id;
        $kbli->code = $request->code;
        $kbli->name = $request->name;
        $kbli->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'kbli Updated',
        ], 200);
    }
    public function destroy_sub(Isic $kbli)
    {
        $kbli->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'KBLI has been deleted',
        ], 200);
    }
}
