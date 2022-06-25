@extends('layouts.masterAdmin')

@section('preloader')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset('logoIREPORT.png') }}" alt="Logo IREPORT" height="60" width="60">
</div>
@endsection

@section('nav samping')
@include('partials.navlaporan')
@endsection

@section('judul_dashboard')
    Dashboard Laporan
@endsection

@section('isi')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Provinsi</th>
                <th>Detail Lokasi</th>
                <th>Foto</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tampil as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->provinsi }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->foto }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <form action="/laporan/{{$item->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="/laporan/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/laporan/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete"></input>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        <center>Silahkan tambahkan cast</center> 
                    </td>
                </tr>
            @endforelse
            
        </tbody>
    </table>
</div>

@endsection