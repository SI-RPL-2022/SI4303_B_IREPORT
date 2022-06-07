<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Laporan;
use App\User;
use App\Profile;
use GuzzleHttp\Client;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // $tampil = DB::table('laporan')->get();
        if ($request->has('search')) {
            $tampil = DB::table('laporan')-> where('kategori','LIKE','%'.$request->search.'%') ->get();
        } else {
            $tampil = Laporan::all();
            // where('laporan')->get()
            $client = New Client();
            $res = $client->request('GET', 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json', ['verify' => false]);
            $statuscode=$res->getStatusCode();
            $body=$res->getBody();
    
            $data=json_decode($body, true);
        }
        return view('user.home_', compact('tampil', 'data'));
    }

    public function showFilter($provinsi)
    {
        $tampil = DB::table('laporan')->where('provinsi', $provinsi)->get();
        // $detail = DB::table('laporan')->where('id', $id);
        return view('user.filter', compact('tampil'));
    }

    public function create(){
        return view ('user.input');
    }

    public function inputData(Request $request){
        $request->validate([
            'kategori' => 'required',
            'tanggal' => 'required',
            'provinsi' => 'required',
            'lokasi' => 'required',
            'fotoLokasi' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'keterangan' => 'required'],
        [
            'kategori.required' => 'Harus diisi',
            'tanggal.required'  => 'Harus diisi',
            'provinsi.required'  => 'Harus diisi',
            'lokasi.required'  => 'Harus diisi',
            'fotoLokasi.required'  => 'Harus diisi',
            'keterangan'  => 'Harus diisi'
        ]);
        
        
        $fileName=time().'.'.$request->fotoLokasi->extension();
        $request->fotoLokasi->move(public_path("image"), $fileName);
        $dataLaporan = new Laporan;
        $dataLaporan->kategori=$request["kategori"];
        $dataLaporan->tanggal=$request["tanggal"];
        $dataLaporan->provinsi=$request["provinsi"];
        $dataLaporan->alamat=$request["lokasi"];
        $dataLaporan->foto=$fileName;
        $dataLaporan->keterangan=$request["keterangan"];
        $dataLaporan->save ();
        return redirect('/laporan');
    }
        // $query = DB::table('laporan')->insert([
        //     "judul" => $request["judul"],
        //     "kategori" => $request["kategori"],
        //     "tanggal" => $request["tanggal"],
        //     "alamat" => $request["lokasi"],
        //     "foto" => $request["fotoLokasi"],    
        //     // "foto" => $fileName,
        //     "keterangan" => $request["keterangan"],
        // ]);


    // public function index()
    // {
    //     $tampil = DB::table('laporan')->get();
    //     return view('user.home_', compact('tampil'));
    // }

    public function indexAdmin(Request $request)
    {
        // $tampil = DB::table('laporan')->get();
        if ($request->has('search')) {
            $tampil = DB::table('laporan')-> where('kategori','LIKE','%'.$request->search.'%') ->get();
            $data = Profile::where('user_id', Auth::id())->first();
        } else {
            $tampil = DB::table('laporan')->get();
            $data = Profile::where('user_id', Auth::id())->first();
        }
        return view('admin.laporanUser.index', compact('tampil', 'data'));
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
        $client = New Client();
        $res = $client->request('GET', 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json', ['verify' => false]);
        $statuscode=$res->getStatusCode();
        $body=$res->getBody();

        $data=json_decode($body, true);
        return view('user.edit', compact('edit_', 'data'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'tanggal' => 'required',
            'provinsi' => 'required',
            'lokasi' => 'required',
            'fotoLokasi' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'keterangan' => 'required'],
        [
            'kategori.required' => 'Harus diisi',
            'tanggal.required'  => 'Harus diisi',
            'provinsi.required'  => 'Harus diisi',
            'lokasi.required'  => 'Harus diisi',
            'fotoLokasi.required'  => 'Harus diisi',
            'keterangan'  => 'Harus diisi'
        ]);
        $edit=Laporan::find($id);
        
        if ($request->fotoLokasi=="") {
            $filename=$edit->foto;
            // $edit->foto=$request["fotoLokasi"] ? $request["fotoLokasi"] :  $edit->foto;
        }else{
            $fileName=time().'.'.$request->fotoLokasi->extension();
            $request->fotoLokasi->move(public_path("image"), $fileName);
        }

        $edit-> update([
            "provinsi" => $request["provinsi"],
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
        // dd($edit);
        return redirect('/laporan');
    }

    
    public function destroy($id)
    {
        $query = DB::table('laporan')->where('id', $id)->delete();
        return redirect('/laporan');
    }
}