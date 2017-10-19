<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminMiddleware
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
        $usertype=Auth::user()->usertype;
        
                    if ( $usertype !='nhazi')
                    {
                        return back()->with('error','Access Not Granted');            
                    }
                    else
                    {
                        return $next($request);
                    }
        //return $next($request);
    }
}
