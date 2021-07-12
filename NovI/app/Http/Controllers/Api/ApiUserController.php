<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Dingo\Api\Routing\Helpers;

class ApiUserController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $user = User::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data User Berhasil Ditampilkan',
            'data' => $user
        ],201);
    }

    public function create(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->foto = $request->foto;
        $user->job = $request->job;
        $user->deskripsi = $request->deskripsi;
        $user->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data User Berhasil Ditambahkan',
            'data' => $user
        ],201);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json([
            'status' => 'OK',
            'message' => 'Data User Berhasil Tampil Sesuai ID',
            'data' => $user
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

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $foto = $request->foto;
        $job = $request->job;
        $deskripsi = $request->deskripsi;

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->foto = $request->foto;
        $user->job = $request->job;
        $user->deskripsi = $request->deskripsi;
        $user->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data User Berhasil Diupdate',
            'data' => $user
        ],201);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data User Berhasil Dihapus',
            'data' => $title
        ],201);
    }
}
