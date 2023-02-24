<?php

namespace App\Models\Finance\De;

use App\Models\Master\JournalItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartOfAccount extends Model
{
    use HasFactory;
    public function types()
    {
        return $this->hasOne('App\Models\Finance\De\ChartOfAccountType', 'id', 'chart_of_account_type_id');
    }

    public function accounts()
    {
        return $this->hasOne('App\Models\Master\JournalItem', 'journal_id', 'id');
    }

    public function balance()
    {
        $journalItem = JournalItem::select(\DB::raw('sum(credit) as totalCredit'), \DB::raw('sum(debit) as totalDebit'), \DB::raw('sum(credit) - sum(debit) as netAmount'))->where('account_id', $this->id);
        $journalItem = $journalItem->first();
        $data['totalCredit'] = $journalItem->totalCredit;
        $data['totalDebit'] = $journalItem->totalDebit;
        $data['netAmount'] = $journalItem->netAmount;

        return $data;
    }

    public function subType()
    {
        return $this->hasOne('App\Models\Finance\De\ChartOfAccountSubType', 'id', 'sub_type');
    }
}
