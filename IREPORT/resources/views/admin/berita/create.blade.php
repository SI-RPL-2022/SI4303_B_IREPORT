@extends('layouts.masterAdmin')

@section('isi')
    
<form action="/beritaAdmin" method="POST" style="padding-bottom: 14px; padding-left: 14px; padding-right: 14px" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
        </div>
       @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        {{-- <div class="form-group pt-3">
            <label >Tanggal Laporan</label>
            <input type="date" class="form-control" name="tanggal" placeholder="Masukkan waktu pembuatan laporan">
        </div>
        @error('tanggal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}

        <div class="form-group pt-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" cols="30" rows="1" class="form-control"></textarea>
        </div>
        @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="form-group pt-3">
            <label>Foto</label>
            <input type="file" class="form-control" name="fotoBerita">
        </div>
        @error('fotoBerita')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- <div class="form-group pt-3">
            <label>Keterangan</label>
            <textarea name="keterangan" cols="30" rows="6" class="form-control"></textarea>
        </div>
        @error('keterangan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}

        <div class="form-group" style="padding-top: 20px">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>

@endsection