<?php

namespace desa\Http\Controllers;

use Illuminate\Http\Request;
use desa\Http\Requests;
use desa\Http\Controllers\Controller;
use desa\Penduduk;
use DB;

class PendudukController extends Controller
{
    
    public function index()
    {   
        $penduduk = DB::table('penduduk')->paginate(6);     
        return view ('penduduk.showPenduduk', compact('penduduk'));
    }

    public function create()
    {
        return view ('penduduk.addPenduduk');
    }

   
    public function store(Request $request)
    {       
        $penduduk                      = new Penduduk;
        $penduduk->nik                 = $Request['nik'];
        $penduduk->nama                = $request['nama'];
        $penduduk->tmp_lahir           = $request['tmp_lahir'];
        $penduduk->tgl_lahir           = $Request['tgl_lahir'];
        $penduduk->jk                  = $Request['jk'];
        $penduduk->status_perkwnan     = $Request['status_perkwnan'];
        $penduduk->agama               = $Request['agama'];
        $penduduk->pekerjaan           = $Request['pekerjaan'];
        $penduduk->gol_darah           = $Request['gol_darah'];
        $penduduk->alamat              = $Request['alamat'];
        $penduduk->dusun               = $Request['dusun'];
        $penduduk->rw                  = $Request['rw'];
        $penduduk->rt                  = $Request['rt'];
        $penduduk->save();
        return redirect('/penduduk');
    }

 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $penduduk = DB::table('penduduk')->where('id',$id)->get();        
        return view('penduduk.editPenduduk',compact('penduduk'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $penduduk   = Penduduk::find($id);
        $penduduk-> delete();
        return redirect('/penduduk');
    }
}
