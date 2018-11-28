<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        $permittedRoles = array_slice(func_get_args(), 2);
        $userRoles = \Auth::user()->roles->pluck('id')->toArray();
        $passedRoles = array_intersect($permittedRoles, $userRoles);

        if (count($passedRoles) > 0) {
            return $next($request);
        } else {
            session()->flash('message', 'Your comment saved successfuly');
            return redirect('/home');
        }
    }
}
