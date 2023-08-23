@extends('main')

@section('content')

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                <h2>Watch High Quality <span>MOVIE</span> here on my website!</h2>
                
                </div>
            </div>
            </div>
        </section><!-- End Hero Section -->

        <main id="main" data-aos="fade" data-aos-delay="1500">
            
            
            <!-- ======= Gallery Section ======= -->
            <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div style="display: flex; justify-content:center;">                                     
                           
                        <div>
                            <h1>{{$apiData2['name']}} - {{$apiData2['year']}}</h1>
                                      

                            @foreach ($apiData as $item)
                                @foreach ($item['server_data'] as $itemz)
                                    
                                    <iframe src="{{$itemz['link_embed']}}" width="1280" height="720" frameborder="0" allowfullscreen></iframe>

                                @endforeach
                            @endforeach

                            
                        </div>    
                        
                </div>

                <button type="button" class="btn btn-outline-danger" onclick="alert('thank you ! we will fix it soon !')">error?</button>

            </div>
            </section><!-- End Gallery Section -->
            
            <div class="p-5">
                
                Over View: 
                {!! $apiData2['content'] !!}
                Time:
                {!! $apiData2['time'] !!}
            </div>
             

        </main><!-- End #main -->

@endsection('content')
