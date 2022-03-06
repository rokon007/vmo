<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if (auth()->user()->is_superuser==1) {
            return $next($request);
        }
        elseif(auth()->user()->is_superuser==NULL){
             return redirect('home')->with('error','You can not access the admin area');
        }

        //not admin redirection
        return redirect('adminlogin')->with('error','Sorry your session is over !');
        
    }
}

