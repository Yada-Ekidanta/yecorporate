<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index()
    {
        return view('pages.vendor.auth.main');
    }
    public function do_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        if(Auth::guard('vendors')->attempt(['email' => $request->email, 'password' => $request->password, 'st' => 'a'], $request->remember))
        {
            return response()->json([
                'alert' => 'success',
                'message' =>  'Welcome back '. Auth::guard('vendors')->user()->name,
            ]);
        }else{
            return response()->json([
                'alert' => 'error',
                'message' => 'Sorry, looks like there are some errors detected, please try again.',
            ]);
        }
    }
    public function register()
    {
        return view('pages.vendor.auth.register');
    }
    public function do_register(Request $request)
    {
        // 
    }
    public function forgot()
    {
        return view('pages.vendor.auth.forgot');
    }
    public function do_forgot(Request $request)
    {
        // 
    }
    public function reset($token)
    {
        // 
    }
    public function do_reset(Request $request)
    {
        // 
    }
    public function do_logout()
    {
        $vendor = Auth::guard('vendors')->user();
        Auth::logout($vendor);
        return redirect()->route('office.auth.index');
    }
}
