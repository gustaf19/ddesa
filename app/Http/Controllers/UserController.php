<?php

namespace desa\Http\Controllers;

use Illuminate\Http\Request;
use desa\Http\Requests;
use desa\Http\Controllers\Controller;
use desa\User;
use DB;

class UserController extends Controller
{

    public function index()
    {
        
        $akuns = DB::table('users')->paginate(6);
        return view('admin.akun.show', compact('akuns'));
    }


    public function create()
    {
        return view ('admin.akun.add');
    }


    public function store(Request $request)
    {        
        $akun           = new User;
        $akun->name     = $request['name'];
        $akun->email    = $request['email'];
        $akun->password = bcrypt($request ['password']);
        \Session::flash('message','Save Successfully');
        $akun->save();
        return redirect('/');
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $akuns = DB::table('users')->where('id',$id)->get();        
        return view('admin.akun.edit',compact('akuns'));
    }

    public function update()
    {
        $akun           = User::find();
        $akun->name     = $request['name'];
        $akun->email    = $request['email'];
        $akun->password = bcrypt($request ['password']);
        $akun->save();
        return redirect('/');
    }


    public function destroy($id)
    {
        $akun = User::find($id);
        $akun->delete();
        \Session::flash('message','Delete Successfully');
        return redirect('/');
    }
}
