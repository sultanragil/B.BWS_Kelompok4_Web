<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tag;
use App\Http\Controllers\Controller;
use App\TagTitle;
use App\Title;

class TagTitleController extends Controller
{
    //
    public function index(){
        return view('frontend.add-tag-page');
    }

    public function create($id)
    {

        return view('frontend.add-tag-page');
    }

    public function show($id)
    {
        $tag = DB::table('tag')
        ->get();
        $novel = Title::find($id);
        return view('frontend.add-tag-page',compact('novel','tag'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_id' => 'required',
            'tag_id' => 'required',
        ]);

        $post = new TagTitle;

        $post->title_id = $request->title_id;
        $post->tag_id = $request->tag_id;

        $post->save();

        return redirect()->route('profu.index');
    }
}
