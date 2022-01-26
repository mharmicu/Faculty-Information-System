<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthUser
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
        if(session('usertype') !== 'ADM')
        {
            return redirect()->route('dashboard');
            //return $next($request);
        }
        
        elseif (session('usertype') === 'ADM'){
           // return redirect()->route('dashboard');
           return $next($request);
           // session()->flush();
            
        }
        
        return $next($request);
    }
}
