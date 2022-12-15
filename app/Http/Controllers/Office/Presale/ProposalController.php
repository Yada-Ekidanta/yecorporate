<?php

namespace App\Http\Controllers\Office\Presale;

use App\Http\Controllers\Controller;
use App\Models\Presale\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProposalController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Proposal::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.presale.proposal.list', compact('collection'));
        }
        return view('pages.office.presale.proposal.main');
    }
    public function create()
    {
        return view('pages.office.presale.proposal.input', ['data' => new Proposal]);
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
        $proposal = new Proposal;

        $proposal->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'proposal has been saved',
        ], 200);
    }
    public function show(proposal $proposal)
    {
        //
    }
    public function edit(proposal $proposal)
    {
        return view('pages.office.presale.proposal.input', ['data' => $proposal]);
    }
    public function update(Request $request, proposal $proposal)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $proposal->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'proposal has been updated',
        ], 200);
    }
    public function destroy(proposal $proposal)
    {
        $proposal->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'proposal has been deleted',
        ], 200);
    }
}
