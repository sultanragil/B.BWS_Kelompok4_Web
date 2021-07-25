<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GdescController extends Controller
{
    // public function index(Request $request, $id)
    // {
    //     $genre = DB::table('genre')
    //     ->Where('id','=', $id)
    //     ->get();

    //     return view('frontend.gdesc-page',compact('genre'));
    // }
    public function index()
    {
        // $fgenre = DB::table('genre')->get();
        $gdesc = Genre::all();
        return view('frontend.list-genre-page',compact('gdesc'));
    }
    public function show($id){
        $gdesc = Genre::find($id);
        $list = DB::table('genre_title')
        ->join('genre', 'genre_title.genre_id', 'genre.id')
        ->join('title', 'genre_title.title_id', 'title.id')
        ->select('title.*', 'genre.*', 'genre.id')
        ->where('genre_id', '=', $id)
        ->paginate(6);
        return view('frontend.gdesc-page', compact('gdesc','list'));
    }
}
