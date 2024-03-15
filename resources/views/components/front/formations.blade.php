<!-- ======= Formation Section ======= -->

<section id="formation" class="formation section30">

    <div class="container">



        <div class="section-title" data-aos="fade-up">

            <h2>Toutes les formations</h2>

            <p>Dans quel domaine souhaitez-vous vous former ?</p>

        </div>

        <div class="row">
            @if (isset($list_Catformation) && !empty($list_Catformation))

            @foreach ($list_Catformation as $categorie)
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="icon-box">
                        
                        <div class="icon"><i class="{{$categorie->cat_f_icon}}"></i></div>

                        <h4 class="title"><a href="" data-toggle="modal" data-target="#exampleModalLong{{$categorie->id}}">{{$categorie->cat_f_libelle}}</a></h4>

                        <h4 class="sous-title">- 105 Cours -</h4>

                        <p class="description">
                            {!! Str::limit($categorie->cat_f_description, 80, ' ...') !!}
                        </p>

                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong{{$categorie->id }}"tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary text-primary">
                                <h5 class="modal-title" id="exampleModalLongTitle">Nos Formations</h5>
                                <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <h3 class="Tags-title text-uppercase">{{$categorie->cat_f_libelle}}</h3>
                                    <div class="Tags-item tags">
                                        <ul>
                                            <li><a href="{{route('thematiques')}}">App</a></li>
                                            <li><a href="{{route('thematiques')}}">IT</a></li>
                                            <li><a href="{{route('thematiques')}}">Business</a></li>
                                            <li><a href="{{route('thematiques')}}">Mac</a></li>
                                            <li><a href="{{route('thematiques')}}">Design</a></li>
                                            <li><a href="{{route('thematiques')}}">Office</a></li>
                                            <li><a href="{{route('thematiques')}}">Creative</a></li>
                                            <li><a href="{{route('thematiques')}}">Studio</a></li>
                                            <li><a href="{{route('thematiques')}}">Smart</a></li>
                                            <li><a href="{{route('thematiques')}}">Tips</a></li>
                                            <li><a href="{{route('thematiques')}}">Marketing</a></li>
                                        </ul>
                                    </div><!-- End Tags-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            @endforeach
                
            @else
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <p>Liste vide!!! Les données ne chargent plus.</p>
                </div>
            @endif

            @if (isset($seeAll) && $seeAll=='yes')

            @else
                
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">

                <div class="icon-box bg-primary">

                    <p class="description text-white">NZconseils dispose plusieurs formations qui pourraient vous concerner.</p>

                    <h4 class="title"><a class="btn-more-formation mt-2" href="{{route('formations')}}">Voir plus</a></h4>

                </div>

            </div>

            @endif

        </div>



    </div>

</section><!-- End Formation Section -->