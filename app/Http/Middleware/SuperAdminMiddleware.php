<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->access_label == 1)
        {
            return $next($request);
        }
        else
        {
            return redirect('/dashboard')->with('message','Sorry you are not authorize to access this tab');
        }
    }
}
