@extends('layouts.masterAdmin')

@section('preloader')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset('logoIREPORT.png') }}" alt="Logo IREPORT" height="60" width="60">
</div>
@endsection

@section('nav samping')
@include('partials.navberita')
@endsection

@section('judul_dashboard')
    Dashboard Berita
@endsection

@section('isi')
<!-- Small boxes (Stat box) -->
<div class="container">
    <div style="padding-bottom: 10px">
        <a href="/beritaAdmin_" class="btn btn-info btn-sm">Buat Berita</a>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Judul Berita</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Sumber</th>
                <th>Edit/Delete Data</th>
        </thead>
        <tbody>
            @forelse ($tampil as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->tgl}}</td>
                    <td>{{ $item->judul_berita}}</td>
                    <td>{{ Str::limit(' '.$item->deskripsi, 70) }} </td>
                    <td>{{ $item->foto }}</td>
                    <td>{{ $item->sumber}}</td>
                    <td>
                        <form action="/beritaAdmin/{{$item->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="/beritaAdmin/{{ $item->id }}/edit" class="btn btn-warning btn-sm" style="margin-bottom: 4px">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete"></input>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        <center>Silahkan tambahkan berita</center> 
                    </td>
                </tr>
            @endforelse
            
        </tbody>
    </table>
</div>
{{-- index berita  --}}

@endsection