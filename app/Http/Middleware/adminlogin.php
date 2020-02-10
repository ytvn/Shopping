<?php

namespace App\Http\Middleware;

use Closure;

class adminlogin
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
          // session_unset();
          if(isset($_COOKIE['tokenadmin'])) {
            // return "fdsf";
            // return $_COOKIE['token'];
            if(verifyJWT($_COOKIE['tokenadmin']))
                return $next($request);
        } 

        return redirect()->route('adminLoginPage'); 
    }
}
