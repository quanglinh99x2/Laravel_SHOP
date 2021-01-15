<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginCustomer
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
        if(!empty($request->session()->get('id_customer'))){
            return $next($request);
        }
        else{
            return redirect()->route('home.index');
        }
    }
}
