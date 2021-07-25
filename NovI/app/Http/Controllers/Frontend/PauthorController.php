<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;
use App\Http\Controllers\Controller;

class PauthorController extends Controller
{
    public function index()
    {
        $author = DB::table('users')
        // ->where('job', '=', null)
        ->orderBy('name')
        ->paginate(6);

        return view('frontend.list-author-page',(compact('author')));
    }
}
