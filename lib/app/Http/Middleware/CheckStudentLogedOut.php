<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckStudentLogedOut
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
        if(Auth::guard('student')->guest()){
            return redirect()->intended('student/login');
        }
        return $next($request);
    }
}
