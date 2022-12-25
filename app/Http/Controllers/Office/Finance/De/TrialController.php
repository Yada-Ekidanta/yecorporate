<?php

namespace App\Http\Controllers\Office\Finance\De;

use App\Http\Controllers\Controller;
use App\Models\De\Trial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrialController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Trial::where('name', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.de.trial.list', compact('collection'));
        }
        return view('pages.office.finance.de.trial.main');
    }
    public function create()
    {
        return view('pages.office.finance.de.trial.input', ['data' => new Trial]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'from' => 'required',
            'to' => 'required',
            'amount' => 'required',
            'is_display' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $Trial = new Trial;
        $Trial->name = $request->name;
        $Trial->type = $request->type;
        $Trial->from = $request->from;
        $Trial->to = $request->to;
        $Trial->amount = $request->amount;
        $Trial->is_display = isset($request->is_display) ? 1 : 0;

        $Trial->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Trial has been saved',
        ], 200);
    }
    public function show(Trial $Trial)
    {
        //
    }
    public function edit(Trial $Trial)
    {
        return view('pages.office.finance.de.trial.input', ['data' => $Trial]);
    }
    public function update(Request $request, Trial $Trial)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'from' => 'required',
            'to' => 'required',
            'amount' => 'required',
            'is_display' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $Trial->name = $request->name;
        $Trial->type = $request->type;
        $Trial->from = $request->from;
        $Trial->to = $request->to;
        $Trial->amount = $request->amount;
        $Trial->is_display = isset($request->is_display) ? 1 : 0;

        $Trial->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Trial has been updated',
        ], 200);
    }
    public function destroy(Trial $Trial)
    {
        $Trial->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Trial has been deleted',
        ], 200);
    }
}
