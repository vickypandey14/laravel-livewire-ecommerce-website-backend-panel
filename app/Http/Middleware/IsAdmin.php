<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        $user = Auth::user();

        // dd($user);
     
        if(is_null($user)){
            // it means user is not loginned            
            return redirect()->route('login');
        }
        else{
            // if user is loginned then check user is admin or user
            if($user->user_type!="admin"){
                return redirect()->route('dashboard'); 
            } 
            return $next($request);           
        }
    }
}
