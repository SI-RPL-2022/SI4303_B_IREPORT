@extends('layouts.master')
@section('konten')

<div class="container">
    {{-- &nbsp; --}}
    {{-- <div class="d-flex flex-row justify-content-center align-items-center">
            <img src="{{ URL::to('logoIREPORT_full.png') }}" alt="iReport" class="img-fluid" style="width: 280px">
        </div> --}}
</div>
    {{-- &nbsp;
    &nbsp; --}}
    <div class="container" style="border-radius: 10px; margin-top: 20px; margin-bottom: 44px; background-color: white" class="d-flex flex-row justify-content-center align-items-center">
        <div class ="row" class="d-flex flex-row justify-content-center align-items-center">
            <div class="col" style="text-align: center; padding-top: 20px">
                <img src="{{ URL::to('logoIREPORT_full.png') }}" alt="iReport" class="img-fluid" style="width: 280px">
            </div>
        </div>
        
        <div class ="row">
            <div class="col" style="margin-bottom: 10px">
                <img src="{{ URL::to('CONSTRUCTION.jpg') }}" alt="Construction" class="img-fluid">
            </div>
            <div class="col" style="padding-top: 50px">
                <h4>Website iReport ini memfasilitasi masyarakat Indonesia dalam memberikan informasi kerusakan fasilitas publik yang dilewatinya, seperti jalan raya, trotoar, penerangan jalan, maupun saluran air. Ketika masyarakat menemukan fasilitas publik yang perlu diperbaiki, maka masyarakat hanya perlu untuk memfoto keadaan yang perlu diperbaiki, kemudian mengirimkannya pada halaman yang tersedia di website iReport.</h4>
            </div>
        </div>
    </div>
    
</div>
@endsection

{{-- style="margin-top: 20px; padding-bottom: 30px; background-color: white" --}}
        {{-- style="padding-left: 10px; border-radius: 10px;
        padding-right: 10px;margin-bottom: 100px; background-color: white" class="d-flex flex-row justify-content-center align-items-center" --}}