<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Kenenisa Hotel</title>
    <link rel="shortcut icon" href="../../assets/main/../..assets/main/img/favicon.png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow&family=Barlow+Condensed&family=Gilda+Display&display=swap">
    {{-- {{ asset('assets/style.css') }} --}}
    <link rel="stylesheet" href="{{ asset('assets/main/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/main/css/style.css') }}" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Header -->
    @include('shared.main.header')
    @yield('content')
    <!-- Footer -->
    @include('shared.main.footer')
    <!-- jQuery -->
    {{-- { { asset('js/jquery.js') } } --}}
    <script src="{{ asset('assets/main/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/jquery.isotope.v3.0.2.js') }}"></script>
    <script src="{{ asset('assets/main/js/pace.js') }}"></script>
    <script src="{{ asset('assets/main/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/main/js/YouTubePopUp.js') }}"></script>
    <script src="{{ asset('assets/main/js/select2.js') }}"></script>
    <script src="{{ asset('assets/main/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/main/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/custom.js') }}"></script>
</body>

</html>
