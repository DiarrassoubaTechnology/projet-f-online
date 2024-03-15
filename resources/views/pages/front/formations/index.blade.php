@extends('layouts.front.main')



@section('menu')



    <!-- Header Main -->

    @include('components.front.header')

    <!-- ======= Breadcrumbs ======= -->

    @include('components.front.breadcrumds1')

    <!-- ======= Breadcrumbs ======= -->

@endsection



@section('content')



<!-- ======= Formation Section ======= -->

{{-- <section id="formation" class="formation section">

    <div class="container" data-aos="fade-up">


        <div class="section-title" data-aos="fade-up">

            <h2>Trouvez votre formation</h2>

            <p>Avec Nzconseils profitez d’un catalogue qui couvre des sujets multiples allant des logiciels créatifs jusqu’aux techniques du web en passant par 

                des méthodes de développement professionnel et personnel.</p>

        </div>


        <div class="row">

            @for ($i=1; $i<=10; $i++)

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{$i}}00">

                <div class="icon-box">

                    <div class="icon"><i class="bi bi-briefcase"></i></div>

                    <h4 class="title"><a href="" data-toggle="modal" data-target="#exampleModalLong{{$i}}">Formation professionnelle {{$i}}</a></h4>

                    <h4 class="sous-title">- 105 Cours -</h4>

                    <p class="description">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>

                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                <h3 class="Tags-title text-uppercase">Formation professionnelle {{$i}}</h3>
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

            @endfor

        </div>
        
    </div>

</section> --}}
@include('components.front.formations')
<!-- End Formation Section -->

@include('components.front.footer')

@endsection