<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Master\DocumentOption;
use Illuminate\Support\Facades\Validator;

class DocumentOptionController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = DocumentOption::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.document_option.list', compact('collection'));
        }
        return view('pages.office.master.document_option.main');
    }
    public function create()
    {
        return view('pages.office.master.document_option.input', ['data' => new DocumentOption]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $documentOption = new DocumentOption;
        $documentOption->name = $request->name;
        $documentOption->is_required = $request->is_required;
        $documentOption->created_by = Auth::guard('employees')->user()->id;
        $documentOption->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Option Created',
        ]);
    }
    public function show(DocumentOption $documentOption)
    {
        //
    }
    public function edit(DocumentOption $documentOption)
    {
        return view('pages.office.master.document_option.input', ['data' => $documentOption]);
    }
    public function update(Request $request, DocumentOption $documentOption)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $documentOption->name = $request->name;
        $documentOption->is_required = $request->is_required;
        $documentOption->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Option Updated',
        ]);
    }
    public function destroy(DocumentOption $documentOption)
    {
        $documentOption->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Option Deleted',
        ]);
    }
}
