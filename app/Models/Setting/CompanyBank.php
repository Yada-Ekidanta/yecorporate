<?php

namespace App\Models\Setting;

use App\Models\Master\Bank;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyBank extends Model
{
    use HasFactory;
    public $table = 'company_bank_accounts';
    public $timestamps = false;

    public function companyBranch()
    {
        return $this->belongsTo(CompanyBranch::class, 'company_branch_id','id');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id','id');
    }
}
