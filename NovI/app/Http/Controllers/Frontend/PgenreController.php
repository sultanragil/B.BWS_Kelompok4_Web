<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PgenreController extends Controller
{
    public function index()
    {
        $fgenre = DB::table('genre')->get();
        return view('frontend.list-genre-page',compact('fgenre'));
    }
}
