@extends('layouts.masterAdmin')

@section('preloader')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset('logoIREPORT.png') }}" alt="Logo IREPORT" height="60" width="60">
</div>
@endsection

@section('nav samping')
@include('partials.navpengajuan')
@endsection

@section('judul_dashboard')
    Hapus Akun
@endsection

@section('isi')
<!-- Small boxes (Stat box) -->
<div class="container">
    {{-- <div style="padding-bottom: 10px">
        <a href="/ourteam_" class="btn btn-info btn-sm">Tambah Anggota Tim</a>
    </div> --}}
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Akun</th>
                <th>Pengajuan</th>
                <th>Action</th>
        </thead>
        <tbody>
            @forelse ($tampil as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item->pengajuan }}</td>
                    <td>
                        <div class="row row-sm-2">
                            <div class="col col-sm-2" style="padding-right:0">
                                <form action="/hapusakun/{{$item->user_id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete"></input>
                                </form>
                            </div>
                            <div class="col col-sm-4" style="padding-left:0">
                                <form action="/jadiadmin/{{$item->user_id}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn btn-warning btn-sm">Jadikan Admin</button>
                                </form>
                            </div>
                        </div>
                        
                        
                        
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