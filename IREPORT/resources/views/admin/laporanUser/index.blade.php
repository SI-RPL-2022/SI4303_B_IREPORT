@extends('layouts.masterAdmin')

@section('nav samping')
<li class="nav-item menu-open">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Dashboard
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="/laporanAdmin" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Laporan User</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/beritaAdmin" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Berita</p>
      </a>
    </li>
  </ul>
</li>

<li class="nav-item">
  <a class="nav-link" href="/terminal" style="background-color: red; color: rgb(255, 255, 255)"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
  </a>
</li>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
@endsection


@section('isi')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Provinsi</th>
                <th>Detail Lokasi</th>
                <th>Foto</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tampil as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->provinsi }}</td>
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