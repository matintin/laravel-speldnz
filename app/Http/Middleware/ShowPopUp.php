<?php

namespace App\Http\Middleware;

use Closure;

class ShowPopUp
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

        if(!\Session::has("showPopUp")){
           \Session::put("showPopUp","true");
        }else{
            \Session::put("showPopUp","false");
        }
        return $next($request);
    }
}
