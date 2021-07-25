<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Genre;
use App\Http\Controllers\Controller;
use App\GenreTitle;
use App\Title;

class GenreTitleController extends Controller
{
    //
    public function index(){
        return view('frontend.add-genre-page');
    }

    public function create($id)
    {

        return view('frontend.add-genre-page');
    }

    public function show($id)
    {
        $genre = DB::table('genre')
        ->get();
        $novel = Title::find($id);
        return view('frontend.add-genre-page',compact('novel','genre'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_id' => 'required',
            'genre_id' => 'required',
        ]);

        $post = new GenreTitle;

        $post->title_id = $request->title_id;
        $post->genre_id = $request->genre_id;

        $post->save();

        return redirect()->url('profu.index');
    }

}
