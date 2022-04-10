@extends('layouts.master')

@section('konten')
<div class="container">
    <form action="/profile/{{ $editProfile->id }}" method="POST" style="padding-bottom: 150px" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- <div class="input-group mb-3">
            <input type="text" name='name' class="form-control" placeholder="Full name">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror --}}
        {{-- data profile --}}
        <div class="input-group mb-3">
            <input type="text" name="nama" value="{{ $editProfile->nama }}" class="form-control" placeholder="Masukkan Nickname Anda">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        {{-- @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror --}}

        {{-- data profile --}}
        <div class="input-group mb-3">
            <textarea name="alamat" value="{{ $editProfile->alamat}}"placeholder="Masukkan Alamat Rumah Anda" cols="30" rows="1" class="form-control"></textarea>
        </div>
        <div class="input-group mb-3">
            <input type="text" value="{{ $editProfile->tempatLahir }}" name="tempatLahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-map-marker"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="date" value="{{ $editProfile->tanggalLahir }}"name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir Anda">
        </div>
        <div class="input-group mb-3">
            <input type="file" value="{{ $editProfile->foto }}"name="foto" class="form-control py-1" placeholder="Masukkan foto profile anda">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-camera"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">
                    Save Change
                </button>
            </div>
        </div>
    </form>
</div>
@endsection