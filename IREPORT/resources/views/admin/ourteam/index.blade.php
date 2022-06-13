@extends('layouts.masterAdmin')

@section('preloader')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset('logoIREPORT.png') }}" alt="Logo IREPORT" height="60" width="60">
</div>
@endsection

@section('nav samping')
@include('partials.navourteam')
@endsection

@section('judul_dashboard')
    Dashboard Our Team
@endsection

@section('isi')
<!-- Small boxes (Stat box) -->
<div class="container">
    <div style="padding-bottom: 10px">
        <a href="/ourteam_" class="btn btn-info btn-sm">Tambah Anggota Tim</a>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Quotes</th>
                <th>Foto</th>
        </thead>
        <tbody>
            @forelse ($tampil as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->foto}}</td>
                    <td>{{ Str::limit(' '.$item->quote, 70) }} </td>
                    <td>{{ $item->foto }}</td>
                    <td>
                        <form action="/ourteam/{{$item->id}}" method="POST">
                            @csrf
                            @method('delete')
                            {{-- <a href="/beritaAdmin/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a> --}}
                            <a href="/ourteam/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete"></input>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        <center>Silahkan tambahkan anggota tim</center> 
                    </td>
                </tr>
            @endforelse
            
        </tbody>
    </table>
</div>
{{-- index berita  --}}

@endsection