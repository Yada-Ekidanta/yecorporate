<?php

namespace App\Http\Controllers\Office\Hrm\Training;

use App\Http\Controllers\Controller;
use App\Models\Master\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainerController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Trainer::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.hrm.training.trainer.list', compact('collection'));
        }
        return view('pages.office.hrm.training.trainer.main');
    }
    public function create()
    {
        return view('pages.office.hrm.training.trainer.input', ['data' => new Trainer]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'expertise' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $trainer = new Trainer;
        $trainer->name = $request->name;
        $trainer->phone = $request->phone;
        $trainer->email = $request->email;
        $trainer->address = $request->address;
        $trainer->expertise = $request->expertise;
        $trainer->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Trainer has been saved',
        ], 200);
    }
    public function show(Trainer $trainer)
    {
        //
    }
    public function edit(Trainer $trainer)
    {
        return view('pages.office.hrm.training.trainer.input', ['data' => $trainer]);
    }
    public function update(Request $request, Trainer $trainer)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'expertise' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $trainer->name = $request->name;
        $trainer->phone = $request->phone;
        $trainer->email = $request->email;
        $trainer->address = $request->address;
        $trainer->expertise = $request->expertise;
        $trainer->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Trainer has been updated',
        ], 200);
    }
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Trainer has been deleted',
        ], 200);
    }
}
