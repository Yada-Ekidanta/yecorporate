<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyBranch extends Model
{
    use HasFactory;
    public $table = 'company_branches';

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id','id');
    }
}
