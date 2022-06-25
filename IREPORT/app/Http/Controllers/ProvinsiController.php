<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function provinsi(){
        $client = New Client();
        $res = $client->request('GET', 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json', ['verify' => false]);
        $statuscode=$res->getStatusCode();
        $body=$res->getBody();

        $data=json_decode($body, true);
        return view('user.laporan.input', compact('data'));
    }

    public function provinsiFilter1(){
        // $client = New Client();
        // $res = $client->request('GET', 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json', ['verify' => false]);
        // $statuscode=$res->getStatusCode();
        // $body=$res->getBody();

        // $data=json_decode($body, true);
        // return view('user.home_', compact('data'));
    }
}
