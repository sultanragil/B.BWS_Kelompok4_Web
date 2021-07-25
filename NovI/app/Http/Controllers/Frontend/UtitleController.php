<?php

namespace App\Http\Controllers\Frontend;

use App\Genre;
use App\GenreTitle;
use Illuminate\Http\Request;
use App\Title;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UtitleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','creator']);
    }
    public function index()
    {
        return view('frontend.u-title-page');
    }
    public function create(){
        return view('frontend.add-novel-page');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'favorit' => 'required',
            'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'sinopsis' => 'required',
            'pengarang' => 'required',
        ]);

        // $path = $request->file('image')->store('public/images');
        //mengambil data file yang diupload
        $file           = $request->file('cover');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('images/',$file->getClientOriginalName());

        $post = new Title;

        $post->name = $request->judul;
        $post->favorit = $request->favorit;
        $post->sinopsis = $request->sinopsis;
        $post->cover = $nama_file;
        $post->user_id = $request->pengarang;


        $post->save();


        return redirect()->route('profu.index',compact('novel'));
    }
    public function show($id)
    {
        $novel = Title::find($id);
        $genre_title = GenreTitle::where('title_id',$novel->id);
        $user = DB::select('select * from users where id = ?', [$novel->user_id]);
        $chapter = DB::table('chapter')->where('title_id', [$novel->id])->paginate(5);
        $genre = Genre::all();
        return view('frontend.u-title-page',compact('novel','user','chapter','genre','genre_title'));
    }
}
