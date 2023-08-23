@extends('main')

@section('content')

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                    <h2>I'm <span>NPBT </span> a Professional Web Deverloper </h2>
                    <h3>HIGH QUALITY MOVIE LIBRARY</h3>
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
                        <img src="https://img.ophim8.cc/uploads/movies/{{$item['thumb_url']}}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="https://img.ophim8.cc/uploads/movies/{{$item['poster_url']}}" title=" Tên Phim : {{$item['origin_name']}} - Năm : {{$item['year']}}" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href=" {{ url('watch/' . $item['slug']) }} " class="details-link"><i class="bi bi-link-45deg"></i>watch</a>
                        </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    @endforeach
                

                </div>

            </div>
            </section><!-- End Gallery Section -->

        </main><!-- End #main -->

@endsection('content')
