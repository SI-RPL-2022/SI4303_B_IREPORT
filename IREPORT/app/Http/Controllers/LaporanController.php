<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Laporan;

class LaporanController extends Controller
{
    public function create(){
        return view ('user.input');
    }

    public function inputData(Request $request){
        // dd($request->all());
        
        $request->validate([
            'kategori' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'fotoLokasi' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'keterangan' => 'required'],
        [
            'kategori.required' => 'Harus diisi',
            'tanggal.required'  => 'Harus diisi',
            'lokasi.required'  => 'Harus diisi',
            'fotoLokasi.required'  => 'Harus diisi',
            'keterangan'  => 'Harus diisi'
        ]);
        // $query = DB::table('laporan')->insert([
        //     "judul" => $request["judul"],
        //     "kategori" => $request["kategori"],
        //     "tanggal" => $request["tanggal"],
        //     "alamat" => $request["lokasi"],
        //     "foto" => $request["fotoLokasi"],    
        //     // "foto" => $fileName,
        //     "keterangan" => $request["keterangan"],
        // ]);
        
        $fileName=time().'.'.$request->fotoLokasi->extension();
        $request->fotoLokasi->move(public_path("image"), $fileName);
        $dataLaporan = new Laporan;
        $dataLaporan->kategori=$request["kategori"];
        $dataLaporan->tanggal=$request["tanggal"];
        $dataLaporan->alamat=$request["lokasi"];
        $dataLaporan->foto=$fileName;
        $dataLaporan->keterangan=$request["keterangan"];
        $dataLaporan->save ();
        return redirect('/laporan');
    }

    // public function index()
    // {
    //     $tampil = DB::table('laporan')->get();
    //     return view('user.home_', compact('tampil'));
    // }

    public function index(Request $request)
    {
        // $tampil = DB::table('laporan')->get();
        if ($request->has('search')) {
            $tampil = DB::table('laporan')-> where('kategori','LIKE','%'.$request->search.'%') ->get();
        } else {
            $tampil = DB::table('laporan')->get();
        }
        return view('user.home_', compact('tampil'));
    }

    public function indexAdmin(Request $request)
    {
        // $tampil = DB::table('laporan')->get();
        if ($request->has('search')) {
            $tampil = DB::table('laporan')-> where('kategori','LIKE','%'.$request->search.'%') ->get();
        } else {
            $tampil = DB::table('laporan')->get();
        }
        return view('admin.laporanUser.index', compact('tampil'));
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
        $request->validate([
            'kategori' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'fotoLokasi' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'keterangan' => 'required'],
        [
            'kategori.required' => 'Harus diisi',
            'tanggal.required'  => 'Harus diisi',
            'lokasi.required'  => 'Harus diisi',
            'fotoLokasi.required'  => 'Harus diisi',
            'keterangan'  => 'Harus diisi'
        ]);
        $edit=Laporan::find($id);
        if ($request->fotoLokasi=="") {
            $filename=$edit->fotoLokasi;
        }else{
            $fileName=time().'.'.$request->fotoLokasi->extension();
            $request->fotoLokasi->move(public_path("image"), $fileName);
        }

        $edit-> update([
            // "judul" => $request["judul"],
            "kategori" => $request["kategori"],
            "tanggal" => $request["tanggal"],
            "alamat" => $request["lokasi"],
            "foto" => $fileName,
            "keterangan" => $request["keterangan"],
        ]);
        // $query = DB::table('laporan')
        // -> where('id', $id)
        // -> update([
        //     "judul" => $request["judul"],
        //     "kategori" => $request["kategori"],
        //     "tanggal" => $request["tanggal"],
        //     "alamat" => $request["lokasi"],
        //     "foto" => $request["fotoLokasi"],
        //     "keterangan" => $request["keterangan"],
        // ]);
        return redirect('/laporan');
    }

    
    public function destroy($id)
    {
        $query = DB::table('laporan')->where('id', $id)->delete();
        return redirect('/laporan');
    }
}