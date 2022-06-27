@extends('layouts.master')
@section('konten')

<center>
    <div class="card" style="width: 50%; text-align:left; margin-bottom: 40px">
        <img class="card-img-top" style="height: 360px" src="{{ asset('image/'.$detail->foto)}}" alt="..." />
        <div class="card-body">
                <h4 class="fw-bolder">{{ $detail->kategori }}</h4>
                <i class="fa fa-map-marker"></i> {{ $detail->alamat }} <br>
                <i class="fa fa-book"></i> {{$detail->keterangan}} <br>
                <i class="fa fa-clock"></i> {{ $detail->tanggal }} <br>
                <a class="btn btn-primary btn-sm" href="/laporanupvote/{{$detail->id}}"> <i class="fa fa-toggle-up"></i> </a>
                <a class="btn btn-secondary btn-sm" href="/laporandownvote/{{$detail->id}}"> <i class="fa fa-toggle-down"></i> </a> {{$detail->vote}}

                <div style="padding-bottom: 20px">
                    <form action="/laporan/{{$detail->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <br>
                        <a href="/laporan/{{ $detail->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete"></input>
                    </form>
                </div>

                <div class="card">
                    <div class="card-header" style="background-color: rgb(238, 237, 237)">
                      Komentar
                    </div>
                    <div class="card-body">
                      {{-- <blockquote class="blockquote mb-0"> --}}
                        <div>
                            <form action="/laporan/{{ $detail->id }}" method="POST" style="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" style="padding-bottom: 0px">
                                    {{-- <label>Detail Lokasi</label> --}}
                                    <textarea name="isi" cols="20" rows="4" class="form-control" placeholder="Masukkan komentar anda" style="padding-bottom: 0px"></textarea>
                                </div>
                                @error('isi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
    
                                <div class="form-group" style="padding-top:">
                                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                                    <input type="submit" class="btn btn-secondary btn-sm" value="Submit"></input>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div>
{{-- Komentar --}}
                            @foreach ($komen as $datakomen)
                            <table>
                                {{-- class="tabel table-bordered" --}}
                                    <tr style="">
                                        <td style="padding-right: 10px; vertical-align: top" rowspan="3">
                                                <img class="img-circle elevation-2" src="{{ asset('image/'.$datakomen->foto) }}"
                                                    alt="Profile Picture" style="width: 40px; height: 40px; object-fit:cover">
                                        </td>
                                        <td>
                                            <div style="font-family: 'poppins'; font-style: ; font-weight: bold; font-size: 14px; 
                                            line-height:; color:">
                                                {{ $datakomen->nama }}
                                            </div>
                                        </td>
                                        <td style="vertical-align: top; padding-left: 10px" rowspan="3">
                                            <div style="text-align:center">
                                                {{-- edit --}}
                                                {{-- <form action="/laporan/{{ $datakomen->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="" value="Delete" style="background-color:white; border: none; 
                                                    font-family: 'poppins'; font-style: ; font-weight: bold; font-size: 10px; color:rgb(157, 157, 157)"></input>
                                                </form> --}}
                                                {{-- <a href="/editkomen/{{ $datakomen->id }}" class="" style="margin-bottom: 4px; font-family: 'poppins';
                                                    font-style: ; font-weight: bold; font-size: 10px; color:rgb(157, 157, 157)">Edit</a> --}}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 460px">
                                            <div  style="font-family: 'poppins'; font-style: ; font-weight: ; font-size: 11px; 
                                            line-height:; color:">
                                                {{ $datakomen->created_at }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 40px">
                                            <div style="font-family: 'poppins'; font-style: ; font-weight: ; font-size: 14px; 
                                                line-height:; color:">
                                                {{ $datakomen->isi }}
                                                <form action="/laporan/{{ $datakomen->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="" value="Delete" style="background-color:white; border: none; padding-left: 390px;
                                                    font-family: 'poppins'; font-style: ; font-weight: bold; font-size: 10px; color:rgb(118, 118, 118)"></input>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                {{-- </div> --}}
                                
                            </table>
                            @endforeach
                        </div>
                        
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                      {{-- </blockquote> --}}
                    </div>
                  </div>

        </div>
        {{-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        </div> --}}
    </div>
</center>
@endsection
