@extends('layouts.master')

@section('konten')
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" style="padding-bottom: 200px; padding-top: 40px">    
    @forelse ($tampil as $key => $item)
        <div class="col mb-5">
            <div class="card" style="">
                <img class="card-img-top-team" src="{{ asset('image/'.$item->foto)}}" alt="..." />
                <div class="card-body" style="text-align: center; ">
                    <div >
                        <h5 class="fw-bolder">{{ ' '.$item->nama }}</h5>
                    </div>
                    <div style="font-family: 'poppins'; font-style: italic; font-size: 12px; line-height: 14px; color:rgb(156, 156, 156)">
                        {{$item->quote }}
                    </div>
                </div>
            </div>
        </div>
    @empty
        
    @endforelse
</div>

@endsection