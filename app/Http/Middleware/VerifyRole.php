<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      
      //dump(auth()->user()->rol_id);

       if(auth()->user()->rol_id == 1) {
          // dump("julian");
         return $next($request);
         }else {
           // dump("andres");
            return redirect('/caja');
        }

       // return $next($request);
    }
}
