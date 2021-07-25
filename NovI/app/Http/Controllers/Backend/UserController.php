<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    public function index()
    {
        $user = DB::table('users')->where('job', 1)->get();

        return view('backend.user.index',compact('user'));
    }

    public function create()
    {
        $user = null;
        return view('backend.user.create',compact('user'));
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id',$id)->first();
        return view('backend.user.edit',compact('user'));
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id',$request->creator_id)->update([
            'name' => $request->creator_name,
            //'user_profile' => $request->creator_profile,
            'email' => $request->creator_email,
            'password' => $request->creator_password,
            'desc' => $request->creator_desc,
        ]);

        return redirect()->route('user.index')->with('success','Data Telah Berhasil Diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('user.index')->with('success','Data Creator Berhasil Dihapus');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->job = $request->job;
        $user->save();

        return redirect()->route('user.index')->with('success','Data Telah Berhasil Ditambah.');
    }



}

