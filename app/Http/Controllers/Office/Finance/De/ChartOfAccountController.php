<?php

namespace App\Http\Controllers\Office\Finance\De;

use App\Http\Controllers\Controller;
use App\Models\Finance\De\ChartOfAccount;
use App\Models\Finance\De\ChartOfAccountType;
use App\Models\Master\JournalItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChartOfAccountController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $types = ChartOfAccountType::get();

            $chartAccounts = [];
            foreach ($types as $type) {
                $accounts = ChartOfAccount::where('chart_of_account_type_id', $type->id)->get();

                $chartAccounts[$type->name] = $accounts;

            }
            $collection = ChartOfAccount::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.de.chartofaccount.list', compact('collection', 'types', 'chartAccounts'));
        }
        return view('pages.office.finance.de.chartofaccount.main');
    }
    public function create()
    {
        $types = ChartOfAccountType::orderBy('name', 'asc')->get();
        $subtypes = ChartOfAccountType::orderBy('name', 'asc')->get();
        return view('pages.office.finance.de.chartofaccount.input', ['subtypes' => $subtypes, 'types' => $types, 'data' => new ChartOfAccount]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $chartofaccount = new ChartOfAccount;

        $chartofaccount->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'ChartOfAccount has been saved',
        ], 200);
    }
    public function show(Request $request, ChartOfAccount $chart)
    {

        if (!empty($request->start_date) && !empty($request->end_date)) {
            $start = $request->start_date;
            $end = $request->end_date;
        } else {
            $start = date('Y-m-01');
            $end = date('Y-m-t');
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

        return view('pages.office.finance.de.ledger.main', compact('filter', 'data', 'journalItems', 'chart'));
    }

    public function edit(ChartOfAccount $chartofaccount)
    {
        return view('pages.office.finance.de.chartofaccount.input', ['data' => $chartofaccount]);
    }
    public function update(Request $request, ChartOfAccount $chartofaccount)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $chartofaccount->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'ChartOfAccount has been updated',
        ], 200);
    }
    public function destroy(ChartOfAccount $chartofaccount)
    {
        $chartofaccount->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'ChartOfAccount has been deleted',
        ], 200);
    }
}
