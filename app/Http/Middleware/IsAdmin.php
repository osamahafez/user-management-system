<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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

        // if the logged in user is not an admin then redirect him to home page as a guest
        if(auth()->check() && $request->user()->admin == 0) {
            return redirect()->guest('home');
        }

        return $next($request);
    }
}
