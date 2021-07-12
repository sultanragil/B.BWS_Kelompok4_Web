<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GenreTitle;
use Dingo\Api\Routing\Helpers;

class ApiGenreTitleController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $gtitle = GenreTitle::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Title Berhasil Ditampilkan',
            'data' => $gtitle
        ],201);
    }

    public function create(Request $request)
    {
        $gtitle = new GenreTitle;
        $gtitle->title_id = $request->title_id;
        $gtitle->genre_id = $request->genre_id;
        $gtitle->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Title Berhasil Ditambahkan',
            'data' => $gtitle
        ],201);
    }

    public function show($id)
    {
        $gtitle = GenreTitle::find($id);
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Title Berhasil Tampil Sesuai ID',
            'data' => $gtitle
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

        $genre = $request->genre_id;
        $title = $request->title_id;

        $gtitle = GenreTitle::find($id);
        $gtitle->title_id = $request->title_id;
        $gtitle->genre_id = $request->genre_id;
        $gtitle->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Title Berhasil Diupdate',
            'data' => $gtitle
        ],201);
    }

    public function delete($id)
    {
        $gtitle = GenreTitle::find($id);
        $gtitle->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Title Berhasil Dihapus',
            'data' => $gtitle
        ],201);
    }
}
