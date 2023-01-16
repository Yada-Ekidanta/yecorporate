<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\HRM\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    public function __construct()
    {
        // 
    }
    
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Document::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.hrm.document.list', compact('collection'));
        }
        return view('pages.office.hrm.document.main');
    }

    public function create()
    {
        return view('pages.office.hrm.document.input', [
            'data' => new Document(),
        ]);
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
        $document = new Document;
        $document->name = $request->name;
        if($request->is_required != null){
            $document->is_required = 1;
        }else{
            $document->is_required = 0;
        }
        $document->created_by = Auth::guard('employees')->user()->id;
        $document->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Created',
        ]);
    }

    public function show(Document $document)
    {
        
    }

    public function edit(Document $document)
    {
        return view('pages.office.hrm.document.input', [
            'data' => new $document(),
        ]);
    }

    public function update(Request $request,Document $document)
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
        $document = new Document;
        $document->name = $request->name;
        if($request->is_required != null){
            $document->is_required = 1;
        }else{
            $document->is_required = 0;
        }
        $document->created_by = Auth::guard('employees')->user()->id;
        $document->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Updated',
        ]);
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Deleted',
        ]);
    }
}
