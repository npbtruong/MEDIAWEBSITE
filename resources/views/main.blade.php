<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MediaWebsite</title>   
        <link href="{{ asset('assets/lux.jpg') }}" rel="icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href=" {{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href=" {{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href=" {{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href=" {{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href=" {{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href=" {{ asset('assets/css/main.css') }}" rel="stylesheet">
       
        
        <style>
            select {
              padding: 5px;
              background-size: 20px 20px;
              background-position: right center;
              background-repeat: no-repeat;
            }
          
            option[data-image] {
              background-size: 20px 20px;
              background-position: center left;
              background-repeat: no-repeat;
              padding-left: 30px;
            }
          </style>
    </head>
    <body>


        <!-- ======= Header ======= -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center  me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/lux.jpg') }}" alt=""> 
                {{-- <i class="bi bi-camera"></i> --}}
                <h1>Media Website</h1>
            </a>

            <nav id="navbar" class="navbar">
                
            </nav><!-- .navbar -->
            
            <div class="header-social-links">
                <a href="{{url("movie")}}" class="twitter"><i class="bi bi-film"></i> Movie</a>
                <a href="/" class="facebook"><i class="bi bi-images"></i> Image</a>
                
            </div>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
        </header><!-- End Header -->

        


        @yield('content')







        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>NPBTRUONG 7</span></strong>. All Rights Reserved
            </div>
            
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader">
            <div class="line"></div>
        </div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        
        <script src="{{ asset('assets/js/main.js') }}"></script>
        
    </body>
</html>
