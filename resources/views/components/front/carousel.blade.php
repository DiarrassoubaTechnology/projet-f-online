  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center" style="background:linear-gradient( rgba(0, 0, 0, 0.65) 100%, rgba(0, 0, 0, 0.5)100%),url('assets/front/img/carousel/carousel-1.jpg');">

    

    <div class="container" id="fontback">

      <div class="row">



        <div class="col-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">



          <div class="row justify-content-center">

            <div class="col-10 col-md-6">

              <h4 class="text-uppercase">Formez-vous en ligne avec plus de 1700 formations et devenez un expert !</h4>

              @if (\Session::has('info'))

                <div class="my-3">

                  <div class="alert alert-success">{!! \Session::get('info') !!}</div>

                </div>

              @endif

              @if (\Session::has('infoF'))

                <div class="my-3">

                  <div class="alert alert-warning">{!! \Session::get('info') !!}</div>

                </div>

              @endif

              <form action="{{route('home')}}" method="post">

                @csrf

                <input required type="email" name="email" placeholder="Que souhaitez vous apprendre?"><input type="submit" value="RECHERCHER">

              </form>

              <p class="mt-2 mb-5">Ou laissez nous <u><a class="text-white" href="#formation">vous guider</a></u></p>

            </div>

          </div>

          

          <div class="d-flex justify-content-center">

            <a href="{{route('login')}}" class="btn-get-started scrollto text-uppercase">Rejoindre la communauté</a>

          </div>

            

        </div>

        

      </div>

      

    </div>



  </section><!-- End Hero -->