@extends('layouts.front.main')

@section('menu')

  <!-- Header Main -->
  @include('components.front.header')

  <!-- ======= Breadcrumbs ======= -->
  @include('components.front.breadcrumds2')
  <!-- ======= Breadcrumbs ======= -->

@endsection



@section('content')


<section id="content_of_course" class="content_of_course shadow-sm section-bg">

  <div class="container position-relative" data-aos="fade-up">

    <div class="row">
      <div class="col-sm-8 col-md-6">
        <!-- Bouton retour -->
        <a href="{{route('courses','cours 1')}}" class="link_return_courses"><i class="fa fa-arrow-left"></i> {{$sousTitle}}</a>
        
      </div>

    </div>

  </div>

</section>

<!-- ======= Ourcours Section ======= -->

<section id="ourcours" class="ourcours section">

  <div class="container" data-aos="fade-up">

    <div class="row d-flex justify-content-center">          

        <div class="col-md-10 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">

          <div class="container">

            <div class="row">

              <div class="col-12 _old_ourcours">

                <h2 class="title-ourcours">{{$sousTitle}}</h2>

                <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" data-aos="zoom-in" data-aos-delay="200" controls></video>

                <div class="row contenu-des-cours">

                  <h3 class="title-sous-ourcours">{{$sousTitle}}</h3>

                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minima id nostrum sequi ipsam at similique, non sit, quis voluptatum molestiae rerum nihil 
                    provident consequuntur possimus velit magnam fuga eveniet!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minima id nostrum sequi ipsam at similique, non sit, quis voluptatum molestiae rerum nihil 
                    provident consequuntur possimus velit magnam fuga eveniet!
                  </p>
  
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minima id nostrum sequi ipsam at similique, non sit, quis voluptatum molestiae rerum nihil 
                    provident consequuntur possimus velit magnam fuga eveniet!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minima id nostrum sequi ipsam at similique, non sit, quis voluptatum molestiae rerum nihil 
                    provident consequuntur possimus velit magnam fuga eveniet!
                  </p>

                  <div class="alert rounded-0 border-0 alert-secondary" role="alert">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minima id nostrum sequi ipsam at similique, non sit, quis voluptatum molestiae rerum nihil 
                      provident consequuntur possimus velit magnam fuga eveniet!
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minima id nostrum sequi ipsam at similique, non sit, quis voluptatum molestiae rerum nihil 
                      provident consequuntur possimus velit magnam fuga eveniet!</p>
                  </div>

                  
                  <h3 class="title-sous-ourcours">En résumé</h3>
                  <ul>
                    @for ($i=1; $i<4; $i++)
                      <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    @endfor
                  </ul>

                </div>

              </div>

            </div>

          </div>
        </div>

    </div>

  </div>

</section><!-- End Ourcours Section -->

<div class="container-fluid">
  <div class="row">
    <div class="alert rounded-0 border-0 bg-secondary">
      <div class="row justify-content-end">
        <div class="col-12 p-2 d-flex justify-content-end">
          <a class="btn-next-start" href="{{route('courses.suivi', ['cours 1', 'cours 1'])}}">Chapitre suivant</a>
        </div>
        <div class="col-12 d-flex justify-content-end">
          <p class="save-btn-next">Enregistrez vos données avec des variables</p>
        </div>
      </div>        
    </div>
  </div>
</div>

@include('components.front.footer')

@endsection