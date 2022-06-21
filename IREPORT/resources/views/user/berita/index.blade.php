@extends('layouts.master')

@section('konten')
{{-- <center> --}}
    @foreach ($tampil as $item)
    
    <div class="container" style="width: 670px; height: 455px; background-color: aliceblue; margin-bottom:40px">
        <img src="{{ asset('image/'.$item->foto)}}" alt="foto berita" style="position: absolute; width: 333px; height: 455px; left: 509px; object-fit:cover">
        <div class="container" style="position: relative; width: 293px; height: 40px; left: 160px; top: 20px; font-family: poppins;
        font-style: italic; font-weight: 500; font-size: 13px; line-height: auto; color:#717171">
            {{ $item->tgl }}
        </div>
        <div class="container" style="position: relative; width: 293px; height: 103px; left: 160px; top: 10px; font-family: 'poppins';
        font-style: italic; font-weight: bold; font-size: 24px; line-height: 28px;">
             {{ Str::limit($item->judul_berita, 54) }}
        </div>
        <div class="container" style="position: relative; width: 293px; height: 103px; left: 160px; top: 40px; font-family: 'poppins';
        font-style: normal; font-weight: ; font-size: 16px; line-height: auto; color:rgb(130, 130, 130)">
        {{ Str::limit( ' '.$item->deskripsi, 100) }}
        </div>
        <div class="container" style="position: relative; width: 293px; height: 103px; left: 162px; top: 80px; font-family: 'poppins';
        font-style: italic; font-weight: ; font-size: 16px; line-height: auto; color:">
            <a href="{{ $item->sumber }}" target="_blank">Read More...</a>
        </div>
    </div>
    {{-- padasdad --}}
    @endforeach
{{-- </center> --}}
@endsection