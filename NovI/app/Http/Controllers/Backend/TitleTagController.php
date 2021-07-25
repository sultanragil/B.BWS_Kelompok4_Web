<?php

namespace App\Http\Controllers\Backend;

use App\Post;
use App\TagTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TitleTagController extends Controller
{
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    //
    public function index(){
        $titlet = TagTitle::orderBy('title_id')->paginate(5);
        return view('backend.titlet.index', compact('titlet'));
    }
    public function create(){
        $titlet = null;
        $title = DB::table('title')->get();
        $tag = DB::table('tag')->get();
        return view('backend.titlet.create', compact('title','tag'));
    }
    public function store(Request $request){
        $request->validate([
            'title_id' => 'required',
            'tag_id' => 'required',
            //'tts' => 'required',
            //'title_id' => 'required'
        ]);

        $titlet = new TagTitle;
        $titlet->title_id = $request->title_id;
        $titlet->tag_id = $request->tag_id;
        //$titleg->chapter_tts = $request->tts;
        //$titleg->title_id = $request->title_id;
        $titlet->save();
        return redirect()->route('titlet.index')->with('success','Tag Title has been created successfully.');
    }
    public function edit(TagTitle $titlet){

        $title = DB::table('title')->get();
        $tag = DB::table('tag')->get();
        return view('backend.titlet.edit',compact('titlet','title','tag'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'title_id' => 'required',
            'tag_id' => 'required',
            //'tts' => 'required',
            //'title_id' => 'required'
        ]);
        $titlet = TagTitle::find($id);
        $titlet->title_id = $request->title_id;
        $titlet->tag_id = $request->tag_id;
        //$titleg->chapter_tts = $request->tts;
        //$titleg->title_id = $request->title_id;
        $titlet->save();
        return redirect()->route('titlet.index')->with('success','Tag Title has been updated successfully');
    }
    public function destroy(TagTitle $titlet)
    {
        $titlet->delete();

        return redirect()->route('titlet.index')
                        ->with('success','Title Tag has been deleted successfully');
    }
}
