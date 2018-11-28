<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Support\Facades\Redirect;

class UserApproved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->approved) {
            return $next($request);
        } else {
            return $request->expectsJson()
                ? abort(403, 'Administrator has to approve your profile first.')
                : Redirect::route('confirmation-stand-by');
        }
    }
}
