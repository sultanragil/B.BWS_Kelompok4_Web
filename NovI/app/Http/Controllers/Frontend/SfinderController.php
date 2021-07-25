<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SfinderController extends Controller
{
    public function index()
    {
        return view('frontend.search-page');
    }

    public function show(Request $request)
    {
        $search = $request->get('search');

        $query = DB::table('users')
        ->join('title', 'users.id', 'title.user_id')
        ->select('users.*', 'title.*', 'users.id as userId', 'users.name as userName')
        ->where('title.name', 'LIKE', '%' .$search. '%')
        ->orWhere('users.name', 'LIKE', '%' .$search. '%')
        ->orderBy('title.name', 'asc')
        ->paginate(6);

        return view('frontend.search-page', compact('query'));
    }
}
