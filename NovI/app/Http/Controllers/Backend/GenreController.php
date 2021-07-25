<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Genre;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    public function index(){
        $genre =  Genre::orderBy('id')->paginate(5);
        return view('backend.genre.index',compact('genre'));
    }
    public function create()
    {
        $genre = null;
        return view('backend.genre.create',compact('genre'));
    }
    public function store(Request $request){
        $request->validate([
            'genre' => 'required',
            'description' => 'required',
        ]);
        $genre = new Genre;
        $genre->genre_name = $request->genre;
        $genre->genre_desc = $request->description;
        $genre->save();

        return redirect()->route('genre.index')->with('success','Genre berhasil Ditambahkan');
    }
    public function edit(Genre $genre){
        return view('backend.genre.edit', compact('genre'));
    }
    public function update(Request $request ,$id){
        $request->validate(([
            'genre' => 'required',
            'description' => 'required',
        ]));

        $genre = Genre::find($id);

        $genre->genre_name = $request->genre;
        $genre->genre_desc = $request->description;
        $genre->save();
        return redirect()->route('genre.index')->with('success','Tag berhasil edit');
    }
    public function destroy(Genre $genre){
        $genre->delete();

        return redirect()->route('genre.index')
                        ->with('success','Genre has been deleted successfully');
    }
}
