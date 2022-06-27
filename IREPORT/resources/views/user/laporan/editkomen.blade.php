@extends('layouts.master')
@section('konten')

<center>
                <div class="card" style="margin-bottom: 173px; margin-top: 173px">
                    <div class="card-header" style="background-color: rgb(238, 237, 237)">
                      Komentar
                    </div>
                    <div class="card-body">
                      {{-- <blockquote class="blockquote mb-0"> --}}
                        <div>
                            <form action="/editdatakomen/{{ $komen->id }}" method="POST" style="" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group" style="padding-bottom: 0px">
                                    {{-- <label>Detail Lokasi</label> --}}
                                    <textarea name="isi" cols="20" rows="4" class="form-control" placeholder="{{ $komen->isi }}" style="padding-bottom: 0px"></textarea>
                                </div>
                                @error('isi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
    
                                <div class="form-group" style="padding-top:">
                                    <input type="submit" class="btn btn-info btn-sm" value="Edit"></input>
                                    <a href="/laporan/{{ $komen->laporan_id }}" class="btn btn-warning btn-sm" style="">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
        </div>
    </div>
</center>
@endsection
