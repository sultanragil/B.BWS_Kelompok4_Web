<?php

namespace App\Http\Controllers\Backend;

use App\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChapterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    public function index(){
        $chapter = Chapter::orderBy('id')->paginate(5);
        return view('backend.chapter.index', compact('chapter'));
    }
    public function create(){
        $chapter = null;
        $title = DB::table('title')->get();
        return view('backend.chapter.create', compact('chapter','title'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            //'tts' => 'required',
            'title_id' => 'required'
        ]);

        $chapter = new Chapter;
        $chapter->chapter_title = $request->title;
        $chapter->chapter_text = $request->text;
        //$chapter->chapter_tts = $request->tts;
        $chapter->title_id = $request->title_id;
        $chapter->save();
        return redirect()->route('chapter.index')->with('success','Chapter has been created successfully.');
    }
    public function edit(Chapter $chapter){
        return view('backend.chapter.edit',compact('chapter'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            //'tts' => 'required',
            'title_id' => 'required'
        ]);
        $post = Chapter::find($id);
        $post->chapter_title = $request->title;
        $post->chapter_text = $request->text;
        //$chapter->chapter_tts = $request->tts;
        $post->title_id = $request->title_id;
        $post->save();
        return redirect()->route('chapter.index')->with('success','Chapter has been updated successfully');
    }
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();

        return redirect()->route('chapter.index')
                        ->with('success','Post has been deleted successfully');
    }
}
