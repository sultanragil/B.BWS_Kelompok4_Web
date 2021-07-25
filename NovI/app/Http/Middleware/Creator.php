<?php

namespace App\Http\Middleware;

use App\Title;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Creator
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
        $novel = DB::select('select * from title where user_id = ?', [Auth::user()->id]);
        if($novel){
            return $next($request);
        }

        return redirect('lpage')->with('error',"You don't have access.");
    }
}
