<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;
use Dingo\Api\Routing\Helpers;

class ApiReviewController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        $review = Review::all();
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Review Berhasil Ditampilkan',
            'data' => $review
        ],201);
    }

    public function create(Request $request)
    {
        $review = new Review;
        $review->title_id = $request->title_id;
        $review->creator_id = $request->creator_id;
        $review->content = $request->content;
        $review->rate = $request->rate;
        $review->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Review Berhasil Ditambahkan',
            'data' => $review
        ],201);
    }

    public function show($id)
    {
        $review = Review::find($id);
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Review Berhasil Tampil Sesuai ID',
            'data' => $review
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

        $title = $request->title_id;
        $creator = $request->creator_id;
        $content = $request->content;
        $rate = $request->rate;

        $review = Review::find($id);
        $review->title_id = $request->title_id;
        $review->creator_id = $request->creator_id;
        $review->content = $request->content;
        $review->rate = $request->rate;
        $review->save();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Review Berhasil Diupdate',
            'data' => $review
        ],201);
    }

    public function delete($id)
    {
        $review = Review::find($id);
        $review->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Review Berhasil Dihapus',
            'data' => $review
        ],201);
    }
}
