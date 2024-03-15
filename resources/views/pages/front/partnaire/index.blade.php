@extends('layouts.front.main')

@section('menu')

    <!-- Header Main -->
    @include('components.front.header')
    @include('components.front.breadcrumds1')

@endsection

@section('content')

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-md-12 entries">

                <div class="row">
    
                    @for ($i=1; $i<=4; $i++)
                        @for ($i=1; $i<=4; $i++)
                            
                            <div class="col-sm-4 col-md-3">
                                <div class="entry">
                
                                    <div class="entry-img">
                                        <img src="assets/front/img/blog/blog-{{$i}}.jpg" alt="" class="img-fluid">
                                    </div>
                
                                </div><!-- End blog entry -->
                            </div>
                        
                        @endfor
                    @endfor
                    
    
                </div>

            </div><!-- End blog entries list -->

        </div>

    </div>
</section><!-- End Blog Section -->

@include('components.front.footer')

@endsection