@extends('layouts.front.main')

@section('menu')

  <!-- Header Main -->
  @include('components.front.header')

  <!-- ======= Breadcrumbs ======= -->
  @include('components.front.breadcrumds2')
  <!-- ======= Breadcrumbs ======= -->

@endsection



@section('content')

{{-- @dd($list_courss) --}}
<section id="detail_of_course" class="detail_of_course section-bg">

  <div class="container position-relative" data-aos="fade-up">

    <div class="row container_courses">
      <div class="col-sm-8 col-md-6">
        <!-- Bouton retour -->
        <a href="{{route('thematiques')}}" class="link_return_courses"><i class="fa fa-arrow-left"></i> Tous les cours</a>

        <!-- contenu -->
        <h4>{{$list_courss[0]->tformation_libelle}}</h4>

        <h2>{{$list_courss[0]->formation_libelle}}</h2>

        <p class="description_courses">{{$list_courss[0]->formation_description}}</p>

        <div class="times_courses">

          <p><i class="fa fa-signal"> <span> {{$list_courss[0]->formation_niveau}}</span></i> &nbsp; &nbsp;&nbsp;<i class="far fa-clock"> <span> {{$list_courss[0]->formation_time}} heures</span></i></p>

        </div>
        
        <div class="row">

          <p class="start_courses">
            <span>Ce cours en libre accès vous intéresse ?</span>
            @include('components.front.boutonNonLogin')
          </p>

        </div>

      </div>

      <div class="col-sm-4 col-md-6 position-bouton">
        <div class="row d-flex align-items-center">
          <!-- Button trigger modal -->
          <a class="play-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/h7M7f-afhvY" data-target="#myModal"></a>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabelLongTitle">{{$sousTitle}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body p-0 m-0">
                  <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" controls></video>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>

</section>

<!-- ======= Plan Section ======= -->

<section id="plan" class="plan section">

  <div class="container" data-aos="fade-up">

    <div class="row">

        <div class="card border-0 col-12 col-md-8 d-flex align-items-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" controls></video>
        </div>          

        <div class="col-md-10 mt-4 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">

          <div class="container">

            <div class="row">

              <div class="col-12 paragraph">
                <p>{{$list_courss[0]->formation_resume}}</p>

                <div class="alert rounded-0 border-0 alert-secondary" role="alert">
                  <h4 class="alert-heading">Nos formations vous permettent d'apprendre par la pratique.</h4>
                  <p>Vous êtes accompagné par un mentor, professionnel du métier, tout au long de votre formation:</p>
                  <ul>
                    <li>20% de théorie</li>
                    <li>80% de pratique</li>
                  </ul>
                </div>

                <h2 class="title-objectif">Objectifs pédagogiques</h2>

                @if (empty($list_objectifs))
                  <p>Aucun objectif</p>
                @else
                  
                @endif
                <ul class="list-unstyled objectif">
                  @foreach ($list_objectifs as $objectifs)
                  <li>
                    <i class="far fa-lightbulb"></i>
                    {{$objectifs->objectif_p_contenu}}
                  </li>
                  @endforeach
                </ul>
                
                <h2 class="title-prerequis">Prérequis</h2>
                @if (empty($list_prerequis))
                  <p>Aucun Prérequis</p>
                @else
                  
                @endif
                <ul class="list-unstyled prerequis">
                  @foreach ($list_prerequis as $prerequis)
                  <li>
                    <i class="fas fa-book"></i>
                    {{$prerequis->prerequis_contenu}}
                  </li>
                  @endforeach
                </ul>

                <h2 class="title-debouche">Débouchés</h2>

                <ul class="list-unstyled debouche">
                  @for ($i=1; $i<4; $i++)
                    <li><i class="fas fa-toolbox"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                  @endfor
                </ul>

              </div>

              <div class="col-12 summary">

                <div class="bg-secondary p-3">
                  <p>Suivez une des formations diplômantes de notre école 100% en ligne, et transformez vos connaissances en compétences professionnelles.</p>
                </div>

                <h2 class="title-summary">Table des matières</h2>

                <ul>
                  @for ($i=1; $i<4; $i++)
                    <li class="list-unstyled partie">
                      <h3>Partie {{$i}}</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </li>
                    <ol class="sous-partie">
                      @for ($j=1; $j<4; $j++)
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                      @endfor
                    </ol>
                  @endfor
                </ul>

                <br>
                <h2 class="title-summary">Contributeurs</h2>

                <h5>Le professeur</h5>
                
                <ul class="list-unstyled teachers">
                  @for ($i=1; $i<2; $i++)
                    <li>
                      <diw class="row">
                        <div class="col-sm-2">
                          <i class="far fa-user"></i> 
                        </div>
                        <div class="col-sm-10">
                          <span class="name">Paul-Emile Brotons </span><br><span class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
                        </div>
                      </diw>
                    </li>
                  @endfor
                </ul>

              </div>

              <div class="col-12 creator">
                <h2>Créé par</h2>
                <div class="row">
                  <div class="col-sm-3 d-flex justify-content-center align-items-center">
                    <img class="logo" src="{{asset('assets/logo/nzconseils.png')}}" alt="" class="img-fluid">
                  </div>
                  <div class="col-sm-1 border-left border-x-2"></div>
                  <div class="col-sm-8">
                    <p>Mis à jour le 31/01/2024</p>
                    <p>Licence: &nbsp; <img width="100" src="{{asset('assets/front/img/licence/fdfp.png')}}" alt="fdfp" srcset="{{asset('assets/front/img/licence/fdfp.png')}}"></p>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>

    </div>

  </div>

</section><!-- End Services Section -->

<div class="container-fluid">
  <div class="row">
    <div class="alert rounded-0 bg-secondary">
      <div class="row">
        <div class="col-12 p-2 d-flex justify-content-center">
          <h5>cours 1 - apprenez les bases du langage Python</h5>
        </div>
        <div class="col-12 p-2 d-flex justify-content-center">
          @include('components.front.boutonNonLogin')
        </div>
      </div>        
    </div>
  </div>
</div>

@include('components.front.footer')

@endsection