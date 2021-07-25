<?php

namespace App\Http\Controllers\Backend;

use App\Post;
use App\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CarouselController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    public function index()
    {
        $carousel = Carousel::orderBy('id')->paginate(5);


        return view('backend.carousel.index',compact('carousel'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carousel = null;
        return view('backend.carousel.create',compact('carousel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'link' => 'required',
            //'pengarang' => 'required',
        ]);

        // $path = $request->file('image')->store('public/images');
        //mengambil data file yang diupload
        $file           = $request->file('image');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('images',$file->getClientOriginalName());

        $post = new Carousel;

        $post->title = $request->title;
        $post->text = $request->text;
        $post->link = $request->link;
        $post->image = $nama_file;

        $post->save();


        return redirect()->route('carousel.index')
                        ->with('success','Carousel has been created successfully.');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Post $post)
    // {
    //     return view('posts.show',compact('post'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        return view('backend.carousel.edit',compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'link' => 'required',
        ]);

        $post = Carousel::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file           = $request->file('image');
            $nama_file      = $file->getClientOriginalName();
            $file->move('images',$file->getClientOriginalName());
            $post->image = $nama_file;
        }

        $post->title = $request->title;
        $post->text = $request->text;
        $post->link = $request->link;
        $post->save();

        return redirect()->route('carousel.index')
                        ->with('success','Post updated successfully');
    }
    public function destroy(Carousel $carousel)
    {
        $carousel->delete();

        return redirect()->route('carousel.index')
                        ->with('success','Post has been deleted successfully');
    }
}
