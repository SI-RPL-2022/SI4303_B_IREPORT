<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>IREPORT</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <link rel = "icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel = "shortcut icon" type = "image/png" href = "{{ asset('logoIREPORT.png') }}">
        {{-- <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> --}}
        <link href = "{{ asset('template/assets/css/style.css') }}" rel="stylesheet" />

        <!-- Favicons -->
        {{-- <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon"> --}}
        {{-- <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('template2/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('template2/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('template2/dist/css/adminlte.min.css') }}">

  </head>
  <body>
    @include('partials.navbar')
    <div class="container" style="padding-top: 20px">
      @yield('konten')
    </div>
    

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Vendor JS Files -->
    <script src="{{ asset('template/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>
    
    {{-- @stack('script') --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('template/assets/js/main.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('template2/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template2/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template2/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('template2/dist/js/demo.js') }}"></script>
  </body>
</html> 