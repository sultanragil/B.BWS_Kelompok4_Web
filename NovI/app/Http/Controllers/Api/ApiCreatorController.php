<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Creator;
use Dingo\Api\Routing\Helpers;

class ApiCreatorController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $creator = Creator::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Creator Berhasil Ditampilkan',
            'data' => $creator
        ],201);
    }

    public function create(Request $request)
    {
        $creator = new Creator;
        $creator->creator_name = $request->creator_name;
        $creator->creator_email = $request->creator_email;
        $creator->creator_password = $request->creator_password;
        $creator->creator_profile = $request->creator_profile;
        $creator->creator_desc = $request->creator_desc;
        $creator->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Creator Berhasil Ditambahkan',
            'data' => $creator
        ],201);
    }

    public function show($id)
    {
        $comment = Creator::find($id);

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Creator Berhasil Tampil Sesuai ID',
            'data' => $creator
        ],200);
    }

    //public function store(Request $request)
    //{
    //    $creator = new Creator;
    //    $creator->creator_name = $request->creator_name;
    //    $creator->creator_email = $request->creator_email;
    //    $creator->creator_password = $request->creator_password;
    //    $creator->creator_profile = $request->creator_profile;
    //    $creator->creator_desc = $request->creator_desc;
    //    $creator->save();

    //    return "Data Creator Berhasil Masuk";
    //}

    public function update($id, Request $request)
    {
        $name = $request->creator_name;
        $email = $request->creator_email;
        $password = $request->creator_password;
        $profile = $request->creator_profile;
        $desc = $request->creator_desc;

        $creator = Creator::find($id);
        $creator->creator_name = $request->creator_name;
        $creator->creator_email = $request->creator_email;
        $creator->creator_password = $request->creator_password;
        $creator->creator_profile = $request->creator_profile;
        $creator->creator_desc = $request->creator_desc;
        $creator->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Creator Berhasil Diupdate',
            'data' => $creator
        ],201);

    }

    public function delete($id)
    {
        $creator = Creator::find($id);
        $creator->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Creator Berhasil Dihapus',
            'data' => $creator
        ],201);
    }
}
