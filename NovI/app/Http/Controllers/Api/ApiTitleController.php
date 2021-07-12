<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Title;
use Dingo\Api\Routing\Helpers;

class ApiTitleController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $title = Title::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Title Berhasil Ditampilkan',
            'data' => $title
        ],201);
    }

    public function create(Request $request)
    {
        $title = new Title;
        $title->name = $request->name;
        $title->cover = $request->cover;
        $title->sinopsis = $request->sinopsis;
        $title->favorit = $request->favorit;
        $title->creator_id = $request->creator_id;
        $title->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Title Berhasil Ditambahkan',
            'data' => $title
        ],201);
    }

    public function show($id)
    {
        $title = Title::find($id);
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Title Berhasil Tampil Sesuai ID',
            'data' => $title
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

        $chapter = $request->chapter_id;
        $cover = $request->cover;
        $sinopsis = $request->sinopsis;
        $favorit = $request->favorit;
        $creator = $request->creator_id;

        $title = Title::find($id);
        $title->name = $request->chapter_id;
        $title->cover = $request->cover;
        $title->sinopsis = $request->sinopsis;
        $title->favorit = $request->favorit;
        $title->creator_id = $request->creator_id;
        $title->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Title Berhasil Diupdate',
            'data' => $title
        ],201);
    }

    public function delete($id)
    {
        $title = Title::find($id);
        $title->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Title Berhasil Dihapus',
            'data' => $title
        ],201);
    }
}
