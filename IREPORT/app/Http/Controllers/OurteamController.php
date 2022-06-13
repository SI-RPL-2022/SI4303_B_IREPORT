<?php

namespace App\Http\Controllers;
use App\Ourteam;
use DB;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OurteamController extends Controller
{
    public function indexOurteam(Request $request)
    {
        $data = Profile::where('user_id', Auth::id())->first();
        $tampil = Ourteam::all();
        return view('admin.ourteam.index', compact('tampil', 'data'));
    }
    public function OurteamUser()
    {
        $tampil = Ourteam::all();
        return view('user.index', compact('tampil'));
    }

    public function inputPage(){
        $data = Profile::where('user_id', Auth::id())->first();
        return view ('admin.ourteam.create', compact( 'data'));
    }
    public function inputData(Request $request){
        $request->validate([
            'nama' => 'required',
            'quote' => 'required',
            'fotoTim' => 'required|image|mimes:jpeg,png,jpg,gif,svg'],
        [
            'nama.required' => 'Harus diisi',
            'quote.required'  => 'Harus diisi',
            'fotoTim.required'  => 'Harus diisi'
        ]);
        
        $fileName=time().'.'.$request->fotoTim->extension();
        $request->fotoTim->move(public_path("image"), $fileName);

        $dataourteam = new Ourteam;
        $dataourteam->nama=$request["nama"];
        $dataourteam->quote=$request["quote"];
        $dataourteam->foto=$fileName;
        // $databerita->user_id='0';
        $dataourteam->save ();
        return redirect('/ourteam');
    }

    public function editPage($id){
        $edit_ = DB::table('ourteam')->where('id', $id)->first();
        $data = Profile::where('user_id', Auth::id())->first();
        return view('admin.ourteam.edit', compact('edit_', 'data'));
    }

    public function editData($id, Request $request){
        $request->validate([
            'nama' => 'required',
            'quote' => 'required',
            'fotoTim' => 'required|image|mimes:jpeg,png,jpg,gif,svg'],
        [
            'nama.required' => 'Harus diisi',
            'quote.required'  => 'Harus diisi',
            'fotoTim.required'  => 'Harus diisi'
        ]);
        $edit=Ourteam::find($id);
        
        // if ($request->fotoTim=="") {
        //     $filename=$edit->fotoTim;
        //     $edit->foto=$request->fotoTim ? $request->foto :  $edit->foto;
        // }else{
            $fileName=time().'.'.$request->fotoTim->extension();
            $request->fotoTim->move(public_path("image"), $fileName);
        // }

        // $edit-> update([
        //     "nama" => $request["nama"],
        //     "quote" => $request["quote"],
        //     "foto" => $fileName
        // ]);

        if ($edit) {
            $edit->nama=$request["nama"] ? $request["nama"] : $edit->nama;
            $edit->quote=$request["quote"] ? $request["quote"] : $edit->quote;
            $edit->foto=$fileName ? $fileName : $edit->foto;
            $edit->save();
        }
        return redirect('/ourteam');
    }

    public function delete($id)
    {
        $query = DB::table('ourteam')->where('id', $id)->delete();
        return redirect('/ourteam');
    }
}
