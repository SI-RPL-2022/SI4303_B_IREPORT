<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaporanController extends Controller
{
    public function create(){
        return view ('user.input');
    }

    public function inputData(Request $request){
        // dd($request->all());
        
        // $request->validate([
        //     'name' => 'required',
        //     'umur' => 'required',
        //     'bio' => 'required'],
        // [
        //     'name.required' => 'Namanya diisi yaa',
        //     'umur.required'  => 'Eits umurnya juga yaa',
        //     'bio.required'  => 'Bio jgn dibiarin kosong lah hehe']);
        $query = DB::table('laporan')->insert([
            "judul" => $request["judul"],
            // "kategori" => $request["kategori"],
            "tanggal" => $request["tanggal"],
            "alamat" => $request["lokasi"],
            "foto" => $request["fotoLokasi"],
            "keterangan" => $request["keterangan"],
        ]);

        return redirect('/laporan');
    }

    public function index()
    {
        $tampil = DB::table('laporan')->get();
        return view('user.home', compact('tampil'));
    }

    public function show($id)
    {
        $detail = DB::table('laporan')->where('id', $id)->first();
        // $detail = DB::table('laporan')->where('id', $id);
        return view('user.detail', compact('detail'));
    }

    public function edit($id)
    {
        $edit_ = DB::table('laporan')->where('id', $id)->first();
        // $edit_ = DB::table('laporan')->where('id', $id);
        return view('user.edit', compact('edit_'));
    }

    public function update($id, Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'umur' => 'required',
        //     'bio' => 'required'],
        // [
        //     'name.required' => 'Namanya diisi yaa',
        //     'umur.required'  => 'Eits umurnya juga yaa',
        //     'bio.required'  => 'Bio jgn dibiarin kosong lah hehe']);
        $query = DB::table('laporan')
        -> where('id', $id)
        -> update([
            "judul" => $request["judul"],
            // "kategori" => $request["kategori"],
            "tanggal" => $request["tanggal"],
            "alamat" => $request["lokasi"],
            "foto" => $request["fotoLokasi"],
            "keterangan" => $request["keterangan"],
        ]);
        return redirect('/laporan');
    }

    
    public function destroy($id)
    {
        $query = DB::table('laporan')->where('id', $id)->delete();
        return redirect('/laporan');
    }
}
