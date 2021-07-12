<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reply;
use Dingo\Api\Routing\Helpers;

class ApiReplyController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $reply = Reply::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Reply Berhasil Ditampilkan',
            'data' => $reply
        ],201);
    }

    public function create(Request $request)
    {
        $reply = new Reply;
        $reply->comment_id = $request->comment_id;
        $reply->creator_id = $request->creator_id;
        $reply->content = $request->content;
        $reply->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Reply Berhasil Ditambahkan',
            'data' => $reply
        ],201);
    }

    public function show($id)
    {
        $reply = Reply::find($id);
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Reply Berhasil Tampil Sesuai ID',
            'data' => $reply
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

        $comment = $request->comment_id;
        $creator = $request->creator_id;
        $content = $request->content;

        $reply = Reply::find($id);
        $reply->comment_id = $request->comment_id;
        $reply->creator_id = $request->creator_id;
        $reply->content = $request->content;
        $reply->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Reply Berhasil Diupdate',
            'data' => $reply
        ],201);
    }

    public function delete($id)
    {
        $reply = Reply::find($id);
        $reply->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Reply Berhasil Dihapus',
            'data' => $reply
        ],201);
    }
}
