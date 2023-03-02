<?php

namespace App\Http\Controllers\Office\Hrm;

use App\Http\Controllers\Controller;
use App\Models\HRM\Document;
use App\Models\HRM\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        $position = Position::all();
        return view('pages.office.hrm.document.input', [
            'data' => new Document(),
            'position' => $position,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'position_id' => 'required',
            'name' => 'required',
            'attachment' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $document = new Document;
        $document->position_id = $request->position_id;
        $document->name = $request->name;
        if (request()->file('attachment')){
            $file = request()->file('attachment')->store('files/document/attachment');
            $document->attachment = $file;
        } else {
            $document->attachment = $document->attachment;
        }
        if($request->is_private != null){
            $document->is_private = 'y';
        }else{
            $document->is_private = 'n';
        }
        $document->desc = $request->desc;
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
        $position = Position::all();
        return view('pages.office.hrm.document.input', [
            'data' => $document,
            'position' => $position,
        ]);
    }

    public function update(Request $request,Document $document)
    {
        $validator = Validator::make($request->all(), [
            'position_id' => 'required',
            'name' => 'required',
            'attachment' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $document->position_id = $request->position_id;
        $document->name = $request->name;
        if (request()->file('attachment')){
            if($document->logo != null){
                Storage::delete($document->logo);
            }
            $file = request()->file('attachment')->store('files/document/attachment');
            $document->attachment = $file;
        } else {
            $document->attachment = $document->attachment;
        }
        if($request->is_private != null){
            $document->is_private = 'y';
        }else{
            $document->is_private = 'n';
        }
        $document->desc = $request->desc;
        $document->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Updated',
        ]);
    }

    public function destroy(Document $document)
    {
        Storage::delete($document->attachment);
        $document->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Deleted',
        ]);
    }

    public function downloadAttachment($id)
    {
        $document  = Document::findOrFail($id);
        try {
            return Storage::download($document->attachment);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
}
