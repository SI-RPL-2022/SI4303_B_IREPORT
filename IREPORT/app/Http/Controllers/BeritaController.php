<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

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
        $tampil = DB::table('berita')->get();
        return view('admin.berita.index', compact('tampil'));
    }
}
