<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Is_Claimed
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
		if(auth()->user()==NULL){
			return redirect('home')->with('error','Sorry your session is over !');
		}else{
        if (auth()->user()->is_superuser==2) {
            return $next($request);
        }
        elseif(auth()->user()->is_superuser==NULL){
             return redirect('home')->with('error','You can not access the admin area');
        }
		}

        //not admin redirection
        return redirect('adminlogin')->with('error','Sorry your session is over !');
        
    }
}
