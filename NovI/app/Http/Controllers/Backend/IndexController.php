<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    public function index()
    {
        $users = DB::table('users')->where('job','=',null)->count();
        $genre = DB::table('genre')->count();
        $tag = DB::table('tag')->count();
        $chapter = DB::table('chapter')->count();
        $admin = DB::table('users')->where('job','=',1)->count();
        $title = DB::table('title')->count();
        $comment = DB::table('comment')->count();
        return view('backend.index',compact('genre','tag','chapter','users','title','comment','admin'));
    }
}
