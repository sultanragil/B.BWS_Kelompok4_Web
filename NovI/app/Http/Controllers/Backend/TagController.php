<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    public function index(){
        $tag =  Tag::orderBy('id')->paginate(5);
        return view('backend.tag.index',compact('tag'));
    }
    public function create()
    {
        $tag = null;
        return view('backend.tag.create',compact('tag'));
    }
    public function store(Request $request){
        $request->validate([
            'tag' => 'required',
            'description' => 'required',
        ]);
        $tag = new Tag;
        $tag->tag_name = $request->tag;
        $tag->tag_desc = $request->description;
        $tag->save();

        return redirect()->route('tag.index')->with('success','Tag berhasil Ditambahkan');
    }
    public function edit(Tag $tag){
        return view('backend.tag.edit', compact('tag'));
    }
    public function update(Request $request ,$id){
        $request->validate(([
            'tag' => 'required',
            'description' => 'required',
        ]));

        $tag = Tag::find($id);

        $tag->tag_name = $request->tag;
        $tag->tag_desc = $request->description;
        $tag->save();
        return redirect()->route('tag.index')->with('success','Tag berhasil edit');
    }
    public function destroy(Tag $tag){
        $tag->delete();

        return redirect()->route('tag.index')
                        ->with('success','Post has been deleted successfully');
    }
}
