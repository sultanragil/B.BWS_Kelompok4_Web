<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use App\Chapter;

use App\Comment;

use App\Reply;

class FchapterController extends Controller
{
    //
    public function index()
    {
        $chapter = Chapter::all();

        return view('frontend.chapter-page',compact('chapter'));
    }

    public function show($id){

        $chapter = Chapter::find($id);

        $comment = DB::table('comment')
        ->join('users', 'comment.user_id', '=', 'users.id')
        ->select('comment.*', 'users.name', 'users.foto')
        ->where('chapter_id', '=', $id)
        ->orderBy('created_at', 'asc')
        ->get();

        $count = DB::table('comment')
        ->where('chapter_id', '=', $id)
        ->count();


        //$reply = DB::table('replies')
        //->join('users', 'tag_title.tag_id', '=', 'tag.id')
        //->join('title', 'tag_title.title_id', '=', 'title.id')
        //->select('tag_title.*', 'tag.tag_name',)
        //->where('title_id', '=', $id)
        //->get();
        return view('frontend.chapter-page', compact('chapter','comment','count'));
    }
}
