@extends('layouts.master')
@section('konten')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container" style="background-color: white; margin-bottom: 150px; border-radius: 12px">
    <form action="/laporan" method="POST" style="padding-bottom: 14px; padding-left: 14px; padding-right: 14px" enctype="multipart/form-data">
        @csrf
            {{-- <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
            </div> --}}
            {{-- @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
    
            <div class="form-group pt-3">
                <label>Kategori</label>
                <select class="form-select" aria-label="Default select example" name="kategori">
                    <option selected>Buka untuk memilih kategori</option>
                    <option value="Jalan Raya">Jalan Raya</option>
                    <option value="Trotoar">Trotoar</option>
                    <option value="Penerangan jalan">Penerangan jalan</option>
                    <option value="Gorong-gorong">Gorong-gorong</option>
                  </select>
                  
            </div>
            @error('kategori')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group pt-3">
                <label >Tanggal Laporan</label>
                <input type="date" class="form-control" name="tanggal" placeholder="Masukkan waktu pembuatan laporan">
            </div>
            @error('tanggal')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group pt-3">
                <label>Provinsi</label>
                <select class="form-select" aria-label="Default select example" name="provinsi">
                    <option selected>Buka untuk memilih Provinsi</option>
                    @foreach ($data as $item)
                        <option value="{{ $item['name'] }}"> {{ $item['name']  }} </option>
                    @endforeach
                  </select>
            </div>
            @error('provinsi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group pt-3">
                <label>Detail Lokasi</label>
                <textarea name="lokasi" cols="30" rows="1" class="form-control"></textarea>
            </div>
            @error('lokasi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group pt-3">
                <label>Foto</label>
                <input type="file" class="form-control" name="fotoLokasi">
            </div>
            @error('fotoLokasi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group pt-3">
                <label>Keterangan</label>
                <textarea name="keterangan" cols="30" rows="6" class="form-control"></textarea>
            </div>
            @error('keterangan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    
            <div class="form-group" style="padding-top: 20px">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>
@endsection