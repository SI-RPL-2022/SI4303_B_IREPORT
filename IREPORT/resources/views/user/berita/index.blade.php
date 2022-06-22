@extends('layouts.master')

@section('konten')


<div class="container" style="">
    <div class="row">
        <div class="col" style="text-align:center; left:36%">
            <form class="form-inline" method="GET" action="/berita_user" style="padding-bottom: 20px;">
                <input value="{{ request('search') }}" name="search" class="form-control mr-sm-2" type="search" placeholder="Cari Berita" aria-label="Search">
                <button class="btn btn-info my-2 my-sm-0" type="submit">Cari</button> 
                {{-- <----btn-outline-info----!> --}}
            </form>
        </div>
    </div>
    
</div>


    @foreach ($tampil as $item)
    
    <div class="container" style="width: 670px; height: 455px; background-color: aliceblue; margin-bottom:40px">
        <div class="row">

            <div class="col" style="padding:0">
                <img src="{{ asset('image/'.$item->foto)}}" alt="foto berita" style="position:; left: ; bottom: ; width: 333px; height: 455px; object-fit:cover">
            </div>

            <div class="col">
                <div class="" style="position: relative; width: 293px; height: 40px; left: 10px; top: 20px; font-family: poppins;
                font-style: italic; font-weight: 500; font-size: 13px; line-height: auto; color:#717171">
                    {{ $item->tgl }}
                </div>
                <div class="" style="position: relative; width: 293px; height: 103px; left: 10px; top: 10px; font-family: 'poppins';
                font-style: italic; font-weight: bold; font-size: 24px; line-height: 28px;">
                     {{ Str::limit($item->judul_berita, 54) }}
                </div>
                <div class="" style="position: relative; width: 293px; height: 103px; left: 10px; top: 40px; font-family: 'poppins';
                font-style: normal; font-weight: ; font-size: 16px; line-height: auto; color:rgb(130, 130, 130)">
                {{ Str::limit( ' '.$item->deskripsi, 80) }}
                </div>
                <div class="" style="position: relative; width: 293px; height: 103px; left: 10px; top: 80px; font-family: 'poppins';
                font-style: italic; font-weight: ; font-size: 16px; line-height: auto; color:">
                    <a href="{{ $item->sumber }}" target="_blank">Read More...</a>
                </div>
            </div>

        </div>
        
        
        
    </div>
    {{-- padasdad --}}
    @endforeach
{{-- </center> --}}
@endsection