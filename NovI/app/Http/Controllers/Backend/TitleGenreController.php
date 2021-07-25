<?php

namespace App\Http\Controllers\Backend;

use App\Post;
use App\GenreTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TitleGenreController extends Controller
{
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    //
    public function index(){
        $titleg = GenreTitle::orderBy('title_id')->paginate(5);
        return view('backend.titleg.index', compact('titleg'));
    }
    public function create(){
        $titleg = null;
        $title = DB::table('title')->get();
        $genre = DB::table('genre')->get();
        return view('backend.titleg.create', compact('title','genre'));
    }
    public function store(Request $request){
        $request->validate([
            'title_id' => 'required',
            'genre_id' => 'required',
            //'tts' => 'required',
            //'title_id' => 'required'
        ]);

        $titleg = new GenreTitle;
        $titleg->title_id = $request->title_id;
        $titleg->genre_id = $request->genre_id;
        //$titleg->chapter_tts = $request->tts;
        //$titleg->title_id = $request->title_id;
        $titleg->save();
        return redirect()->route('titleg.index')->with('success','Genre Title has been created successfully.');
    }
    public function edit(GenreTitle $titleg){
        $title = DB::table('title')->get();
        $genre = DB::table('genre')->get();
        return view('backend.titleg.edit',compact('titleg','title','genre'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'title_id' => 'required',
            'genre_id' => 'required',
            //'tts' => 'required',
            //'title_id' => 'required'
        ]);
        $titleg = GenreTitle::find($id);
        $titleg->title_id = $request->title_id;
        $titleg->genre_id = $request->genre_id;
        //$titleg->chapter_tts = $request->tts;
        //$titleg->title_id = $request->title_id;
        $titleg->save();
        return redirect()->route('titleg.index')->with('success','Title Genre has been updated successfully');
    }
    public function destroy(GenreTitle $titleg)
    {
        $titleg->delete();

        return redirect()->route('titleg.index')
                        ->with('success','Title Genre has been deleted successfully');
    }
}
