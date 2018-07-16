<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\{
    Support\Facades\Auth, Support\Facades\Session
};

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin) {
            return $next($request);
        }
        // We got a bad-ass over here, log that person out
        Auth::logout();
        return redirect('https://youtu.be/dQw4w9WgXcQ');
    }
}
