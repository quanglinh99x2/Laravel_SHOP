<?php

namespace App\Http\Middleware;

use App\Role;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLogin
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
        // return $next($request);
        if(Auth::check()){
            $check = 0;
            foreach(Auth::user()->roles as $item){
                // dd($item);
                if($item->name == "guest"){
                    $check =1;
                }
            }
            if($check == 1){
                Auth::logout();
                return redirect('/admin')->with('notification','Tài khoản khách không được truy cập !');

            }
            else{
                return $next($request);
            }
        }
        else{
            return redirect('/admin');
        }

    }
}
