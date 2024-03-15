@extends('layouts.front.main')

@section('menu')

    <!-- Header Main -->
    @include('components.front.header')

    @include('components.front.carousel')

@endsection


@section('content')



<!-- ======= demarche Section ======= -->

<section id="demarche" class="demarche section-bg pt-0 pb-4">

    <div class="container" data-aos="fade-up">



    <div class="row">



        <div class="col-12 text-center mt-4" data-aos="zoom-in" data-aos-delay="100">

            <h4>Savoir. Faire.</h4>

        </div>



        <div class="col-sm-6 col-lg-4 mt-4" data-aos="zoom-in" data-aos-delay="100">

            <div class="member d-flex align-items-start">

                <div class="pic"><img src="{{asset('assets/front/img/icon/image-apprenez.jpg')}}" class="img-fluid" alt=""></div>

                <div class="member-info">

                    <h4>Apprenez où que vous soyez</h4>

                    <span></span>

                    <br>

                    <p>Accédez à votre formation 100% en ligne au bureau, à la maison, en ville, à la montagne... Partout !</p>

                </div>

            </div>

        </div>



        <div class="col-sm-6 col-lg-4 mt-4" data-aos="zoom-in" data-aos-delay="200">

            <div class="member d-flex align-items-start">

                <div class="pic"><img src="{{asset('assets/front/img/icon/image-apprenez.jpg')}}" class="img-fluid" alt=""></div>

                <div class="member-info">

                    <h4>Un mentor pour vous accompagner</h4>

                    <span></span>

                    <br>

                    <p>Bénéficiez chaque semaine des conseils d'un expert du métier qui vous aide à progresser tout au long de votre formation.</p>

                </div>

            </div>

        </div>



        <div class="col-sm-12 col-lg-4 mt-4" data-aos="zoom-in" data-aos-delay="300">

            <div class="member d-flex align-items-start">

                <div class="pic"><img src="{{asset('assets/front/img/icon/image-apprenez.jpg')}}" class="img-fluid" alt=""></div>

                <div class="member-info">

                    <h4>Travaillez sur des projets professionnalisants</h4>

                    <span></span>

                    <br>

                    <p>Réalisez des projets concrets, issus de scénarios métiers, directement applicables en entreprise.</p>

                </div>

            </div>

        </div>



    </div>



    </div>

</section><!-- End demarche Section -->



<!-- ======= Services Section ======= -->

<section id="services" class="services section">

    <div class="container" data-aos="fade-up">



        <div class="row">

            

            <div class="col-md-6 col-lg-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">

                <div class="row">

                    <div class="col-12">

                        <p class="title text-uppercase">Prêt à donner un nouvel élan à votre carrière ?</p>

                        <br>

                        <p>Mettez à jour vos connaissances, développez de nouvelles compétences, obtenez une certification professionnelle… Quel que soit 

                            votre projet de carrière, nous sommes là pour vous conseiller et vous accompagner. Apprenez un métier qui a de l'avenir avec la référence de l'éducation en ligne.</p>

                        <a href="{{route('login')}}" class="btn-learn-more">Démarrer mon inscription</a>

                    </div>

                </div>

            </div>



            <div class="col-md-6 col-lg-6 d-flex align-items-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">

                <div class="card border-0">

                    <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" controls></video>

                </div>

            </div>

            

        </div>

        



    </div>

</section><!-- End Services Section -->


<!-- ======= Thematique Section ======= -->

@include('components.front.formations')

<!-- End Thematique Section -->


<!-- ======= cours Section ======= -->

@include('components.front.cours')

<!-- End cours Section -->



@include('components.front.entreprise')



<!-- Testimonial Slider Section -->

<section id="testimonial" class="testimonials section-bg">

    <div class="container position-relative" data-aos="fade-up">



        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

          <div class="swiper-wrapper">

  

            <div class="swiper-slide">

              <div class="testimonial-item">

                <img src="{{asset('assets/front/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">

                <h3>Saul Goodman</h3>

                <h4>Ceo &amp; Founder</h4>

                <p>

                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                </p>

              </div>

            </div><!-- End testimonial item -->

  

            <div class="swiper-slide">

              <div class="testimonial-item">

                <img src="{{asset('assets/front/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">

                <h3>Sara Wilsson</h3>

                <h4>Designer</h4>

                <p>

                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                </p>

              </div>

            </div><!-- End testimonial item -->

  

            <div class="swiper-slide">

              <div class="testimonial-item">

                <img src="{{asset('assets/front/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">

                <h3>Jena Karlis</h3>

                <h4>Store Owner</h4>

                <p>

                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                </p>

              </div>

            </div><!-- End testimonial item -->

  

            <div class="swiper-slide">

              <div class="testimonial-item">

                <img src="{{asset('assets/front/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">

                <h3>Matt Brandon</h3>

                <h4>Freelancer</h4>

                <p>

                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                </p>

              </div>

            </div><!-- End testimonial item -->

  

            <div class="swiper-slide">

              <div class="testimonial-item">

                <img src="{{asset('assets/front/img/icon/image-apprenez.jpg')}}" class="testimonial-img" alt="">

                <h3>John Larson</h3>

                <h4>Entrepreneur</h4>

                <p>

                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                </p>

              </div>

            </div><!-- End testimonial item -->

  

          </div>

          <div class="swiper-pagination"></div>

        </div>

  

    </div>

</section>

<!-- End Testimonial Slider Section -->



@include('components.front.footer')



@endsection







