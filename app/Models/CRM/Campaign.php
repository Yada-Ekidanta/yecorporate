<?php

namespace App\Models\CRM;

use App\Models\HRM\Employee;
use App\Models\Master\CampaignType;
use App\Models\Master\TargetList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function campaignType()
    {
        return $this->belongsTo(CampaignType::class, 'campaign_type_id');
    }

    public function targetList()
    {
        return $this->belongsTo(TargetList::class, 'target_list');
    }

    public function exTargetList()
    {
        return $this->belongsTo(TargetList::class, 'ex_target_list');
    }
}
