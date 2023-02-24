<?php

namespace App\Http\Controllers\Office\Finance\De;

use App\Http\Controllers\Controller;
use App\Models\Finance\De\ChartOfAccount;
use App\Models\Finance\De\ChartOfAccountSubType;
use App\Models\Finance\De\ChartOfAccountType;
use App\Models\Master\JournalItem;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index()
    {
        if (!empty($request->start_date) && !empty($request->end_date)) {
            $start = $request->start_date;
            $end = $request->end_date;
        } else {
            $start = date('Y-m-01');
            $end = date('Y-m-t');
        }

        $types = ChartOfAccountType::get();
        $chartAccounts = [];
        foreach ($types as $type) {
            $subTypes = ChartOfAccountSubType::where('chart_of_account_type_id', $type->id)->get();

            $subTypeArray = [];
            foreach ($subTypes as $subType) {
                $accounts = ChartOfAccount::where('chart_of_account_type_id', $type->id)->where('chart_of_account_sub_type_id', $subType->id)->get();

                $accountArray = [];
                foreach ($accounts as $account) {

                    $journalItem = JournalItem::select(\DB::raw('sum(credit) as totalCredit'), \DB::raw('sum(debit) as totalDebit'), \DB::raw('sum(credit) - sum(debit) as netAmount'))->where('account', $account->id);
                    $journalItem->where('created_at', '>=', $start);
                    $journalItem->where('created_at', '<=', $end);
                    $journalItem = $journalItem->first();
                    $data['account_name'] = $account->name;
                    $data['totalCredit'] = $journalItem->totalCredit;
                    $data['totalDebit'] = $journalItem->totalDebit;
                    $data['netAmount'] = $journalItem->netAmount;
                    $accountArray[] = $data;
                }
                $subTypeData['subType'] = $subType->name;
                $subTypeData['account'] = $accountArray;
                $subTypeArray[] = $subTypeData;
            }

            $chartAccounts[$type->name] = $subTypeArray;
        }

        $filter['startDateRange'] = $start;
        $filter['endDateRange'] = $end;

        $data = new ChartOfAccount;
        return view('pages.office.finance.de.balance.main', compact('filter', 'chartAccounts', 'data'));

    }
    public function balanceSheet(Request $request)
    {

        if (\Auth::user()->can('bill report')) {

            if (!empty($request->start_date) && !empty($request->end_date)) {
                $start = $request->start_date;
                $end = $request->end_date;
            } else {
                $start = date('Y-m-01');
                $end = date('Y-m-t');
            }

            $types = ChartOfAccountType::get();

            $chartAccounts = [];
            foreach ($types as $type) {
                $subTypes = ChartOfAccountSubType::where('type', $type->id)->get();

                $subTypeArray = [];
                foreach ($subTypes as $subType) {
                    $accounts = ChartOfAccount::where('created_by', \Auth::user()->creatorId())->where('type', $type->id)->where('sub_type', $subType->id)->get();

                    $accountArray = [];
                    foreach ($accounts as $account) {

                        $journalItem = JournalItem::select(\DB::raw('sum(credit) as totalCredit'), \DB::raw('sum(debit) as totalDebit'), \DB::raw('sum(credit) - sum(debit) as netAmount'))->where('account', $account->id);
                        $journalItem->where('created_at', '>=', $start);
                        $journalItem->where('created_at', '<=', $end);
                        $journalItem = $journalItem->first();
                        $data['account_name'] = $account->name;
                        $data['totalCredit'] = $journalItem->totalCredit;
                        $data['totalDebit'] = $journalItem->totalDebit;
                        $data['netAmount'] = $journalItem->netAmount;
                        $accountArray[] = $data;
                    }
                    $subTypeData['subType'] = $subType->name;
                    $subTypeData['account'] = $accountArray;
                    $subTypeArray[] = $subTypeData;
                }

                $chartAccounts[$type->name] = $subTypeArray;
            }

            $filter['startDateRange'] = $start;
            $filter['endDateRange'] = $end;

            return view('office.finance.de.balance.main', compact('filter', 'chartAccounts'));
        } else {
            return redirect()->back()->with('error', __('Permission Denied.'));
        }
    }
}
