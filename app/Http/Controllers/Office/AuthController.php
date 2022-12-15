<?php

namespace App\Http\Controllers\Office;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use App\Models\Master\UserVerify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Setting\PasswordReset;
use Illuminate\Support\Facades\Cache;
use App\Models\HRM\EmployeeAttendance;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Attendance\InNotification;
use App\Notifications\Attendance\OutNotification;
use App\Notifications\Auth\ResetPasswordNotification;
use App\Notifications\Auth\PasswordChangedNotification;
use App\Notifications\Auth\EmployeeRegisterNotification;
use App\Notifications\Auth\RegisterEmployeeNotification;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:employees')->except('do_logout');
    }
    public function index()
    {
        return view('pages.office.auth.main');
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
        if(Auth::guard('employees')->attempt(['email' => $request->email, 'password' => $request->password, 'st' => 'a'], $request->remember))
        {
            // $cek = EmployeeAttendance::where('employee_id', Auth::guard('employees')->user()->id)->whereRaw('DATE(presence_at) = CURDATE()')->first();
            // if(!$cek){
            //     $absen = new EmployeeAttendance;
            //     $absen->employee_id = Auth::guard('employees')->user()->id;
            //     $absen->presence_at = date('Y-m-d H:i:s');
            //     $absen->save();
            // }
            // $user = Auth::guard('employees')->user();
            // Employee::where('id', Auth::guard('employees')->user()->id)->update(['last_seen' => Carbon::now()]);
            // $allEmployee = Employee::where('id','!=', Auth::guard('employees')->user()->id)->get();
            // foreach($allEmployee as $e){
            //     if(Cache::has('is_employee_online'. $e->id) == 1){
            //         Notification::send($e, new InNotification($e,$user));
            //     }
            // }
            return response()->json([
                'alert' => 'success',
                'message' =>  'Welcome back '. Auth::guard('employees')->user()->name,
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
        return view('pages.office.auth.register');
    }
    public function do_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|unique:employees|min:9|max:13',
            'email' => 'required|email|unique:employees',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee = new Employee;
        $employee->name = Str::title($request->first) . ' ' . Str::title($request->last);
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->department_id = 0;
        $employee->position_id = 0;
        $employee->st = 'a';
        $employee->password = Hash::make($request->password);
        $employee->save();
        $token = Str::random(64);
        $recepient = Employee::whereIn('position_id',[4,6,13,17])->get();
        foreach($recepient as $r){
            Notification::send($r, new RegisterEmployeeNotification($employee));
        }
        UserVerify::create([
            'employee_id' => $employee->id,
            'token' => $token
        ]);
        Notification::send($employee, new EmployeeRegisterNotification($employee, $token));
        return response()->json([
            'alert' => 'success',
            'message' => 'Thanks for join us '. Str::title($request->first) . ' ' . Str::title($request->last),
        ]);
    }
    public function forgot()
    {
        return view('pages.office.auth.forgot');
    }
    public function do_forgot(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:employees',
        ]);
        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $employee = Employee::where('email',$request->email)->first();
        $token = Str::random(64);
        PasswordReset::create([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $data = array(
            'token' => $token,
            'employee' => $employee
        );
        Notification::send($data['employee'], new ResetPasswordNotification($data));
        return response()->json([
            'alert' => 'success',
            'message' => 'We have e-mailed your password reset link!',
        ]);
    }
    public function reset($token)
    {
        return view('pages.office.auth.new_password',['token' => $token]);
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
        Employee::where('email', $updatePassword->email)->update(['password' => Hash::make($request->password)]);
        $users = Employee::where('email', $updatePassword->email)->first();
        // PasswordReset::where(['email' => $updatePassword->email])->delete();
        Notification::send($users, new PasswordChangedNotification($users));
        return response()->json([
            'alert' => 'success',
            'message' => 'Your password has been changed!',
        ]);
    }
    public function do_logout()
    {
        $employee = Auth::guard('employees')->user();
        Auth::logout($employee);
        return redirect()->route('office.auth.index');
    }
}
