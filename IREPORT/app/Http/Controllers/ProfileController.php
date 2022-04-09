<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;
use DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view ('user.profile_');
        // dd($profile);
    }

    public function edit()
    {
        $editProfile = Profile::where('user_id', Auth::id())->first();
        return view ('user.profile.index', compact('editProfile'));
        // dd($profile);
    }

    public function update($id, Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'lokasi' => 'required',
        //     'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        //     'keterangan' => 'required'],
        // [
        //     'nama.required' => 'Harus diisi',
        //     'alamat.required'  => 'Harus diisi',
        //     'lokasi.required'  => 'Harus diisi',
        //     'foto.required'  => 'Harus diisi',
        //     'keterangan'  => 'Harus diisi'
        // ]);
        $edit=Profile::find($id);
        if ($request->foto=="") {
            $filename=$edit->foto;
        }else{
            $fileName=time().'.'.$request->foto->extension();
            $request->foto->move(public_path("image"), $fileName);
        }

        $edit-> update([
            // "judul" => $request["judul"],
            "nama" => $request["nama"],
            "alamat" => $request["alamat"],
            "tempatLahir" => $request["tempatLahir"],
            "foto" => $fileName,
            "tanggalLahir" => $request["tanggalLahir"],
        ]);
        // $query = DB::table('laporan')
        // -> where('id', $id)
        // -> update([
        //     "judul" => $request["judul"],
        //     "nama" => $request["nama"],
        //     "alamat" => $request["alamat"],
        //     "alamat" => $request["lokasi"],
        //     "foto" => $request["foto"],
        //     "keterangan" => $request["keterangan"],
        // ]);
        return redirect('/profile');
    }

    public function show($id)
    {
        $detail = DB::table('profile')->where('id', $id)->first();
        // $detail = DB::table('laporan')->where('id', $id);
        return view('user.profile_', compact('detail'));
    }
}
