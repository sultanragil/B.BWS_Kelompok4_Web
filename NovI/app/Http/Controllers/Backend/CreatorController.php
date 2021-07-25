<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CreatorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    public function index()
    {
        $creator = DB::table('users')
        ->get();

        return view('backend.creator.index',compact('creator'));

    }

    //public function view()
    //{
        //DB::select('select * from users')([
            //'user_id' => $request->user_id,
            //'user_name' => $request->user_name,
            //'user_pprofile' => $request->user_pprofile,
            //'user_email' => $request->user_email,
            //'created_at' => $request->created_at,
            //'user_username' => $request->user_username,
            //'user_password' => $request->user_password,
            //'user_desc' => $request->user_desc,
        //]);
    //}

    public function create()
    {
        $creator = null;
        return view('backend.creator.create',compact('creator'));
    }

    public function edit($id)
    {
        $creator = DB::table('creator')->where('creator_id',$id)->first();
        return view('backend.creator.edit',compact('creator'));
    }

    public function update(Request $request)
    {
        DB::table('creator')->where('creator_id',$request->creator_id)->update([
            'creator_name' => $request->creator_name,
            //'user_profile' => $request->creator_profile,
            'creator_email' => $request->creator_email,
            'creator_password' => $request->creator_password,
            'creator_desc' => $request->creator_desc,
        ]);

        return redirect()->route('user.index')->with('success','Data Telah Berhasil Diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('creator')->where('creator_id',$id)->delete();
        return redirect()->route('user.index')->with('success','Data Creator Berhasil Dihapus');
    }
    public function store(Request $request)
    {
        DB::table('creator')->insert([
            'creator_name' => $request->creator_name,
            //'creator_profile' => $request->creatore_profile,
            'creator_email' => $request->creator_email,
            'creator_password' => $request->creator_password,
            'creator_desc' => $request->creator_desc,
        ]);

        return redirect()->route('user.index')->with('success','Data Telah Berhasil Ditambah.');
    }



}

