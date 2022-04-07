<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-1 px-lg-1">
        <a class="navbar-brand" href="/laporan">
            <img src="{{ asset('logoIREPORT.png') }}" alt="" style="width: 40px">
        </a>
        {{-- <img src="{{ asset('logoIREPORT.png') }}" alt="" style="width: 46px"> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/laporan" style="color: rgb(0, 90, 163); font-family: poppins">Home</a></li>
                <li class="nav-item"> <a class="nav-link" aria-current="page" href="/about" style="color: rgb(0, 90, 163); font-family: poppins">About</a></li>
                <li class="nav-item"> <a class="nav-link" href="#!">About</a> </li>
                <li class="nav-item">
                    <a href="/laporan/create" style="text-decoration: none">
                        <button class="btn btn-outline-light" style="background-color: rgb(17, 169, 240); border-radius: 4px; padding:8px; font-size:10px">
                            Tambah Laporan
                        </button>
                    </a>
                </li>
            </ul>

            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- <i class="bi bi-person-circle"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    {{-- <li><a class="dropdown-item" href="#!">Hai User</a></li> --}}
                    {{-- <li><hr class="dropdown-divider" /></li> --}}
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>