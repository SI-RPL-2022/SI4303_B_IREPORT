@extends('layouts.masterAdmin')

@section('nav samping')
@include('partials.navberita')
@endsection

@section('judul_dashboard')
    Edit Berita
@endsection

@section('isi')
<form action="/beritaAdmin/{{ $edit_->id }}" method="POST" style="border-radius: 12px; padding-bottom: 14px; padding-left: 14px; padding-right: 14px" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul" value="{{ $edit_->judul_berita }}">
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
        <textarea name="deskripsi" cols="30" rows="1" class="form-control">{{ $edit_->deskripsi }}"</textarea>
    </div>
    @error('deskripsi')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="form-group pt-3">
        <label>Foto</label>
        <input type="file" class="form-control" name="fotoBerita" value="{{ $edit_->foto }}">
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
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
@endsection