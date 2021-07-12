<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Chapter;
use Dingo\Api\Routing\Helpers;

class ApiChapterController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $chapter = Chapter::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Chapter Berhasil Ditampilkan',
            'data' => $chapter
        ],201);
    }

    public function create(Request $request)
    {
        $chapter = new Chapter;
        $chapter->chapter_title = $request->chapter_title;
        $chapter->chapter_text = $request->chapter_text;
        $chapter->chapter_tts = $request->chapter_tts;
        $chapter->view = $request->view;
        $chapter->title_id = $request->title_id;
        $chapter->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Chapter Berhasil Ditambahkan',
            'data' => $chapter
        ],201);
    }

    public function show($id)
    {
        $chapter = Chapter::find($id);
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Chapter Berhasil Tampil Sesuai ID',
            'data' => $chapter
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

        $title = $request->chapter_title;
        $text = $request->chapter_text;
        $tts = $request->chapter_tts;
        $view = $request->view;
        $title = $request->title_id;

        $chapter = Chapter::find($id);
        $chapter->chapter_title = $request->chapter_title;
        $chapter->chapter_text = $request->chapter_text;
        $chapter->chapter_tts = $request->chapter_tts;
        $chapter->view = $request->view;
        $chapter->title_id = $request->title_id;
        $chapter->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Chapter Berhasil Diupdate',
            'data' => $chapter
        ],201);
    }

    public function delete($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Chapter Berhasil Dihapus',
            'data' => $chapter
        ],201);
    }
}
