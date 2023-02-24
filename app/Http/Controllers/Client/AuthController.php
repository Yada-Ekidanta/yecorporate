<?php

namespace App\Http\Controllers\Client;

use App\Models\CRM\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Master\UserVerify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Setting\PasswordReset;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Auth\Client\ResetPasswordNotification;
use App\Notifications\Auth\Client\PasswordChangedNotification;
use App\Notifications\Auth\EmployeeRegisterNotification;
use App\Notifications\Auth\RegisterEmployeeNotification;

class AuthController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index()
    {
        return view('pages.client.auth.main');
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
        if(Auth::guard('clients')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return response()->json([
                'alert' => 'success',
                'message' =>  'Welcome back '. Auth::guard('clients')->user()->name,
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
        return view('pages.client.auth.register');
    }
    public function do_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|unique:employees|min:9|max:13',
            'email' => 'required|email|unique:clients',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $client = new Client;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->password = Hash::make($request->password);
        $client->save();
        $token = Str::random(64);
        UserVerify::create([
            'client_id' => $client->id,
            'token' => $token
        ]);
        Notification::send($client, new EmployeeRegisterNotification($client, $token));
        return response()->json([
            'alert' => 'success',
            'message' => 'Thanks for join us '. Str::title($request->first) . ' ' . Str::title($request->last),
        ]);
    }
    public function forgot()
    {
        return view('pages.client.auth.forgot');
    }
    public function do_forgot(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:clients',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $client = Client::where('email',$request->email)->first();
        $token = Str::random(64);
        PasswordReset::create([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $data = array(
            'token' => $token,
            'client' => $client
        );
        Notification::send($data['client'], new ResetPasswordNotification($data));
        return response()->json([
            'alert' => 'success',
            'message' => 'We have e-mailed your password reset link!',
        ]);
    }
    public function reset($token)
    {
        return view('pages.client.auth.new_password',['token' => $token]);
    }
    public function do_reset(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required|exists:password_resets',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $updatePassword = PasswordReset::where(['token' => $request->token])->first();
        if (!$updatePassword) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Invalid token!',
            ]);
        }
        Client::where('email', $updatePassword->email)->update(['password' => Hash::make($request->password)]);
        $users = Client::where('email', $updatePassword->email)->first();
        // PasswordReset::where(['email' => $updatePassword->email])->delete();
        // dd($users);
        Notification::send($users, new PasswordChangedNotification($users));
        return response()->json([
            'alert' => 'success',
            'message' => 'Your password has been changed!',
        ]);
    }
    public function do_logout()
    {
        $client = Auth::guard('clients')->user();
        Auth::logout($client);
        return redirect()->route('client.auth.index');
    }
}
