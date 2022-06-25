<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use DB;

class ProfileController extends Controller
{   
    public function showAdmin()
    {
        // $detail = DB::table('profile')->where('id', $id)->first();
        $data = Profile::where('user_id', Auth::id())->first();
        return view('layouts.masterAdmin', compact('data'));
    }

    public function editpage()
    {   
        
        $editProfile = Profile::where('user_id', Auth::id())->first();
        return view ('user.profile.profile_', compact('editProfile'));
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
            "nama" => $request["nama"],
            "alamat" => $request["alamat"],
            "tempatLahir" => $request["tempatLahir"],
            "foto" => $fileName,
            "tanggalLahir" => $request["tanggalLahir"]
        ]);
        return redirect('/profile');
    }

    public function pengajuan($id, Request $request)
    {
        // $editdata=User::find($id);
        $editdata=Profile::find($id);
        if ($editdata) {
            $editdata->nama=$request["nama"] ? $request["nama"] : $editdata->nama;
            $editdata->alamat=$request["alamat"] ? $request["alamat"] : $editdata->alamat;
            $editdata->tempatLahir=$request["tempatLahir"] ? $request["tempatLahir"] : $editdata->tempatLahir;
            $editdata->tanggalLahir=$editdata->tanggalLahir;
            $editdata->pengajuan='Hapus akun ini';
            $editdata->foto = $editdata->foto;
            $editdata->save();
        }
        // if ($editdata) {
        //     $editdata->pengajuan='Hapus akun ini';
        //     $editdata->save();
        // }
        return redirect('/profile');
    }

    public function jadiadmin($user_id)
    {
        $editdata=User::find($user_id);
        // if ($editdata) {
        //     $editdata->nama=$request["nama"] ? $request["nama"] : $editdata->nama;
        //     $editdata->alamat=$request["alamat"] ? $request["alamat"] : $editdata->alamat;
        //     $editdata->tempatLahir=$request["tempatLahir"] ? $request["tempatLahir"] : $editdata->tempatLahir;
        //     $editdata->tanggalLahir=$editdata->tanggalLahir;
        //     $editdata->pengajuan='Hapus akun ini';
        //     $editdata->foto = $editdata->foto;
        //     $editdata->save();
        // }
        if ($editdata) {
            $editdata->role=1;
            $editdata->save();
        }
        return redirect('/pengajuan');
    }

    public function indexadmin()
    {
        $data = Profile::where('user_id', Auth::id())->first();
        $tampil = Profile::all();
        return view('admin.pengajuan.index', compact('tampil', 'data'));
    }

    public function delete($user_id)
    {   
        $query = DB::table('profile')->where('user_id', $user_id)->delete();
        $query = DB::table('users')->where('id', $user_id)->delete();
        return redirect('/pengajuan');
    }
}
