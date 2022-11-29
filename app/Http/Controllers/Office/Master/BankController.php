<?php

namespace App\Http\Controllers\Office\Master;

use App\Models\Master\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Bank::where('name','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.master.bank.list', compact('collection'));
        }
        return view('pages.office.master.bank.main');
    }
    public function create()
    {
        return view('pages.office.master.bank.input', ['data' => new Bank]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:100',
            'name' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $bank = new Bank;
        $bank->code = $request->code;
        $bank->name = $request->name;
        $bank->is_activated = 0;
        $bank->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Bank Created',
        ]);
    }
    public function show(Bank $bank)
    {
        return view('pages.office.master.bank.show', ['data' => $bank]);
    }
    public function edit(Bank $bank)
    {
        return view('pages.office.master.bank.input', ['data' => $bank]);
    }
    public function update(Request $request, Bank $bank)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:100',
            'name' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $bank->code = $request->code;
        $bank->name = $request->name;
        $bank->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Bank Updated',
        ]);
    }
    public function destroy(Bank $bank)
    {
        $bank->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Bank Deleted',
        ]);
    }
}
