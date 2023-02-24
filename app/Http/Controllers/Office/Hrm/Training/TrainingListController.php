<?php

namespace App\Http\Controllers\Office\Hrm\Training;

use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use App\Models\HRM\TrainingList\TrainingList;
use App\Models\Master\Trainer;
use App\Models\Master\TrainingType;
use App\Models\Setting\CompanyBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainingListController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = TrainingList::paginate(10);;
            return view('pages.office.hrm.training.training_list.list', compact('collection'));
        }
        return view('pages.office.hrm.training.training_list.main');
    }

    public function create()
    {
        $trainer = Trainer::all();
        $employee = Employee::all();
        $company_branch = CompanyBranch::all();
        $training_type = TrainingType::all();
        return view('pages.office.hrm.training.training_list.input', [
            'data' => new TrainingList(),
            'training_type' => $training_type,
            'employee' => $employee,
            'company_branch' => $company_branch,
            'trainer' => $trainer,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_branch_id' => 'required',
            'trainer_option_id' => 'required',
            'training_type_id' => 'required',
            'trainer_id' => 'required',
            'training_cost' => 'required',
            'employee_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'desc' => 'required',
            'st' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $trainingList = new TrainingList();
        $trainingList->company_branch_id = $request->company_branch_id;
        $trainingList->trainer_option_id = $request->trainer_option_id;
        $trainingList->training_type_id = $request->training_type_id;
        $trainingList->trainer_id = $request->trainer_id;
        $trainingList->training_cost = $request->training_cost;
        $trainingList->employee_id = $request->employee_id;
        $trainingList->start_date = $request->start_date;
        $trainingList->end_date = $request->end_date;
        $trainingList->desc = $request->desc;
        $trainingList->st = $request->st;
        $trainingList->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Training has been saved',
        ], 200);
    }

    public function show(TrainingList $trainingList)
    {
        //
    }

    public function edit(TrainingList $trainingList)
    {
        $trainer = Trainer::all();
        $employee = Employee::all();
        $company_branch = CompanyBranch::all();
        $training_type = TrainingType::all();
        return view('pages.office.hrm.training.training_list.input', [
            'data' => $trainingList,
            'training_type' => $training_type,
            'employee' => $employee,
            'company_branch' => $company_branch,
            'trainer' => $trainer,
        ]);
    }

    public function update(Request $request, TrainingList $trainingList)
    {
        $validator = Validator::make($request->all(), [
            'company_branch_id' => 'required',
            'trainer_option_id' => 'required',
            'training_type_id' => 'required',
            'trainer_id' => 'required',
            'training_cost' => 'required',
            'employee_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'desc' => 'required',
            'st' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $trainingList->company_branch_id = $request->company_branch_id;
        $trainingList->trainer_option_id = $request->trainer_option_id;
        $trainingList->training_type_id = $request->training_type_id;
        $trainingList->trainer_id = $request->trainer_id;
        $trainingList->training_cost = $request->training_cost;
        $trainingList->employee_id = $request->employee_id;
        $trainingList->start_date = $request->start_date;
        $trainingList->end_date = $request->end_date;
        $trainingList->desc = $request->desc;
        $trainingList->st = $request->st;
        $trainingList->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Training has been updated',
        ], 200);
    }

    public function destroy(TrainingList $trainingList)
    {
        $trainingList->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Training has been deleted',
        ], 200);
    }
}
