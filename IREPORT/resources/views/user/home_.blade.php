@extends('layouts.master')
@section('konten')

<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" style="padding-bottom: 130px">    
    @forelse ($tampil as $data)
        <div class="col mb-5">
            <div class="card">
                <img class="card-img-top" src="{{ asset('image/'.$data->foto)}}" alt="..." />
                <div class="card-body">
                        <h4 class="fw-bolder">{{ $data->kategori }}</h4>
                        <i class="fa fa-map-marker"></i> {{ $data->alamat }} <br>
                        <i class="fa fa-book"></i> {{ Str::limit( $data->keterangan, 18) }} <br>
                        <i class="fa fa-clock"></i> {{ $data->tanggal }}
                        <br>
                        {{-- <i class="fa fa-sort-up"> </i> --}}
                        <button class="btn btn-primary"> <i class="fa fa-toggle-up"></i> </button>
                        <button class="btn btn-secondary"> <i class="fa fa-toggle-down"></i> </button> 123

                        
                    <form action="/laporan/{{$data->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <br>
                        <a href="/laporan/{{ $data->id }}" class="btn btn-info" style="padding-left: 90px; padding-right: 90px">Detail</a>
                        {{-- <a href="/laporan/{{ $data->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete"></input> --}}
                    </form>
                </div>
                {{-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                </div> --}}
            </div>
        </div>
    @empty
        
    @endforelse

</div>
@endsection 