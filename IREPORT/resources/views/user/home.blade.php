@extends('layouts.master')
@section('konten')

<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">    
    @forelse ($tampil as $data)
        <div class="col mb-5">
            <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="{{ asset('/template/assets/img/'.$data->foto)}}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">{{ $data->judul }}</h5>
                        <!-- Product price-->
                        {{-- @currency($data->alamat) --}}
                        {{ $data->alamat }}
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    {{-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/detail/{{ $row->id }}".>Detail</a></div> --}}
                </div>
            </div>
        </div>
    @empty
        
    @endforelse

</div>

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Foto</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tampil as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->foto }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <form action="/laporan/{{$item->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="/laporan/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="/laporan/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete"></input>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <center>Silahkan tambahkan cast</center> 
                        </td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
    
@endsection 