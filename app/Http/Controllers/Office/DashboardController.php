<?php

namespace App\Http\Controllers\Office;

use App\Models\CRM\Leads;
use App\Http\Controllers\Controller;
use App\Models\CRM\Opportunity;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:dashboard-default', ['only' => ['index']]);
        $this->middleware('permission:dashboard-ecommerce', ['only' => ['ecommerce']]);
    }
    public function index()
    {
        return view('pages.office.dashboard.main');
    }
    public function ecommerce()
    {
        return view('pages.office.dashboard.ecommerce');
    }
    public function crm()
    {
        $get_leads = Leads::where('employee_id', Auth::guard('employees')->user()->id)->get();
        $leads_total = $get_leads->count();

        $new = $get_leads->where('st', 0)->count();
        $new_percent = round(($new / $leads_total) * 100);

        $assigned = $get_leads->where('st', 1)->count();
        $assigned_percent = round(($assigned / $leads_total) * 100);

        $in_progress = $get_leads->where('st', 2)->count();
        $in_progress_percent = round(($in_progress / $leads_total) * 100);

        $converted = $get_leads->where('st', 3)->count();
        $converted_percent = round(($converted / $leads_total) * 100);

        $recycled = $get_leads->where('st', 4)->count();
        $recycled_percent = round(($recycled / $leads_total) * 100);

        $dead = $get_leads->where('st', 5)->count();
        $dead_percent = round(($dead / $leads_total) * 100);

        $get_opportunity = Opportunity::where('employee_id', Auth::user()->id)->get();
        $opp_total = $get_opportunity->count();

        $won_opp = $get_opportunity->where('opportunities_stage_id', 5)->count();
        $won_opp_percent = round(($won_opp / $opp_total) * 100);

        $lost_opp = $get_opportunity->where('opportunities_stage_id', 6)->count();
        $lost_opp_percent = round(($lost_opp / $opp_total) * 100);

        $won_amount_total = 0;
        $won_opp_amout = $get_opportunity->where('opportunities_stage_id', 5)->take($won_opp);
        foreach ($won_opp_amout as $key => $value) {
            $value->amount = str_replace(',', '', $value->amount);
            $won_amount_total += $value->amount;
        }

        $lost_amount_total = 0;
        $lost_opp_amout = $get_opportunity->where('opportunities_stage_id', 6)->take($lost_opp);
        foreach ($lost_opp_amout as $key => $value) {
            $value->amount = str_replace(',', '', $value->amount);
            $lost_amount_total += $value->amount;
        }
        // dd($lost_amount_total);

        $list_leads =  Leads::where('employee_id', Auth::user()->id)->orderBy('title', 'asc')->get();
        return view('pages.office.dashboard.crm',
            compact(
                'list_leads', 'leads_total', 'new', 'new_percent', 'assigned', 'assigned_percent', 'in_progress', 'in_progress_percent', 'converted', 'converted_percent', 'recycled', 'recycled_percent', 'dead', 'dead_percent',
                'get_opportunity', 'opp_total', 'won_opp', 'lost_opp', 'won_opp_percent', 'lost_opp_percent', 'won_amount_total', 'lost_amount_total'
            ));
    }
}
