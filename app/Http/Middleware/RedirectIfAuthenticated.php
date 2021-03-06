<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
//        if ($guard == "auth:userlogin" && Auth::guard($guard)->check()) {
//
//            return redirect('/user/login');
//        }
//        if (Auth::guard($guard)->check()) {
//            return redirect('/admin/dashboard');
//        }
        switch ($guard){
            case 'userlogin':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('index');
                }
                break;
            default:
                        if (Auth::guard($guard)->check()) {
            return redirect('/admin/dashboard');
        }
                        break;

       }

        return $next($request);
    }
}
