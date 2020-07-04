<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckStudentLogedIn
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
        if(Auth::guard('student')->check()){
            return redirect()->intended('/');
        }
        return $next($request);
    }
}
