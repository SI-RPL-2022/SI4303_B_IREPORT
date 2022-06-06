<?php

namespace App\Http\Controllers;
// use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Berita;
use App\Profile;

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
        $data = Profile::where('user_id', Auth::id())->first();
        $tampil = Berita::all();
        return view('admin.berita.index', compact('tampil', 'data'));
    }

    public function inputPage(){
        return view ('admin.berita.create');
    }

    public function inputData(Request $request){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'fotoBerita' => 'required|image|mimes:jpeg,png,jpg,gif,svg'],
        [
            'judul.required' => 'Harus diisi',
            'deskripsi.required'  => 'Harus diisi',
            'fotoBerita.required'  => 'Harus diisi'
        ]);
        
        $fileName=time().'.'.$request->fotoBerita->extension();
        $request->fotoBerita->move(public_path("image"), $fileName);

        $databerita = new Berita;
        $databerita->judul_berita=$request["judul"];
        $databerita->deskripsi=$request["deskripsi"];
        $databerita->foto=$fileName;
        // $databerita->user_id='0';
        $databerita->save ();
        return redirect('/beritaAdmin');
    }
}
