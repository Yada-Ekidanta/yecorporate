<?php

namespace App\Http\Controllers\Office\Finance\Presale;

use App\Http\Controllers\Controller;
use App\Models\Finance\Presale\Proposal;
use App\Models\Finance\Presale\ProposalProduct;
use App\Models\Master\Client;
use App\Models\Master\IncomeType;
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

            return view('pages.office.finance.presale.proposal.list', compact('collection'));
        }
        return view('pages.office.finance.presale.proposal.main');
    }
    public function create()
    {
        $categories = IncomeType::orderBy('name', 'asc')->get();
        $proposal_number = $this->proposalNumber();
        $clients = Client::orderBy('name', 'asc')->get();

        // return view('pages.office.finance.presale.proposal.input', ['clients' => $clients, 'productservices' => $productservices, 'proposal_number' => $proposal_number, 'categories' => $categories, 'data' => new Proposal]);
        return view('pages.office.finance.presale.proposal.input', ['clients' => $clients, 'categories' => $categories, 'data' => new Proposal, 'proposal_number' => $proposal_number]);
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
        $proposal->proposal_id = $this->proposalNumber();
        $proposal->client_id = $request->client_id;
        $proposal->issue_date = $request->issue_date;
        $proposal->category_id = $request->category_id;
        $proposal->discount_apply = isset($request->discount_apply) ? 1 : 0;
        $proposal->created_by = 1;
        $proposal->save();

        foreach ($request->kt_docs_repeater_basic as $key => $value) {
            $proposalProduct = new ProposalProduct;
            $proposalProduct->proposal_id = $proposal->id;
            $proposalProduct->name = $value['name'];
            $proposalProduct->qty = $value['qty'];
            $proposalProduct->tax = $value['tax'];
            $proposalProduct->discount = $value['discount'];
            $proposalProduct->price = $value['price'];
            $proposalProduct->desc = $value['desc'];
            $proposalProduct->save();
        }
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
        $categories = IncomeType::orderBy('name', 'asc')->get();
        $proposal_number = ($proposal->proposal_id);
        $clients = Client::orderBy('name', 'asc')->get();
        return view('pages.office.finance.presale.proposal.input', ['clients' => $clients, 'proposal_number' => $proposal_number, 'categories' => $categories, 'data' => $proposal]);
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
    public function proposalNumber()
    {
        // $latest = Utility::getValByName('proposal_starting_number');
        $latest = Proposal::where('created_by', '=', 1)->latest()->first();
        if (!$latest) {
            return 1;
        }

        return $latest->proposal_id + 1;
        return $latest;
    }
}
