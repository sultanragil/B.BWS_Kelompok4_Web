<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Genre;
use Dingo\Api\Routing\Helpers;

class ApiGenreController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $genre = Genre::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Berhasil Ditampilkan',
            'data' => $genre
        ],201);
    }

    public function create(Request $request)
    {
        $genre = new Genre;
        $genre->genre_name = $request->genre_name;
        $genre->genre_desc = $request->genre_desc;
        $genre->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Berhasil Ditambahkan',
            'data' => $genre
        ],201);
    }

    public function show($id)
    {
        $genre = Genre::find($id);
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Berhasil Tampil Sesuai ID',
            'data' => $genre
        ],200);
    }

    //public function store(Request $request)
    //{
    //    $genre = new Genre;
    //    $genre->genre_name = $request->genre_name;
    //    $genre->genre_desc = $request->genre_desc;
    //    $genre->save();

    //    return "Data Genre Berhasil Masuk";
    //}

    public function update($id, Request $request)
    {

        $name = $request->genre_name;
        $desc = $request->genre_desc;

        $genre = Genre::find($id);
        $genre->genre_name = $request->genre_name;
        $genre->genre_desc = $request->genre_desc;
        $genre->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Berhasil Diupdate',
            'data' => $genre
        ],201);

    }

    public function delete($id)
    {
        $genre = Genre::find($id);
        $genre->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Genre Berhasil Dihapus',
            'data' => $genre
        ],201);
    }
}
