<!-- ======= Thematique Section ======= -->

<section id="thematique" class="thematique">

    <div class="container">



      <div class="section-title">

        <h2 data-aos="fade-up">Cours et Certificats Professionnels</h2>

        <p data-aos="fade-up">Découvrez nos programmes les plus récents, axés sur l’acquisition de compétences recherchées.</p>

      </div>



      <div class="row">



        @for ($i=1; $i<=8; $i++)



        <div class="col-lg-3 col-md-3 col-sm-4 d-flex align-items-stretch" data-aos="fade-up">

          <div class="member">

            <a href="{{route('courses', 'cours 1')}}">

              <div class="member-img">

                <img src="{{asset('assets/front/img/cours/nzconseils-formation-202401311221-'.$i.'.jpg')}}" class="img-fluid" alt="">

                <div class="social">

                  <a href=""><i class="fa fa-signal"> <span> Facile</span></i></a>

                  <a href=""><i class="fa fa-clock"> <span> 6 heures</span></i></a>

                </div>

              </div>

            </a>
            <div class="member-info">

              <a href="{{route('courses', 'cours 1')}}">

                <h4>Maîtrisez les fondamentaux d'Excel</h4>

                <span class="text-danger font-weight-bold p-2">-- Gratuit --</span>

                <h3>BEURATIQUE -  COURS</h3>

                <p class="description">La maîtrise des fonctionnalités d'Excel est souvent indispensable...</p>
              
              </a>

            </div>

          </div>

        </div>



        @endfor



      </div>



    </div>

</section><!-- End Thematique Section -->