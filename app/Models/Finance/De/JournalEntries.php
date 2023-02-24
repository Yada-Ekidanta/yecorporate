<?php

namespace App\Models\Finance\De;

use App\Models\Finance\De\ChartOfAccount;
use App\Models\Master\JournalItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalEntries extends Model
{
    use HasFactory;
    public function account()
    {
        return $this->hasOne(ChartOfAccount::class, 'account_id');
    }

    public function journalProduct()
    {
        return $this->hasMany(JournalItem::class, 'journal_id');
    }
}
