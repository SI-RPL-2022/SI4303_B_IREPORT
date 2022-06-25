@extends('layouts.master')
@section('konten')

<div class="row">
    <div class="col">
        <form class="form-inline" method="GET" action="/laporan" style="padding-bottom: 16px">
            <input value="{{ request('search') }}" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" >Search</button>
        </form>
    </div>
    <div class="col">
        <div class="dropdown" style="padding-left: 600px">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($data as $item)
                    <li><a class="dropdown-item" href="/laporan_/{{ $item['name'] }}">{{ $item['name'] }}</a></li>
                @endforeach
            </ul>
          </div>    
    </div>
</div>


@if (request('search')==true)
    <div>
        <a href="/laporan">
            <button class="btn btn-light my-2 my-sm-0" style="border-radius: 20px">
                {{ request('search') }} <i class="fa fa-times-circle-o"></i>
            </button>
        </a>
    </div>
    
@else
    
@endif


<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" style="padding-bottom: 130px; padding-top: 40px">    
    @forelse ($tampil as $data)
        <div class="col mb-5">
            <div class="card">
                <img class="card-img-top" src="{{ asset('image/'.$data->foto)}}" alt="..." />
                <div class="card-body">
                        <h4 class="fw-bolder">{{ ' '.$data->kategori }}</h4>
                        <i class="fa fa-map-marker"></i>{{ Str::limit(' '.$data->provinsi.', '.$data->alamat, 24) }} <br>
                        <i class="fa fa-book"></i> {{ Str::limit( ' '.$data->keterangan, 18) }} <br>
                        <i class="fa fa-clock"></i> {{ ' '.$data->tanggal }}
                        <br>
                        {{-- <i class="fa fa-sort-up"> </i> --}}
                        <a class="btn btn-primary" href="/laporanupvote/{{$data->id}}"> <i class="fa fa-toggle-up"></i> </a>
                        <a class="btn btn-secondary" href="/laporandownvote/{{$data->id}}"> <i class="fa fa-toggle-down"></i> </a> {{$data->vote}}

                        
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
    {{-- {{ $tampil->links() }} --}}
</div>
@endsection