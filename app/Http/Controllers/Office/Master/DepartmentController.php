<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\Position;
use App\Models\Master\Department;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Department::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.department.list', compact('collection'));
        }
        return view('pages.office.master.department.main');
    }
    public function create()
    {
        return view('pages.office.master.department.input', ['data' => new Department]);
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
        $department = new Department;
        $department->company_branch_id = Auth::guard('employees')->user()->company_branch_id;
        $department->name = $request->name;
        $department->desc = $request->desc;
        $department->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Department Created',
        ]);
    }
    public function show(Request $request,Department $department)
    {
        if($request->ajax()){
            $collection = Position::where('name','LIKE','%'.$request->keyword.'%')->where('department_id',$department->id)->paginate(10);
            return view('pages.office.master.department.show_list', compact('collection'));
        }
        return view('pages.office.master.department.show', compact('department'));
    }
    public function edit(Department $department)
    {
        return view('pages.office.master.department.input', ['data' => $department]);
    }
    public function update(Request $request, Department $department)
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
        $department->name = $request->name;
        $department->desc = $request->desc;
        $department->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Department Updated',
        ]);
    }
    public function destroy(Department $department)
    {
        $department->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Department Deleted',
        ]);
    }
}
