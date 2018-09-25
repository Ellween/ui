<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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


      if(Auth::check()){
        if(Auth::user()->type == 2){
          return redirect('/home');
        }

        else {
          return redirect('/');
        }
}        // if(Auth::user()->type == 2){
        //   return redirect('/admin/category');
        // }
        else {
          return redirect('/login');
        }
        return $next($request);

    }
}
