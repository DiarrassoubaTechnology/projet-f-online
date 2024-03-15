<!DOCTYPE html>

<html lang="fr">



<head>

    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">



    <title>{{ config('app.name', 'Imagin Reflet') }} - {{$title}}</title>

    {{-- <meta property="og:image" content="{{$linkImage}}"> --}}

    <meta content="Une Agence Conseil en Communication et Stratégie Digitale. " name="description">

    <meta content="" name="keywords">



    <!-- Favicons -->

    <link href="{{asset('assets/logo/favicon.ico')}}" rel="icon">

    <link href="{{asset('assets/logo/nzconseils.png')}}" rel="apple-touch-icon">



    <!-- Google Fonts -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    

    <!-- Vendor CSS Files -->

    <link href="{{asset('assets/front/vendor/aos/aos.css')}}" rel="stylesheet">

    <link href="{{asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/front/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('assets/front/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/front/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/front/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

    <link href="{{asset('assets/front/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">

    @if (isset($swiper) && $swiper=='true')

        <link href="{{asset('assets/front/css/swiper.css')}}" rel="stylesheet">

    @endif

    @if (isset($filecss) && $filecss=='offers')

        <link href="{{asset('assets/front/css/offers_css.css')}}" rel="stylesheet">

    @endif

    <link href="{{asset('assets/front/css/shape.css')}}" rel="stylesheet">

    <link href="{{asset('assets/front/css/background.css')}}" rel="stylesheet">

    <link href="{{asset('assets/front/css/animation.css')}}" rel="stylesheet">



</head>



<body>

    @yield('menu')

    <main id="main">    

        @yield('content')

    </main><!-- End #main -->

    <div id="preloader"></div>

    @if (!isset($showFileLogin) || $showFileLogin=="false")

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @endif

    <script src="{{asset('assets/front/js/jquery-3.7.1.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Vendor JS Files -->

    <script src="{{asset('assets/front/vendor/aos/aos.js')}}"></script>

    <script src="{{asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/front/vendor/glightbox/js/glightbox.min.js')}}"></script>

    <script src="{{asset('assets/front/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <script src="{{asset('assets/front/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <script src="{{asset('assets/front/vendor/waypoints/noframework.waypoints.js')}}"></script>

    <script src="{{asset('assets/front/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/front/js/main.js')}}"></script>
    

    @if (isset($swiper) && $swiper=='true')

        <script src="{{asset('assets/front/js/swiper.js')}}"></script>

    @endif
    
</body>



</html>