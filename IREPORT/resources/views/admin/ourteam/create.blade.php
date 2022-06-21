@extends('layouts.masterAdmin')

@section('nav samping')
@include('partials.navourteam')
@endsection

@section('judul_dashboard')
    Tambah Anggota Tim
@endsection

@section('isi')
<div class="container">
    <form action="/ourteam" method="POST" style="padding-bottom: 14px; padding-left: 14px; padding-right: 14px" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap anda">
        </div>
       @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Quote</label>
            <textarea name="quote" cols="30" rows="1" class="form-control"></textarea>
        </div>
        @error('quote')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="form-group">
            <label>Foto</label>
            <input type="file" class="form-control" name="fotoTim">
        </div>
        @error('fotoTim')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group" style="padding-top: 20px">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div> 
@endsection