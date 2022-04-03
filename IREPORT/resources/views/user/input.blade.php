{{-- form input page --}}
@extends('layouts.master')
@section('konten')
 
<div class="container">
    <form action="/laporan" method="POST" style="padding-bottom: 150px">
        @csrf
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
            </div>
            {{-- @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
    
            {{-- <div class="form-group pt-3">
                <label>Kategori</label>
                <select class="form-select" aria-label="Default select example" name="kategori">
                    <option selected>Buka untuk memilih kategori</option>
                    <option value="Jalan Raya">Jalan Raya</option>
                    <option value="Trotoar">Trotoar</option>
                    <option value="Penerangan jalan">Penerangan jalan</option>
                    <option value="Gorong-gorong">Gorong-gorong</option>
                  </select>
                  
            </div> --}}
            {{-- @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
            
            <div class="form-group pt-3">
                <label >Tanggal</label>
                <input type="date" class="form-control" name="tanggal" placeholder="Masukkan waktu pembuatan laporan">
            </div>
            
            <div class="form-group pt-3">
                <label>Lokasi</label>
                <textarea name="lokasi" cols="30" rows="1" class="form-control"></textarea>
            </div>
            
            <div class="form-group pt-3">
                <label>Foto</label>
                <input type="file" class="form-control" name="fotoLokasi">
            </div>

            <div class="form-group pt-3">
                <label>Keterangan</label>
                <textarea name="keterangan" cols="30" rows="6" class="form-control"></textarea>
            </div>
            {{-- @error('bio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
    
            
    
            
    
            <div class="form-group" style="padding-top: 20px">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>


@endsection