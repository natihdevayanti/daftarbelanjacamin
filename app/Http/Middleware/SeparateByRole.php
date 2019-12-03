<?php

namespace App\Http\Middleware;

use Closure;

class SeparateByRole
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
        //jika dia buyer, maka akan saya redirect ke buyer dan sebaliknya
        if (Auth::user()->role == 'buyer'){
            return redirect('buyer');
        } 
        elseif(Auth::user()->role =='admin'){
            return redirect ('admin');
        }
        elseif(Auth::user()->role =='courier'){
            return redirect ('courier');
        }
        return redirect ('/');
       // return $next($request);
    }
}