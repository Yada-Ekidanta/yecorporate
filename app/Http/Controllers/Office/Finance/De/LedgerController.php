<?php

namespace App\Http\Controllers\Office\Finance\De;

use App\Http\Controllers\Controller;
use App\Models\Finance\De\ChartOfAccount;
use App\Models\Master\JournalItem;
use Illuminate\Http\Request;

class LedgerController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index()
    {
        $accounts = ChartOfAccount::get()->pluck('name', 'id');

        if (!empty($request->start_date) && !empty($request->end_date)) {
            $start = $request->start_date;
            $end = $request->end_date;
        } else {
            $start = date('Y-m-01');
            $end = date('Y-m-t');
        }

        if (!empty($request->account)) {
            $account = ChartOfAccount::find($request->account);
        } else {
            $account = ChartOfAccount::first();
        }
        $journalItems = JournalItem::select('journal_entries.journal_id', 'journal_entries.date as transaction_date', 'journal_items.*')->leftjoin('journal_entries', 'journal_entries.id', 'journal_items.journal_id')->where('journal_entries.created_by', '=', \Auth::user())->where('account_id', !empty($account) ? $account->id : 0);
        $journalItems = $journalItems->get();

        $balance = 0;
        $debit = 0;
        $credit = 0;
        foreach ($journalItems as $item) {
            if ($item->debit > 0) {
                $debit += $item->debit;
            } else {
                $credit += $item->credit;
            }

            $balance = $credit - $debit;
        }

        $filter['balance'] = $balance;
        $filter['credit'] = $credit;
        $filter['debit'] = $debit;
        $filter['startDateRange'] = $start;
        $filter['endDateRange'] = $end;

        $data = new ChartOfAccount;
        return view('pages.office.finance.de.ledger.main', compact('filter', 'journalItems', 'data', 'accounts', 'account'));

    }
    public function ledgerSummary(Request $request)
    {
        if (\Auth::user()->can('ledger report')) {
            $accounts = ChartOfAccount::get()->pluck('name', 'id');

            if (!empty($request->start_date) && !empty($request->end_date)) {
                $start = $request->start_date;
                $end = $request->end_date;
            } else {
                $start = date('Y-m-01');
                $end = date('Y-m-t');
            }

            if (!empty($request->account)) {
                $account = ChartOfAccount::find($request->account);
            } else {
                $account = ChartOfAccount::first();
            }

            $journalItems = JournalItem::select('journal_entries.journal_id', 'journal_entries.date as transaction_date', 'journal_items.*')->leftjoin('journal_entries', 'journal_entries.id', 'journal_items.journal_id')->where('journal_entries.created_by', '=', \Auth::user()->creatorId())->where('account_id', !empty($account) ? $account->id : 0);
//            $journalItems->where('date', '>=', $start);
            //            $journalItems->where('date', '<=', $end);
            $journalItems = $journalItems->get();

            $balance = 0;
            $debit = 0;
            $credit = 0;
            foreach ($journalItems as $item) {
                if ($item->debit > 0) {
                    $debit += $item->debit;
                } else {
                    $credit += $item->credit;
                }

                $balance = $credit - $debit;
            }

            $filter['balance'] = $balance;
            $filter['credit'] = $credit;
            $filter['debit'] = $debit;
            $filter['startDateRange'] = $start;
            $filter['endDateRange'] = $end;

            return view('pages.office.finance.de.ledger.main', compact('filter', 'journalItems', 'account', 'accounts'));
        } else {
            return redirect()->back()->with('error', __('Permission Denied.'));
        }
    }
}
