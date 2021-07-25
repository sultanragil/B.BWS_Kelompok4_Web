<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Bookmark
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
        $bookmark = DB::select('select * from bookmark where user_id = ?', [Auth::user()->id]);
        if($bookmark){
            return $next($request);
        }

        return redirect('lpage')->with('error',"You don't have access.");
    }
}
