<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\TargetList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TargetListController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = TargetList::where('name', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.master.target_list.list', compact('collection'));
        }
        return view('pages.office.master.target_list.main');
    }
    public function create()
    {
        return view('pages.office.master.target_list.input', ['data' => new TargetList]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $targetList = new TargetList;
        $targetList->name = $request->name;
        $targetList->desc = $request->desc;

        $targetList->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Target List has been saved',
        ], 200);
    }
    public function show(TargetList $targetList)
    {
        //
    }
    public function edit(TargetList $targetList)
    {
        return view('pages.office.master.target_list.input', ['data' => $targetList]);
    }
    public function update(Request $request, TargetList $targetList)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $targetList->name = $request->name;
        $targetList->desc = $request->desc;

        $targetList->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Target List has been updated',
        ], 200);
    }
    public function destroy(TargetList $targetList)
    {
        $targetList->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Target List has been deleted',
        ], 200);
    }
}
