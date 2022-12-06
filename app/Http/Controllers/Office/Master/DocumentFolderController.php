<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Master\DocumentFolder;
use Illuminate\Support\Facades\Validator;

class DocumentFolderController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = DocumentFolder::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.document_folder.list', compact('collection'));
        }
        return view('pages.office.master.document_folder.main');
    }
    public function create()
    {
        return view('pages.office.master.document_folder.input', ['data' => new DocumentFolder]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'parent' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $documentFolder = new DocumentFolder;
        $documentFolder->name = $request->name;
        $documentFolder->parent = $request->parent;
        $documentFolder->desc = $request->desc;
        $documentFolder->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Folder Created',
        ]);
    }
    public function show(DocumentFolder $documentFolder)
    {
        //
    }
    public function edit(DocumentFolder $documentFolder)
    {
        return view('pages.office.master.document_folder.input', ['data' => $documentFolder]);
    }
    public function update(Request $request, DocumentFolder $documentFolder)
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
        $documentFolder->name = $request->name;
        $documentFolder->parent = $request->parent;
        $documentFolder->desc = $request->desc;
        $documentFolder->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Folder Updated',
        ]);
    }
    public function destroy(DocumentFolder $documentFolder)
    {
        $documentFolder->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Folder Deleted',
        ]);
    }
}
