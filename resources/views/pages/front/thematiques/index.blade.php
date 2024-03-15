@extends('layouts.front.main')



@section('menu')



    <!-- Header Main -->

    @include('components.front.header')

    <!-- ======= Breadcrumbs ======= -->

    @include('components.front.breadcrumds1')

    <!-- ======= Breadcrumbs ======= -->

@endsection



@section('content')

<!-- ======= Thematique Section ======= -->

<section id="thematique" class="thematique">

    <div class="container">



      <div class="section-title">

        <h2 data-aos="fade-up">Cours et Certificats Professionnels</h2>

        <p data-aos="fade-up">Découvrez nos programmes les plus récents, axés sur l’acquisition de compétences recherchées.</p>

      </div>



      <div class="row">

        @include('components.front.search-formations')

        @if (empty($list_Thematiques))

        <div class="col-lg-12 d-flex align-items-stretch justify-content-center" data-aos="fade-up">
          <p>Votre liste est vide. Nous ne disposons pas de formations actuellement.</p>
        </div>
          
        @else
          
          @foreach ($list_Thematiques as $themes)
            
          <div class="col-lg-3 col-md-3 col-sm-4 d-flex align-items-stretch" data-aos="fade-up">

            <div class="member">

                <a href="{{route('courses', $themes->formation_libelle)}}">
    
                  <div class="member-img">
    
                    <img src="{{asset('assets/front/img/cours/'.$themes->formation_image)}}" class="img-fluid" alt="">
    
                    <div class="social">
    
                      <a href="{{route('courses', $themes->formation_libelle)}}"><i class="fas {{($themes->formation_niveau == 'Facile')? 'fa-signal-2':'fa-signal'}}"> <span> {{$themes->formation_niveau}}</span></i></a>
    
                      <a href="{{route('courses', $themes->formation_libelle)}}"><i class="fa fa-clock"> <span> {{$themes->formation_time}} heures</span></i></a>
    
                    </div>
    
                  </div>
    
                </a>
                <div class="member-info">
    
                  <a href="{{route('courses', $themes->formation_libelle)}}">
    
                    <h4>{{$themes->formation_libelle}}</h4>
    
                    <span class="text-danger font-weight-bold p-2">-- {{$themes->formation_nature}} --</span>
    
                    <h3>{{$themes->tformation_libelle}} -  COURS</h3>
    
                    <p class="description">{!! Str::limit($themes->formation_text_accrocheur, 80, ' ...') !!}</p>
                  
                  </a>
    
                </div>

            </div>

          </div>
          
          @endforeach

        @endif



      </div>



    </div>

</section><!-- End Thematique Section -->

@include('components.front.footer')

@endsection