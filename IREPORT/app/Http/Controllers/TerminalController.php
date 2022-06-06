<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Laporan;
use App\User;
use App\Profile;
use GuzzleHttp\Client;

class TerminalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function terminal()
    {
        $roles=Auth::user()->role;
        switch($roles){
            case '1' ://admin
                return $this->dasboardAdmin();
                break;
            default:
                return $this->index();
        }
    }
    protected function dasboardAdmin(){
        // $lapor= Laporan::get();
        // return view('admin.main');
        $data = Profile::where('user_id', Auth::id())->first();
        // return view('layouts.masterAdmin', compact('data'));
        return view('admin.main', compact('data'));
        // ,compact("lapor")
      }
    
    protected function index()
    {
        // $laporan= Laporan::get();
        // return view('user.home_',compact('laporan'));
        return view('about');
    //     if ($request->has('search')) {
    //         $tampil = DB::table('laporan')-> where('kategori','LIKE','%'.$request->search.'%')->get();
    //     } else {
    //         $tampil = Laporan::all()->get();
    //         $client = New Client();
    //         $res = $client->request('GET', 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json', ['verify' => false]);
    //         $statuscode=$res->getStatusCode();
    //         $body=$res->getBody();
    //         $data=json_decode($body, true);
    //     }
    //     return view('user.home_', compact('tampil', 'data'));
    }
}
