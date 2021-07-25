<?php

namespace App\Http\Middleware;

use Closure;

class Job
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
    public function handle($request, Closure $next)
    {
        if(auth()->user()->job == 1){
            return $next($request);
        }

        return redirect('login')->with('error',"You don't have admin access.");
    }
}
