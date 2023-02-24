<?php

namespace App\Http\Controllers\Office\Hrm\Recruitment;

use App\Http\Controllers\Controller;
use App\Models\HRM\Recruitment\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Job::paginate(10);;
            return view('pages.office.hrm.recruitment.job.list', compact('collection'));
        }
        return view('pages.office.hrm.recruitment.job.main');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Job $job)
    {
        //
    }

    public function edit(Job $job)
    {
        //
    }

    public function update(Request $request, Job $job)
    {
        //
    }
    
    public function destroy(Job $job)
    {
        //
    }
}