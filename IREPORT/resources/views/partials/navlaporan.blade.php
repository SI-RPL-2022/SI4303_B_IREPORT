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
      <li class="nav-item">
        <a href="/ourteam" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Our Team</p>
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