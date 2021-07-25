<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Title;
use App\Chapter;

class AddchapterController extends Controller
{
    public function create($id)
    {
        $novel = Title::find($id);
        return view('frontend.add-chapter-page',compact('novel'));
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
        return redirect()->route('profu.index')->with('success','Chapter has been created successfully.');
    }
    public function show($id){
        $chapter = Chapter::find($id);
        return view('frontend.chapter-page',compact('chapter'));
    }
    public function edit($id){
        $chapter = Chapter::find($id);
        return view('frontend.edit-chapter-page',compact('chapter'));
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
        return redirect()->route('profu.index')->with('success','Chapter has been created successfully.');
    }
    public function destroy($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();

        return redirect()->route('profu.index')
                        ->with('success','Post has been deleted successfully');
    }
}
