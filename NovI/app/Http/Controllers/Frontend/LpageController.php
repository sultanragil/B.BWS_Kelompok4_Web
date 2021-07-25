<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Chapter;
use App\Carousel;
use App\Http\Controllers\Controller;



class LpageController extends Controller
{
    public function index()
    {
        $carousel = Carousel::all();

        $popular = DB::table('title')
        ->orderBy('favorit', 'desc')
        ->get();

        $latest = DB::table('title')
        ->join('chapter', 'title.id', '=', 'chapter.title_id')
        ->select('title.*', 'title.id as titleId', 'chapter.*', 'chapter.id as chapterId')
        ->orderBy('chapterId','desc')
        ->paginate(9);

        return view('frontend.landing-page',compact('carousel','popular','latest'));
    }


}
