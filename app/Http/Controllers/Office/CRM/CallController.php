<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Call;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CallController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = Call::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.call.list', compact('collection'));
        }
        return view('pages.office.crm.call.main');
    }

    public function create()
    {
        return view('pages.office.crm.call.input', ['data' => new Call()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'st' => 'required',
            'direction' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'parent' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        date_default_timezone_set('Asia/Jakarta');
        $employee_id = Auth::guard('employees')->user()->id;
        $parent_id = 0;
        $call = new Call();
        $call->employee_id = $employee_id;
        $call->name = $request->name;
        $call->st = $request->st;
        $call->direction = $request->direction;
        if ($request->start_at < date('Y-m-d')) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The Start At Value Cannot Be Less Than Today'
            ]);
        } elseif ($request->end_at < $request->start_at) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The End At Value Cannot Be Less Than The Start At Value'
            ]);
        }
        $call->start_at = $request->start_at;
        $call->end_at = $request->end_at;
        $call->parent = $request->parent;
        if ($request->parent === 'client') {
            $parent_id = 1;
        } elseif ($request->parent === 'lead') {
            $parent_id = 2;
        } elseif ($request->parent === 'contact') {
            $parent_id = 3;
        } elseif ($request->parent === 'opportunities') {
            $parent_id = 4;
        } elseif ($request->parent === 'case') {
            $parent_id = 5;
        }
        $call->parent_id = $parent_id;
        $call->desc = $request->desc;
        $call->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Call Created',
        ]);
    }

    public function show(Call $call)
    {
        //
    }

    public function edit(Call $call)
    {
        return view('pages.office.crm.call.input', ['data' => $call]);
    }

    public function update(Request $request, Call $call)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'st' => 'required',
            'direction' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'parent' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        date_default_timezone_set('Asia/Jakarta');
        $employee_id = Auth::guard('employees')->user()->id;
        $parent_id = 0;
        $call->employee_id = $employee_id;
        $call->name = $request->name;
        $call->st = $request->st;
        $call->direction = $request->direction;
        if ($request->end_at < $request->start_at) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The End At Value Cannot Be Less Than The Start At Value'
            ]);
        }
        $call->start_at = $request->start_at;
        $call->end_at = $request->end_at;
        $call->parent = $request->parent;
        if ($request->parent === 'client') {
            $parent_id = 1;
        } elseif ($request->parent === 'lead') {
            $parent_id = 2;
        } elseif ($request->parent === 'contact') {
            $parent_id = 3;
        } elseif ($request->parent === 'opportunities') {
            $parent_id = 4;
        } elseif ($request->parent === 'case') {
            $parent_id = 5;
        }
        $call->parent_id = $parent_id;
        $call->desc = $request->desc;
        $call->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Call Updated',
        ]);
    }

    public function destroy(Call $call)
    {
        $call->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Call Deleted',
        ]);
    }
}
