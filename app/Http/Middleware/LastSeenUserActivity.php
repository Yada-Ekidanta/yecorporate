<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\CRM\Client;
use App\Models\HRM\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Attendance\InNotification;
use App\Notifications\Attendance\OutNotification;

class LastSeenUserActivity
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('clients')->check()) {
            $expireTime = Carbon::now()->addMinute(1); // keep online for 1 min
            Cache::put('is_client_online'.Auth::guard('clients')->user()->id, true, $expireTime);

            //Last Seen
            Client::where('id', Auth::guard('clients')->user()->id)->update(['last_seen' => Carbon::now()]);
        }elseif (Auth::guard('employees')->check()) {
            $expireDay = Carbon::now()->addDay(1); // keep online for 1 min
            $expireTime = Carbon::now()->addMinute(1); // keep online for 1 min
            Cache::put('is_employee_online'.Auth::guard('employees')->user()->id, true, $expireTime);
            Cache::put('is_employee_onlen'.Auth::guard('employees')->user()->id, true, $expireDay);

            //Last Seen
            Employee::where('id', Auth::guard('employees')->user()->id)->update(['last_seen' => Carbon::now()]);
        }
        return $next($request);
    }
}
