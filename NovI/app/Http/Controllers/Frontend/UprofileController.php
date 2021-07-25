<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use App\Title;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UprofileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        $novel = DB::select('select * from title where user_id = ?', [Auth::user()->id]);
        $chap = Title::where('user_id',Auth::user()->id)->paginate(5);
        return view('frontend.profile-page',compact('user','novel','chap'));
    }
    // public function show($id)
    // {
    //     $post = User::find($id);
    //     return view('frontend.profile-page',compact('post'));
    // }
    public function edit(User $user)
    {
        $user = Auth::user();
        return view('frontend.edit-profile',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if($request->hasFile('foto')){
            $file           = $request->file('foto');
            $nama_file      = $file->getClientOriginalName();
            $file->move('frontend/assets/img/faces/',$file->getClientOriginalName());
            $user->foto = $nama_file;
        }

        $user->name = $request->name;
        $user->deskripsi = $request->deskripsi;
        $user->email = $request->email;
        $user->job = $request->job;
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect()->route('profu.index')
                        ->with('success','Post updated successfully');
    }


}
