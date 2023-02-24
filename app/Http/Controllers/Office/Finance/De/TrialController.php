<?php

namespace App\Http\Controllers\Office\Finance\De;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Master\JournalItem;
class TrialController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            
                if(!empty($request->start_date) && !empty($request->end_date))
                {
                    $start = $request->start_date;
                    $end   = $request->end_date;
                }
                else
                {
                    $start = date('Y-m-01');
                    $end   = date('Y-m-t');
                }

                $collection = JournalItem::select('chart_of_accounts.name', \DB::raw('sum(credit) as totalCredit'), \DB::raw('sum(debit) as totalDebit'), \DB::raw('sum(credit) - sum(debit) as netAmount'));
                $collection->leftjoin('journal_entries', 'journal_entries.id', 'journal_items.journal');
                $collection->leftjoin('chart_of_accounts', 'journal_items.account', 'chart_of_accounts.id');
                $collection->where('journal_items.created_at', '>=', $start);
                $collection->where('journal_items.created_at', '<=', $end);
                $collection->groupBy('account');
                $collection = $collection->get()->toArray();

                $filter['startDateRange'] = $start;
                $filter['endDateRange']   = $end;
                
                $data = new JournalItem;
                return view('pages.office.finance.de.trial.list', compact('filter', 'collection', 'data'));
            }
        return view('pages.office.finance.de.trial.main');
    }
}
