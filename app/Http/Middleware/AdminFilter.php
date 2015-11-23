<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class AdminFilter
{
    protected $guard;

    public function __construct(Guard $guard) {
        $this->guard = $guard;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if($this->guard->user()->role = null) {


            if($request->ajax()) {

                return response('Unauthorized.', 401);
                
            } else {

                return redirect()->guest('/');
            }
        }

        return $next($request);
    }
}
