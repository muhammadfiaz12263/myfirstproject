<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        // dd($request->all());
        if($request->age >= 18){
            return redirect('/watch/movie/now');
        }
        else if($request->age < 18){
            return redirect('/watch/cartoons');
        }
        return $next($request);
    }
}
