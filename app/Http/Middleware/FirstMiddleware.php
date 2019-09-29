<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class FirstMiddleware
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
        if (!auth()->check()) {
            return redirect(route('login'));
        }

        if (auth()->user()->email === "example@example.com") {
            return $next($request);
        } else {
            return response('You can not access this page!');
        }
    }
}
