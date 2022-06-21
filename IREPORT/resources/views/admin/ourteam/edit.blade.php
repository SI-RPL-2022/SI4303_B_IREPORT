@extends('layouts.masterAdmin')

@section('nav samping')
@include('partials.navourteam')
@endsection

@section('judul_dashboard')
    Edit Anggota Team
@endsection

@section('isi')
<form action="/ourteam/{{ $edit_->id }}" method="POST" style="border-radius: 12px; padding-bottom: 14px; padding-left: 14px; padding-right: 14px" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" value="{{ $edit_->nama }}">
    </div>
   @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group pt-3">
        <label>Qoute</label>
        <textarea name="quote" cols="30" rows="1" class="form-control">{{ $edit_->quote }}</textarea>
    </div>
    @error('quote')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="form-group pt-3">
        <label>Foto</label>
        <input type="file" class="form-control" name="fotoTim" value="{{ $edit_->foto }}">
    </div>
    {{-- @error('fotoTim')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror --}}

    <div class="form-group" style="padding-top: 20px">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
@endsection