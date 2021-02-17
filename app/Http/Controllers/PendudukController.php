<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Penduduk;
class PendudukController extends Controller
{
    public function index()
    {
    	$penduduk = Penduduk::all(); 
    	return view('penduduk', ['penduduk' => $penduduk]);
    }
    public function tambah()
    {
        $penduduk = Penduduk::all(); 
    	return view('penduduk_tambah', ['penduduk' => $penduduk]);
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nik' => 'required',
    		'nama' => 'required',
            'jenis_kelamin' => 'required',
    		'alamat' => 'required',
            'tanggal_input' => 'required',
    		'user_input' => 'required',
            'tanggal_update' => 'required',
    		'user_update' => 'required'
    	]);
 
        Penduduk::create([
    		'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal_input' => $request->tanggal_input,
            'user_input' => $request->user_input,
            'tanggal_update' => $request->tanggal_update,
            'user_update' => $request->user_update
    	]);
 
    	return redirect('penduduk');
    }
    public function edit($id)
    {
        
        $penduduk = Penduduk::find($id);
        return view('penduduk_edit', ['penduduk' => $penduduk]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
	   'nik' => 'required',
	   'nama' => 'required',
       'jenis_kelamin' => 'required',
	   'alamat' => 'required',
       'tanggal_input' => 'required',
	   'user_input' => 'required',
       'tanggal_update' => 'required',
	   'user_update' => 'required'
        ]);
        $penduduk = Penduduk::find($id);
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->alamat = $request->alamat;
        $penduduk->tanggal_input = $request->tanggal_input;
        $penduduk->user_input = $request->user_input;
        $penduduk->tanggal_update = $request->tanggal_update;
        $penduduk->user_update = $request->user_update;
        $penduduk->save();
        return redirect('/penduduk');
    }
    public function delete($id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();
        return redirect('/penduduk');
    }
}
