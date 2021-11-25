<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class StudentMiddleware
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
      // dd('hit');

       if(Session::get('LoginStudent')){
            return $next($request);
        }
         else{
            return redirect()->route('student.login');
        }
       
        
        
    }
}
