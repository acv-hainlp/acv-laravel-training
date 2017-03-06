<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
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
        $user = request()->user(); //receive request //note: Add to Kernel.php
        
        if($user && $user->email == 'phihai91@gmail.com')
        {   
           return $next($request);
           
        }

        dd('you are not admin');
        
    }
}
