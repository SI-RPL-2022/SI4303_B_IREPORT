<?php

namespace App\Http\Controllers;
use DB;
use App\Laporan;
use App\User;
use App\Profile;
use App\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function inputdata(Request $request, $id){ //Request $request
        $request->validate([
            'isi' => 'required',
            // 'quote' => 'required',
            // 'fotoTim' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max: 10000'
        ],
        [
            'isi.required' => 'Harus diisi',
            // 'quote.required'  => 'Harus diisi',
            // 'fotoTim.required'  => 'Harus diisi'
        ]);
        $profil=DB::table('profile')->where('user_id', Auth::id())->first();
        $laporan = DB::table('laporan')->where('id', $id)->first();
        $datakomen = new Komentar;
        $datakomen->nama=$profil->nama;
        $datakomen->foto=$profil->foto;
        $datakomen->isi=$request["isi"];
        $datakomen->laporan_id=$laporan->id;
        $datakomen->profil_id=$profil->id;
        $datakomen->save ();
        return redirect()->back();
    }

    public function editpage($id)
    {
        $komen = DB::table('komentar')->where('id', $id)->first();
        // $detail = DB::table('laporan')->where('id', $id)->first();
        return view('user.laporan.editkomen', compact('komen'));
    }

    public function editdata($id, Request $request)
    {
        // $editdata=User::find($id);
        $editdata=Komentar::find($id);
        if ($editdata) {
            $editdata->isi=$request["isi"] ? $request["isi"] : $editdata->isi;
            // $editdata->alamat=$request["alamat"] ? $request["alamat"] : $editdata->alamat;
            // $editdata->tempatLahir=$request["tempatLahir"] ? $request["tempatLahir"] : $editdata->tempatLahir;
            // $editdata->tanggalLahir=$editdata->tanggalLahir;
            // $editdata->pengajuan='Hapus akun ini';
            // $editdata->foto = $editdata->foto;
            $editdata->save();
        }
        // if ($editdata) {
        //     $editdata->pengajuan='Hapus akun ini';
        //     $editdata->save();
        // }
        return redirect('/laporan');
    }

    public function hapus($id)
    {
        $query = DB::table('komentar')->where('id', $id)->delete();
        return redirect()->back();
        // return redirect('/laporan');
    }
}
