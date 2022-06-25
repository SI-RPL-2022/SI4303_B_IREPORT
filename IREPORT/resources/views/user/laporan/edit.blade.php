@extends('layouts.master')

@section('konten') 

    <div class="container" style="background-color: white; margin-bottom: 150px; border-radius: 12px">
        <form action="/laporan/{{ $edit_->id }}" method="POST" style="border-radius: 12px; padding-bottom: 14px; padding-left: 14px; padding-right: 14px" enctype="multipart/form-data">
            @csrf
            @method('put')
    
            {{-- <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" value="{{ $edit_->judul }}" placeholder="Masukkan Judul">
            </div> --}}
            {{-- @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
    
            <div class="form-group pt-3">
                <label>Kategori</label>
                <select class="form-select" aria-label="Default select example" name="kategori">
                    <option selected>{{ $edit_->kategori }}</option>
                    <option value="Jalan Raya">Jalan Raya</option>
                    <option value="Trotoar">Trotoar</option>
                    <option value="Penerangan jalan">Penerangan jalan</option>
                    <option value="Gorong-gorong">Gorong-gorong</option>
                  </select>
            </div>
            {{-- @error('kategori')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
            
            <div class="form-group pt-3">
                <label >Tanggal</label>
                <input type="date" class="form-control" name="tanggal" placeholder="Masukkan waktu pembuatan laporan" value="{{ $edit_->tanggal }}">
            </div>
            {{-- @error('tanggal')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
            
            <div class="form-group pt-3">
                <label>Provinsi</label>
                <select class="form-select" aria-label="Default select example" name="provinsi" placeholder="Buka untuk memilih provinsi">
                    <option selected value="{{ $edit_->provinsi }}">Buka untuk memilih Provinsi</option>
                    @foreach ($data as $item)
                        <option value="{{ $item['name'] }}"> {{ $item['name']  }} </option>
                    @endforeach
                  </select>
            </div>
            {{-- @error('provinsi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

            <div class="form-group pt-3">
                <label>Detail Lokasi</label>
                <textarea name="lokasi" cols="30" rows="1" class="form-control">{{ $edit_->alamat }}</textarea>
            </div>
            {{-- @error('lokasi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
            
            <div class="form-group pt-3">
                <label>Foto</label>
                <input type="file" class="form-control" name="fotoLokasi" value="{{ $edit_->foto }}">
            </div>
            {{-- @error('fotoLokasi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
    
            <div class="form-group pt-3">
                <label>Keterangan</label>
                <textarea name="keterangan" cols="30" rows="6" class="form-control">{{ $edit_->keterangan }}</textarea>
            </div>
            {{-- @error('keterangan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
    
            <div class="form-group" style="padding-top: 20px">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection