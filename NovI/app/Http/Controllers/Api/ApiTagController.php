<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use Dingo\Api\Routing\Helpers;

class ApiTagController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $tag = Tag::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Berhasil Ditampilkan',
            'data' => $tag
        ],201);
    }

    public function create(Request $request)
    {
        $tag = new Tag;
        $tag->tag_name = $request->tag_name;
        $tag->tag_desc = $request->tag_desc;
        $tag->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Berhasil Ditambahkan',
            'data' => $tag
        ],201);
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Berhasil Tampil Sesuai ID',
            'data' => $tag
        ],200);
    }

    //public function store(Request $request)
    //{
    //    $genre = new Tag;
    //    $genre->tag_name = $request->tag_name;
    //    $genre->tag_desc = $request->tag_desc;
   //     $genre->save();

    //    return response()->json([
    //        'status' => 'OK',
    //        'message' => 'Data Tag Berhasil Diupdate',
   //         'data' => $tag
//],201);
    //}

    public function update($id, Request $request)
    {

        $name = $request->tag_name;
        $desc = $request->tag_desc;

        $tag = Tag::find($id);
        $tag->tag_name = $request->tag_name;
        $tag->tag_desc = $request->tag_desc;
        $tag->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Berhasil Diupdate',
            'data' => $tag
        ],201);

    }

    public function delete($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Berhasil Dihapus',
            'data' => $tag
        ],201);
    }
}
