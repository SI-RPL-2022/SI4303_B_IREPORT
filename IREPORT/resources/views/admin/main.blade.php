@extends('layouts.masterAdmin')

@section('preloader')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset('logoIREPORT.png') }}" alt="Logo IREPORT" height="60" width="60">
</div>
@endsection

@section('nav samping')
  <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/laporanAdmin" class="nav-link">
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
        <li class="nav-item">
          <a href="/ourteam" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Our Team</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/pengajuan" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Pengajuan Hapus Akun</p>
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
@endsection