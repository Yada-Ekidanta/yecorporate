<?php

namespace App\Http\Controllers\Office\Finance\De;

use App\Http\Controllers\Controller;
use App\Models\Finance\De\ChartOfAccount;
use App\Models\Finance\De\JournalEntries;
use App\Models\Master\JournalItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JournalEntriesController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = JournalEntries::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.de.journal.list', compact('collection'));
        }
        return view('pages.office.finance.de.journal.main');
    }
    public function create()
    {
        $journalId = $this->journalNumber();
        $accounts = ChartOfAccount::orderBy('name', 'asc')->get();

        return view('pages.office.finance.de.journal.input', ['accounts' => $accounts, 'journalId' => $journalId, 'data' => new JournalEntries]);
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
        $journal = new JournalEntries();
        $journal->journal_id = $this->journalNumber();
        $journal->date = $request->date;
        $journal->reference = $request->reference;
        $journal->desc = $request->desc;
        $journal->save();

        foreach ($request->kt_docs_repeater_basic as $key => $value) {
            $journalItem = new JournalItem();
            $journalItem->journal_id = $journal->id;
            $journalItem->account_id = $value['account_id'];
            $journalItem->debit = isset($value['debit']) ? $value['debit'] : 0;
            $journalItem->credit = isset($value['credit']) ? $value['credit'] : 0;
            $journalItem->save();
        }

        return response()->json([
            'alert' => 'success',
            'message' => 'JournalEntries has been saved',
        ], 200);
    }
    public function show(JournalEntries $journalentries)
    {
        //
    }
    public function edit(JournalEntries $journalentries)
    {
        return view('pages.office.finance.de.journal.input', ['data' => $journalentries]);
    }
    public function update(Request $request, JournalEntries $journalentries)
    {
        $validator = Validator::make($request->all(), [

        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $journalentries->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'JournalEntries has been updated',
        ], 200);
    }
    public function destroy(JournalEntries $journalentries)
    {
        $journalentries->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'JournalEntries has been deleted',
        ], 200);
    }

    public function journalNumber()
    {
        $latest = JournalEntries::where('created_by', '=', \Auth::user())->latest()->first();
        if (!$latest) {
            return 1;
        }

        return $latest->journal_id + 1;
    }
}
