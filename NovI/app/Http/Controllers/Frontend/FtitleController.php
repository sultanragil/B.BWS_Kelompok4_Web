<?php

namespace App\Http\Controllers\Frontend;

use App\Title;
use App\Chapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FtitleController extends Controller
{
    public function index()
    {
        // $fgenre = DB::table('genre')->get();
        $title = Title::all();
        return view('frontend.title-page',compact('title'));
    }
    public function show($id){

        $title = Title::find($id);
        $chapter = DB::table('chapter')
        ->where('title_id', '=', $id)
        ->orderBy('created_at','desc')
        ->paginate(5);
        $genre = DB::table('genre_title')
        ->join('genre', 'genre_title.genre_id', '=', 'genre.id')
        ->join('title', 'genre_title.title_id', '=', 'title.id')
        ->select('genre_title.*', 'genre.genre_name')
        ->where('title_id', '=', $id)
        ->get();
        $tag = DB::table('tag_title')
        ->join('tag', 'tag_title.tag_id', '=', 'tag.id')
        ->join('title', 'tag_title.title_id', '=', 'title.id')
        ->select('tag_title.*', 'tag.tag_name')
        ->where('title_id', '=', $id)
        ->get();
        return view('frontend.title-page', compact('title','chapter','genre','tag'));
    }



    //function displayDetail($id) {
    //    $title = Title::find($id);
    //    $chapter = Chapter::where('title_id', '$id');
    //    return view('displayDetail', compact('title', 'chapter'));
    //}
}
