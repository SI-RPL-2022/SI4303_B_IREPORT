<?php

namespace App\Http\Controllers;
// use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Berita;
use App\Profile;
use DB;

class BeritaController extends Controller
{
    public function indexBerita(Request $request)
    {
        $data = Profile::where('user_id', Auth::id())->first();
        $tampil = Berita::all();
        return view('admin.berita.index', compact('tampil', 'data'));
    }
    public function indexBeritaUser(Request $request)
    {   
        if ($request->has('search')) {
            $tampil = DB::table('berita')-> where('judul_berita','LIKE','%'.$request->search.'%') ->get();
        } else {
            $tampil = Berita::all();
        }
        return view('user.berita.index', compact('tampil'));
    }

    public function inputPage(){
        $data = Profile::where('user_id', Auth::id())->first();
        // $tampil = Berita::all();
        return view ('admin.berita.create', compact( 'data'));
    }

    public function inputData(Request $request){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tgl' => 'required',
            'sumber' => 'required',
            'fotoBerita' => 'required|image|mimes:jpeg,png,jpg,gif,svg, webp'],
        [
            'judul.required' => 'Harus diisi',
            'deskripsi.required'  => 'Harus diisi',
            'tgl.required'  => 'Harus diisi',
            'sumber.required'  => 'Harus diisi',
            'fotoBerita.required'  => 'Harus diisi'
        ]);
        
        $fileName=time().'.'.$request->fotoBerita->extension();
        $request->fotoBerita->move(public_path("image"), $fileName);

        $databerita = new Berita;
        $databerita->judul_berita=$request["judul"];
        $databerita->tgl=$request["tgl"];
        $databerita->sumber=$request["sumber"];
        $databerita->deskripsi=$request["deskripsi"];
        $databerita->foto=$fileName;
        // $databerita->user_id='0';
        $databerita->save ();
        return redirect('/beritaAdmin');
    }

    public function editPage($id){
        $edit_ = DB::table('berita')->where('id', $id)->first();
        // $edit_ = DB::table('laporan')->where('id', $id);
        $data = Profile::where('user_id', Auth::id())->first();
        return view('admin.berita.edit', compact('edit_', 'data'));
    }

    public function editData($id, Request $request){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tgl' => 'required',
            'sumber' => 'required',
            'fotoBerita' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp'],
        [
            'judul.required' => 'Harus diisi',
            'tgl.required'  => 'Harus diisi',
            'sumber.required'  => 'Harus diisi',
            'deskripsi.required'  => 'Harus diisi',
            'fotoBerita.required'  => 'Harus diisi'
        ]);
        $edit=Berita::find($id);
        
        if ($request->fotoBerita=="") {
            $filename=$edit->fotoBerita;
            // $edit->foto=$request["fotoLokasi"] ? $request["fotoLokasi"] :  $edit->foto;
        }else{
            $fileName=time().'.'.$request->fotoBerita->extension();
            $request->fotoBerita->move(public_path("image"), $fileName);
        }

        $edit-> update([
            "judul_berita" => $request["judul"],
            "deskripsi" => $request["deskripsi"],
            "tgl" => $request["tgl"],
            "sumber" => $request["sumber"],
            "foto" => $fileName
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
        // dd($edit);
        return redirect('/beritaAdmin');
    }

    public function delete($id)
    {
        $query = DB::table('berita')->where('id', $id)->delete();
        return redirect('/beritaAdmin');
    }
}
