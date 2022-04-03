@extends('layouts.master')
@section('konten')
{{ $detail->id }}

<h1>Judul: {{ $detail->judul }}</h1>
<h3>Tanggal: {{ $detail->tanggal }}</h3>
<p>Lokasi: {{ $detail->alamat }}</p>
<p>Foto: {{ $detail->foto }}</p>
<p>Keterangan: {{ $detail->keterangan }}</p>


@endsection 
