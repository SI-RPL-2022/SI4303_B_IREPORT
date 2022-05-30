<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function indexBerita(Request $request)
    {
        // $tampil = DB::table('laporan')->get();
        // if ($request->has('search')) {
        //     $tampil = DB::table('laporan')-> where('kategori','LIKE','%'.$request->search.'%') ->get();
        // } else {
        //     $tampil = DB::table('laporan')->get();
        // }
        // $tampil = DB::table('berita')->get();
        $tampil = Berita::all();
        return view('admin.berita.index', compact('tampil'));
    }

    public function inputPage(){
        return view ('admin.berita.create');
    }

    public function inputData(Request $request){
        $request->validate([
            'kategori' => 'required',
            'tanggal' => 'required',
            'fotoBeritai' => 'required|image|mimes:jpeg,png,jpg,gif,svg'],
        [
            'kategori.required' => 'Harus diisi',
            'tanggal.required'  => 'Harus diisi',
            'fotoBerita.required'  => 'Harus diisi'
        ]);
        
        $fileName=time().'.'.$request->fotoBerita->extension();
        $request->fotoBerita->move(public_path("image"), $fileName);

        $dataLaporan = new Laporan;
        $dataLaporan->judul_berita=$request["judul"];
        $dataLaporan->deskripsi=$request["deskripsi"];
        $dataLaporan->foto=$fileName;
        $dataLaporan->save ();
        return redirect('/beritaAdmin');
    }
}
