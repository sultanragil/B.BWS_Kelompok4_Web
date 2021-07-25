<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PtagController extends Controller
{
    public function index()
    {
        $ftag = DB::table('tag')->get();
        return view('frontend.list-tag-page',compact('ftag'));
    }
}
