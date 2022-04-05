@extends('layouts.master')
@section('konten')
<center>
    <div class="card" style="width: 50%; text-align:left; margin-bottom: 40px">
        <img class="card-img-top" style="height: 360px" src="{{ asset('image/'.$detail->foto)}}" alt="..." />
        <div class="card-body">
                <h4 class="fw-bolder">{{ $detail->kategori }}</h4>
                <i class="fa fa-map-marker"></i> {{ $detail->alamat }} <br>
                <i class="fa fa-book"></i> {{$detail->keterangan}} <br>
                <i class="fa fa-clock"></i> {{ $detail->tanggal }}
                <form action="/laporan/{{$detail->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <br>
                    <a href="/laporan/{{ $detail->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete"></input>
                </form>
        </div>
        {{-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        </div> --}}
    </div>
</center>
@endsection