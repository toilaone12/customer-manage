<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Illuminate\Support\Facades\Cookie;
use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
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
        $id = Cookie::get('id');
        // dd(1);
        if(isset($id) && $id){
            return $next($request);
        }else{
            return redirect()->route('account.login');
        }
    }
}
