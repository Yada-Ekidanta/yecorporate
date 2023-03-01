<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use App\Models\PM\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:dashboard-default', ['only' => ['index']]);
        $this->middleware('permission:dashboard-ecommerce', ['only' => ['ecommerce']]);
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Project::paginate(5);
            return view ('pages.office.dashboard.list', compact('collection'));
        }
        $project_count = Project::all()->count();
        $project_active  = Project::where('status', 'In Progres')->count();
        $project_pending = Project::where('status', 'On Hold')->count();
        $project_closed = Project::where('status', 'Closed')->count();
        $persentase_pending = round($project_pending / $project_count * 100);
        $persentase_closed = round($project_closed / $project_count * 100);

        return view('pages.office.dashboard.main', compact('project_active', 'project_pending', 'project_closed', 'persentase_pending', 'persentase_closed'));
    }
}
