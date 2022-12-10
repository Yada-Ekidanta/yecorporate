<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Regional\Country;
use App\Models\Regional\Regency;
use App\Models\Regional\Province;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegionalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Country::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.regional.country.list', compact('collection'));
        }
        return view('pages.office.regional.country.main');
    }
    public function create()
    {
        return view('pages.office.regional.country.input', ['data' => new Country]);
    }
    public function store(Request $request)
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
        $country = new Country;
        $country->code = $request->code;
        $country->name = $request->name;
        $country->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Country Created',
        ], 200);
    }
    public function show(Request $request, Country $regional)
    {
        if($request->ajax()){
            $collection = Province::where('name','LIKE','%'.$request->keyword.'%')->where('country_id',$regional->id)->paginate(10);;
            return view('pages.office.regional.province.list', compact('collection'));
        }
        return view('pages.office.regional.province.main',['data' => $regional]);
    }
    public function edit(Country $regional)
    {
        return view('pages.office.regional.country.input', ['data' => $regional]);
    }
    public function update(Request $request, Country $regional)
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
        $regional->code = $request->code;
        $regional->name = $request->name;
        $regional->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Country Updated',
        ], 200);
    }
    public function destroy(Country $regional)
    {
        $regional->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Country Deleted',
        ], 200);
    }
    public function create_province(Country $regional)
    {
        return view('pages.office.regional.province.input', ['data' => new Province, 'regional' => $regional]);
    }
    public function store_province(Request $request)
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
        $province = new Province;
        $province->id = $request->code;
        $province->country_id = $request->country_id;
        $province->name = $request->name;
        $province->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Province Created',
        ], 200);
    }
    public function show_regency(Request $request, Province $province)
    {
        if($request->ajax()){
            $collection = Regency::where('name','LIKE','%'.$request->keyword.'%')->where('province_id',$province->id)->paginate(10);;
            return view('pages.office.regional.regency.list', compact('collection'));
        }
        return view('pages.office.regional.regency.main',['data' => $province]);
    }
    public function edit_province(Country $regional, Province $province)
    {
        return view('pages.office.regional.province.input', ['data' => $province, 'regional' => $regional]);
    }
    public function update_province(Request $request, Province $province)
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
        $province->id = $request->code;
        $province->country_id = $request->country_id;
        $province->name = $request->name;
        $province->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Province Updated',
        ], 200);
    }
    public function destroy_province(Province $province)
    {
        $province->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Province Deleted',
        ], 200);
    }
    public function create_regency(Province $province)
    {
        return view('pages.office.regional.regency.input', ['data' => new Regency, 'regional' => $province]);
    }
    public function store_regency(Request $request)
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
        $regency = new Regency;
        $regency->id = $request->code;
        $regency->province_id = $request->province_id;
        $regency->name = $request->name;
        $regency->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Regency Created',
        ], 200);
    }
    public function edit_regency(Province $province, Regency $regency)
    {
        return view('pages.office.regional.regency.input', ['data' => $regency, 'regional' => $province]);
    }
    public function update_regency(Request $request, Regency $regency)
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
        $regency->id = $request->code;
        $regency->province_id = $request->province_id;
        $regency->name = $request->name;
        $regency->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Regency Updated',
        ], 200);
    }
    public function destroy_regency(Regency $regency)
    {
        $regency->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Regency Deleted',
        ], 200);
    }
}
