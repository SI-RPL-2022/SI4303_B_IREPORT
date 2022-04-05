<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-1 px-lg-1">
        <a class="navbar-brand" href="/laporan">
            <img src="{{ asset('logoIREPORT.png') }}" alt="" style="width: 40px">
        </a>
        {{-- <img src="{{ asset('logoIREPORT.png') }}" alt="" style="width: 46px"> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/laporan" style="color: rgb(0, 90, 163); font-family: poppins">Home</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/about" style="color: rgb(0, 90, 163); font-family: poppins">About</a></li>
                {{-- <a class="nav-link" href="#!">About</a>  --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Hai User</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                        {{-- <li><a class="dropdown-item" href="#!">New Arrivals</a></li> --}}
                    {{-- </ul> --}}
                </li>
            </ul>
            <a href="/laporan/create" style="text-decoration: none">
                <button  class="btn btn-outline-light" style="background-color: rgb(17, 169, 240); border-radius: 6px">
                    Tambah Laporan
                </button>
            </a>

            <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            
            {{-- <form class="d-flex">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form> --}}
        </div>
    </div>
</nav>