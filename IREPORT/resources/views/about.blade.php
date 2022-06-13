@extends('layouts.master')
@section('konten')

<div class="container">
    {{-- &nbsp; --}}
    <div class="d-flex flex-row justify-content-center align-items-center" >
            <img src="{{ URL::to('logoIREPORT_full.png') }}" 
                alt="iReport" 
                class="img-fluid"
                style="width: 280px;">
        </div>
    </div>
    {{-- &nbsp;
    &nbsp; --}}
    <div style="padding-left: 10px; border-radius: 10px;
                padding-right: 10px;
                margin-top: 20px;
                margin-bottom: 100px; background-color: white" class="d-flex flex-row justify-content-center align-items-center">
        <div class="col">
            <img src="{{ URL::to('CONSTRUCTION.jpg') }}" alt="Construction" class="img-fluid">
        </div>
        <div class="col">
            <h4>Website iReport ini memfasilitasi masyarakat Kabupaten Mojokerto Jawa Timur dalam memberikan informasi kerusakan fasilitas publik yang dilewatinya, seperti jalan raya, trotoar, penerangan jalan, maupun saluran air. Ketika masyarakat menemukan fasilitas publik yang perlu diperbaiki, maka masyarakat hanya perlu untuk memfoto keadaan yang perlu diperbaiki, kemudian mengirimkannya pada halaman yang tersedia di website iReport.</h4>
        </div>
    </div>
</div>
@endsection