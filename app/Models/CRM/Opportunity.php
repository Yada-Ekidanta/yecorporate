<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HRM\Employee;
use App\Models\CRM\Client;
use App\Models\Master\OpportunityStage;
use App\Models\Master\LeadSource;

class Opportunity extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function opportunityStage()
    {
        return $this->belongsTo(OpportunityStage::class, 'opportunities_stage_id');
    }

    public function leadSource()
    {
        return $this->belongsTo(OpportunityStage::class, 'lead_source_id');
    }
}
