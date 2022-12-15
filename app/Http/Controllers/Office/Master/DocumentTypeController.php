<?php

namespace App\Http\Controllers\Office\Master;

use Illuminate\Http\Request;
use App\Models\Master\DocumentType;
use App\Http\Controllers\Controller;
use App\Models\HRM\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DocumentTypeController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = DocumentType::where('name','LIKE','%'.$request->keyword.'%')->paginate();;
            return view('pages.office.master.document_type.list', compact('collection'));
        }
        return view('pages.office.master.document_type.main');
    }
    public function create()
    {
        $employees = Employee::all();
        return view('pages.office.master.document_type.input', [
            'data' => new DocumentType,
            'employees' => $employees,
        ]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'employee_id' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $document_type = new DocumentType;
        $document_type->name = $request->name;
        $document_type->employee_id = $request->employee_id;
        $document_type->created_by = Auth::guard('employees')->user()->id;
        $document_type->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Type Created',
        ]);
        
    }
    public function show(DocumentType $documentType)
    {
        //
    }
    public function edit(DocumentType $documentType)
    {
        $employees = Employee::all();
        return view('pages.office.master.document_type.input', [
            'data' => $documentType,
            'employees' => $employees,
        ]);
    }
    public function update(Request $request, DocumentType $documentType)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'employee_id' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $documentType->name = $request->name;
        $documentType->employee_id = $request->employee_id;
        $documentType->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Type Updated',
        ]);
    }
    public function destroy(DocumentType $documentType)
    {
        $documentType->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Document Type Deleted',
        ]);
    }
}
