<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TagTitle;
use Dingo\Api\Routing\Helpers;

class ApiTagTitleController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $ttitle = TagTitle::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Title Berhasil Ditampilkan',
            'data' => $ttitle
        ],201);
    }

    public function create(Request $request)
    {
        $ttitle = new TagTitle;
        $ttitle->title_id = $request->title_id;
        $ttitle->tag_id = $request->tag_id;
        $ttitle->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Title Berhasil Ditambahkan',
            'data' => $ttitle
        ],201);
    }

    public function show($id)
    {
        $ttitle = TagTitle::find($id);
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Title Berhasil Tampil Sesuai ID',
            'data' => $ttitle
        ],200);
    }

    //public function store(Request $request)
    //{
    //    $title = new Title;
    //    $title->name = $request->chapter_id;
    ///    $title->cover = $request->cover;
    //    $title->sinopsis = $request->sinopsis;
    //    $title->favorit = $request->favorit;
    //    $title->creator_id = $request->creator_id;
    //    $title->save();

    //    return "Data Title Berhasil Masuk";
    //}

    public function update($id, Request $request)
    {

        $tag = $request->tag_id;
        $title = $request->title_id;

        $ttitle = TagTitle::find($id);
        $ttitle->title_id = $request->title_id;
        $ttitle->tag_id = $request->tag_id;
        $ttitle->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Title Berhasil Diupdate',
            'data' => $ttitle
        ],201);
    }

    public function delete($id)
    {
        $ttitle = TagTitle::find($id);
        $ttitle->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tag Title Berhasil Dihapus',
            'data' => $ttitle
        ],201);
    }
}
