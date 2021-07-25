<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class TdescController extends Controller
{
    public function index()
    {
        $tdesc = Tag::all();

        return view('frontend.list-tag-page',compact('tdesc'));
    }

    public function show($id){

        $tdesc = Tag::find($id);
        $list = DB::table('tag_title')
        ->join('tag', 'tag_title.tag_id', 'tag.id')
        ->join('title', 'tag_title.title_id', 'title.id')
        ->select('title.*', 'tag.*', 'tag.id')
        ->where('tag_id', '=', $id)
        ->paginate(6);

        return view('frontend.tdesc-page', compact('tdesc','list'));
    }
}
