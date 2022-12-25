<?php

namespace App\Http\Controllers\Office\Finance\De;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Finance\De\JournalEntries;
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

        return view('pages.office.finance.de.journal.input', ['journalId' => $journalId, 'data' => new JournalEntries]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'from' => 'required',
            'to' => 'required',
            'amount' => 'required',
            'is_display' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $journalentries = new JournalEntries;
        $journalentries->name = $request->name;
        $journalentries->type = $request->type;
        $journalentries->from = $request->from;
        $journalentries->to = $request->to;
        $journalentries->amount = $request->amount;
        $journalentries->is_display = isset($request->is_display) ? 1 : 0;

        $journalentries->save();
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
            'name' => 'required',
            'type' => 'required',
            'from' => 'required',
            'to' => 'required',
            'amount' => 'required',
            'is_display' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $journalentries->name = $request->name;
        $journalentries->type = $request->type;
        $journalentries->from = $request->from;
        $journalentries->to = $request->to;
        $journalentries->amount = $request->amount;
        $journalentries->is_display = isset($request->is_display) ? 1 : 0;

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

    function journalNumber()
    {
        $latest = JournalEntries::where('created_by', '=', \Auth::user())->latest()->first();
        if(!$latest)
        {
            return 1;
        }

        return $latest->journal_id + 1;
    }
}
