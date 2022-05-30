@extends('layouts.masterAdmin')

@section('isi')

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Bounce Rate</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

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