<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\InvoicePM;
use App\Models\PM\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InvoicePMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = InvoicePM::where('client','LIKE','%'.$request->keyword.'%')->paginate(3);;
            return view('pages.office.pm.invoice.list', compact('collection'));
        }

        return view('pages.office.pm.invoice.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::get();
        return view('pages.office.pm.invoice.input', ['data' => new InvoicePM, 'project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     // 'title' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'alert' => 'error',
        //         'message' => $validator->errors()->first(),
        //     ], 200);
        // }

        $invoice = new InvoicePM;
        $invoice->project_id = $request->project_id;
        $invoice->client = $request->client;
        $invoice->due_date = $request->due_date;
        $invoice->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Invoice has been created',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = InvoicePM::find($id);
        return view('pages.office.pm.invoice.show', ['data' => $invoice]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = InvoicePM::find($id);
        $project = Project::get();
        return view('pages.office.pm.invoice.input', ['data' => $invoice, 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     // 'title' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'alert' => 'error',
        //         'message' => $validator->errors()->first(),
        //     ], 200);
        // }

        $invoice = InvoicePM::find($id);
        $invoice->project_id = $request->project_id;
        $invoice->client = $request->client;
        $invoice->due_date = $request->due_date;
        $invoice->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Invoice has been updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = InvoicePM::find($id);
        $invoice->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Invoice has been deleted',
        ], 200);
    }
}
