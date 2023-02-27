<?php

namespace App\Http\Controllers\Office\Hrm\Others;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\Models\HRM\Employee;
use App\Models\HRM\Others\Award;
use App\Models\Master\AwardType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AwardController extends Controller
{
   
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Award::paginate(10);;
            return view('pages.office.hrm.others.award.list', compact('collection'));
        }
        return view('pages.office.hrm.others.award.main');
    }

    public function create()
    {
        $employee = Employee::all();
        $award_type = AwardType::all();
        return view('pages.office.hrm.others.award.input', [
            'data' => new Award,
            'employee' => $employee,
            'award_type' => $award_type,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'award_type_id' => 'required',
            'date' => 'required',
            'gift' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $award = new Award;
        $award->employee_id = $request->employee_id;
        $award->award_type_id = $request->award_type_id;
        $award->date = $request->date;
        $award->gift = $request->gift;
        $award->desc = $request->desc;
        $award->created_by = Auth::guard('employees')->user()->id;
        $award->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Award Created',
        ]);
    }

   
    public function show(Award $award)
    {
        //
    }

   
    public function edit(Award $award)
    {
        $employee = Employee::all();
        $award_type = AwardType::all();
        return view('pages.office.hrm.others.award.input', [
            'data' => $award,
            'employee' => $employee,
            'award_type' => $award_type,
        ]);
    }

    public function update(Request $request, Award $award)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'award_type' => 'required',
            'date' => 'required',
            'gift' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $award->employee_id = $request->employee_id;
        $award->award_type = $request->award_type;
        $award->date = $request->date;
        $award->gift = $request->gift;
        $award->desc = $request->desc;
        $award->created_by = Auth::guard('employees')->user()->id;
        $award->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Award Updated',
        ]);
    }

    public function destroy(Award $award)
    {
        $award->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Award Deleted',
        ]);
    }
}
