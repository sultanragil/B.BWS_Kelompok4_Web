<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use Dingo\Api\Routing\Helpers;

class ApiCommentController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $comment = Comment::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Comment Berhasil Ditampilkan',
            'data' => $comment
        ],201);
    }

    public function create(Request $request)
    {
        $comment = new Comment;
        $comment->chapter_id = $request->chapter_id;
        $comment->creator_id = $request->creator_id;
        $comment->content = $request->content;
        $comment->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Comment Berhasil Ditambahkan',
            'data' => $comment
        ],201);
    }

    public function show($id)
    {
        $comment = Comment::find($id);

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Comment Berhasil Tampil Sesuai ID',
            'data' => $comment
        ],200);
    }

    //public function store(Request $request)
    //{
    //    $comment = new Comment;
    //    $comment->chapter_id = $request->chapter_id;
    //    $comment->creator_id = $request->creator_id;
    //    $comment->content = $request->content;
    //    $comment->save();

    //    return response()->json([
    //        'status' => 'OK',
    //        'message' => 'Data Comment Berhasil Masuk',
    //       'data' => $comment
    //    ],200);
    //}

    public function update($id, Request $request)
    {
        $creator = $request->creator_id;
        $chapter = $request->chapter_id;
        $content = $request->content;

        $comment = Comment::find($id);
        $comment->chapter_id = $chapter;
        $comment->creator_id = $creator;
        $comment->content = $content;
        $comment->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Comment Berhasil Diupdate',
            'data' => $comment
        ],201);

    }

    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Comment Berhasil Dihapus',
            'data' => $comment
        ],201);
    }
}
