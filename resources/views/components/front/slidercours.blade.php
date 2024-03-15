<div class="slide-container swiper">

    <div class="slide-content">

        <div class="card-wrapper swiper-wrapper">

            @for ($i=1; $i<=4; $i++)

            <a href="#" class="card swiper-slide">

                <div class="image-content">

                    <div class="card-image">

                        <img src="{{asset('assets/front/img/cours/nzconseils-formation-202401311221-'.$i.'.jpg')}}" alt="" class="card-img">

                    </div>

                </div>

                <div class="card-content">

                    <h3 class="soustitle">BEURATIQUE -  COURS</h3>

                    <h3 class="soustitle"><span class="cours_gratuit">Gratuit</span></h3>

                    <h2 class="name">Maîtrisez les fondamentaux d'Excel</h2>

                    <div class="container description">

                        <div class="row pb-2">

                            <div class="col-6">

                                <span class="fa fa-signal timer"></span> <span class="timer">Facile</span>

                            </div>

                            <div class="col-6">

                                <span class="far fa-clock timer"></span> <span class="timer">6 heures</span>

                            </div>

                        </div>

                    </div>

                    <p class="description">La maîtrise des fonctionnalités d'Excel est souvent indispensable. Prenez en main le logiciel puis allez plus loin avec les tableaux, les formules et les tableaux croisés dynamiques !</p>

                </div>

            </a>

            

            @endfor

        </div>

    </div>

    <div class="swiper-button-next swiper-navBtn"></div>

    <div class="swiper-button-prev swiper-navBtn"></div>

    <div class="swiper-pagination"></div>

</div>