<?php

namespace App\Models\Finance\De;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\JournalItem;
use App\Models\Finance\De\ChartOfAccountType;
class ChartOfAccount extends Model
{
    use HasFactory;
    public function types()
    {
        return $this->hasOne('App\Models\Finance\De\ChartOfAccountType', 'id', 'type');
    }

    public function accounts()
    {
        return $this->hasOne('App\Models\Master\JournalItem', 'account', 'id');
    }

    public function balance()
    {
        $journalItem         = JournalItem::select(\DB::raw('sum(credit) as totalCredit'), \DB::raw('sum(debit) as totalDebit'), \DB::raw('sum(credit) - sum(debit) as netAmount'))->where('account', $this->id);
        $journalItem         = $journalItem->first();
        $data['totalCredit'] = $journalItem->totalCredit;
        $data['totalDebit']  = $journalItem->totalDebit;
        $data['netAmount']   = $journalItem->netAmount;

        return $data;
    }

    public function subType()
    {
        return $this->hasOne('App\Models\Finance\De\ChartOfAccountSubType', 'id', 'sub_type');
    }
}
