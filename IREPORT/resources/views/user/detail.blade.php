@extends('layouts.master')
@section('konten')
<center>
    <div class="card" style="width: 50%; text-align:left; margin-bottom: 62px">
        <img class="card-img-top" style="height: 360px" src="{{ asset('/template/assets/img/'.$detail->foto)}}" alt="..." />
        <div class="card-body">
                <h4 class="fw-bolder">{{ $detail->kategori }}</h4>
                <i class="fa fa-map-marker"></i> {{ $detail->alamat }} <br>
                <i class="fa fa-book"></i> {{$detail->keterangan}} <br>
                <i class="fa fa-clock"></i> {{ $detail->tanggal }}
                <form action="/laporan/{{$detail->id}}" method="POST">
                    @csrf
                    @method('delete')
                    {{-- <a href="/laporan/{{ $detail->id }}" class="btn btn-info btn-sm">Detail</a> --}}
                    <a href="/laporan/{{ $detail->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete"></input>
                </form>
        </div>
        {{-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        </div> --}}
    </div>
</center>
{{-- <h1>Judul: {{ $detail->judul }}</h1>
<h3>Tanggal: {{ $detail->tanggal }}</h3>
<p>Lokasi: {{ $detail->alamat }}</p>
<p>Foto: {{ $detail->foto }}</p>
<p>Kategori: {{ $detail->kategori }}</p>
<p>Keterangan: {{ $detail->keterangan }}</p> --}}



{{-- <div class="col mb-5"> --}}
   
@endsection 
