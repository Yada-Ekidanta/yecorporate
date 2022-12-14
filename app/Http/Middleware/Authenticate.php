<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (request()->getHttpHost() === 'https://client.yadaekidanta.com') {
            if (! $request->expectsJson()) {
                return route('client.auth.index');
            }
        }
        elseif (request()->getHttpHost() === 'https://office.yadaekidanta.com') {
            if (! $request->expectsJson()) {
                return route('office.auth.index');
            }
        }
        elseif (request()->getHttpHost() === 'https://vendor.yadaekidanta.com') {
            if (! $request->expectsJson()) {
                return route('vendor.auth.index');
            }
        }
    }
}
