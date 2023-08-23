@extends('main')

@section('content')

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                <h2>I'm <span>NPBTRUONG</span> a Professional FULLSTACK Web Deverloper </h2>
                <p>Movie Theater And Image gallery click here!:
                    <a href="{{url("movie")}}" class="twitter"><i class="bi bi-film"></i>Movie</a>
                    <a href="/" class="facebook"><i class="bi bi-images"></i>Image</a>
                </p>

                <!-- use Button-->
                <div class="text-success">Change Language use Button: <br> 
                    <button type="button" class="btn btn-outline-{{ session()->get('lang_code')=='en'?'success':'' }}"><a href="{{url("change-language/en")}}">English</a></button>
                    <button type="button" class="btn btn-outline-{{ session()->get('lang_code')=='vi'?'success':'' }}"><a href="{{url("change-language/vi")}}">VietNam</a></button>
                @if (session()->has('lang_code'))
                    @if (session()->get('lang_code')=='en')
                        Current English.
                    @endif
        
                    @if (session()->get('lang_code')=='vi')
                        Current Vietnamese.
                    @endif
                @endif
                </div>
                <!---->
                <br> 
                <!--use Select-->
                <div class="text-info">
                    Change Language use Select: <br> 
                    <select onchange="changeLanguage(this.value)"  >
                        <option {{ session()->get('lang_code')=='en'?'selected':'' }} value="en" data-image="https://via.placeholder.com/20x20" style="background-image: url('https://via.placeholder.com/20x20');">English</option>
                        <option {{ session()->get('lang_code')=='vi'?'selected':'' }} value="vi">VietNam</option>
                    </select>
                </div>
                <script>
                    function changeLanguage(value) {
                        window.location='{{url("change-language")}}/' + value; // /change-language/ is route in webphp
                    }
                </script>
                <!---->

                <div> {{ __('THIS IS IMAGE LIBRARY') }}</div>
                <!---->

                </div>
            </div>
            </div>
        </section><!-- End Hero Section -->

        <main id="main" data-aos="fade" data-aos-delay="1500">

            <!-- ======= Gallery Section ======= -->
            <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">
                    @foreach ($apiData as $item)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                        <img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lux_{{$item['num']}}.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lux_{{$item['num']}}.jpg" title=" {{__( $item['name'] )}} " class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lux_{{$item['num']}}.jpg" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    @endforeach
                

                </div>

            </div>
            </section><!-- End Gallery Section -->

        </main><!-- End #main -->

@endsection('content')
