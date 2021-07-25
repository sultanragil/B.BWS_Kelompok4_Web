<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdescController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        return view('frontend.adesc-page',compact('user'));
    }
    public function show($id){
        $user = User::find($id);
        $list = DB::table('users')
        ->join('title', 'users.id', 'title.user_id')
        ->select('users.*', 'title.*', 'title.user_id')
        ->where('user_id', '=', $id)
        ->paginate(6);
        return view('frontend.adesc-page', compact('user','list'));
    }
}
