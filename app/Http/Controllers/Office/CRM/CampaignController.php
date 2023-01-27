<?php
namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Campaign;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use App\Models\Master\TargetList;
use App\Models\Master\CampaignType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CampaignController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = Campaign::where('st','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.campaign.list', compact('collection'));
        }
        return view('pages.office.crm.campaign.main');
    }

    public function create()
    {
        $employee = Employee::get();
        $campaignType = CampaignType::get();
        $targetList = TargetList::get();
        return view('pages.office.crm.campaign.input', ['data' => new Campaign,'employee'=>$employee,'campaignType'=>$campaignType,'targetList'=>$targetList]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'st' => 'required',
            'campaign_type_id' => 'required',
            'budget' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'target_list' => 'required',
            'ex_target_list' => 'required',
            'desc' => 'required',
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
        $campaign = new Campaign();
        $campaign->employee_id = $employee_id;
        $campaign->st = $request->st;
        $campaign->campaign_type_id = $request->campaign_type_id;
        $campaign->budget = $request->budget;
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
        $campaign->start_at = $request->start_at;
        $campaign->end_at = $request->end_at;
        $campaign->target_list = $request->target_list;
        $campaign->ex_target_list = $request->ex_target_list;
        $campaign->desc = $request->desc;
        $campaign->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Campaign Created'
        ]);
    }

    public function show(Campaign $campaign)
    {
        //
    }

    public function edit(Campaign $campaign)
    {
        $employee = Employee::get();
        $campaignType = CampaignType::get();
        $targetList = TargetList::get();
        return view('pages.office.crm.campaign.input', ['data' => $campaign,'employee'=>$employee,'campaignType'=>$campaignType,'targetList'=>$targetList]);
    }

    public function update(Request $request, Campaign $campaign)
    {
        $validator = Validator::make($request->all(), [
            'st' => 'required',
            'campaign_type_id' => 'required',
            'budget' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'target_list' => 'required',
            'ex_target_list' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee_id = Auth::guard('employees')->user()->id;
        $campaign->employee_id = $employee_id;
        $campaign->st = $request->st;
        $campaign->campaign_type_id = $request->campaign_type_id;
        $campaign->budget = $request->budget;
        if ($request->end_at < $request->start_at) {
            return response()->json([
                'alert' => 'error',
                'message' => 'The End At Value Cannot Be Less Than The Start At Value'
            ]);
        }
        $campaign->start_at = $request->start_at;
        $campaign->end_at = $request->end_at;
        $campaign->target_list = $request->target_list;
        $campaign->ex_target_list = $request->ex_target_list;
        $campaign->desc = $request->desc;
        $campaign->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Campaign Updated'
        ]);
    }

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Campaign Deleted',
        ]);
    }
}
