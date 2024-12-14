<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Professional Academy of the Philippines</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('cymer/assets/img/ccs-logo.png') }}" rel="icon">
    <link href="{{ asset('cymer/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('cymer/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/css/style.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    @stack('css')
</head>

<body>
    <main id="main">
        @yield('content')
    </main>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>
</body>

<script src="{{ asset('cymer/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('cymer/assets/js/main.js') }}"></script>
@stack('js')
