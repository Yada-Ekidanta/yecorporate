<?php

namespace App\Http\Controllers\Office\Finance\Presale;

use App\Http\Controllers\Controller;
use App\Models\Finance\Presale\RetainerItems;
use App\Models\Finance\Presale\Retainers;
use App\Models\Master\Client;
use App\Models\Master\IncomeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RetainersController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Retainers::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.presale.retainers.list', compact('collection'));
        }
        return view('pages.office.finance.presale.retainers.main');
    }
    public function create()
    {
        $clients = Client::orderBy('name', 'asc')->get();
        $retainers_number = $this->retainersnumber();
        $categories = IncomeType::orderBy('name', 'asc')->get();

        return view('pages.office.finance.presale.retainers.input', ['categories' => $categories, 'retainers_number' => $retainers_number, 'clients' => $clients, 'data' => new Retainers]);
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
        $retainer = new Retainers;
        $retainer->retainer_id = $this->retainersnumber();
        $retainer->client_id = $request->client_id;
        $retainer->issue_date = $request->issue_date;
        $retainer->category_id = $request->category_id;
        $retainer->discount_apply = isset($request->discount_apply) ? 1 : 0;
        $retainer->created_by = 1;
        $retainer->save();

        foreach ($request->kt_docs_repeater_basic as $key => $value) {
            $retainerItems = new RetainerItems;
            $retainerItems->retainer_id = $retainer->id;
            $retainerItems->name = $value['name'];
            $retainerItems->qty = $value['qty'];
            $retainerItems->tax = $value['tax'];
            $retainerItems->discount = $value['discount'];
            $retainerItems->price = $value['price'];
            $retainerItems->desc = $value['desc'];
            $retainerItems->save();
        }
        return response()->json([
            'alert' => 'success',
            'message' => 'Retainers has been saved',
        ], 200);
    }
    public function show(Retainers $Retainers)
    {
        //
    }
    public function edit(Retainers $Retainers)
    {
        $clients = Client::orderBy('name', 'asc')->get();
        $retainers_number = $this->retainersnumber();
        $categories = IncomeType::orderBy('name', 'asc')->get();

        return view('pages.office.finance.presale.retainers.input', ['categories' => $categories, 'retainers_number' => $retainers_number, 'clients' => $clients, 'data' => $Retainers]);
    }
    public function update(Request $request, Retainers $Retainers)
    {
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $Retainers->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Retainers has been updated',
        ], 200);
    }
    public function destroy(Retainers $Retainers)
    {
        $Retainers->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Retainers has been deleted',
        ], 200);
    }
    public function retainersnumber()
    {
        // $latest = Utility::getValByName('proposal_starting_number');
        $latest = Retainers::where('created_by', '=', 1)->latest()->first();
        if (!$latest) {
            return 1;
        }

        return $latest->retainer_id + 1;
        return $latest;
    }
}
