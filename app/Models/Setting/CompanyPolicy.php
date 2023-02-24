<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPolicy extends Model
{
    use HasFactory;
    public $table = 'company_policies';
    public $timestamps = false;

    public function companyBranch()
    {
        return $this->belongsTo(CompanyBranch::class, 'company_branch_id','id');
    }
}
