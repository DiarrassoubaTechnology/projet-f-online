<!-- ======= Header ======= -->

<header id="header" class="fixed-top">

    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('home')}}" class="logo me-auto"><img src="{{asset('assets/logo/nzconseils.png')}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">

        <ul class="text-uppercase">

          <li class="dropdown"><a href="#" class="{{(request()->routeIs('formations') || request()->routeIs('offers')) ? 'active' : ''}}"><span>Formations</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto {{(request()->routeIs('formations')) ? 'active' : ''}}" href="{{route('formations')}}">Nos Formations</a></li>
              <li><a class="nav-link scrollto {{(request()->routeIs('offers')) ? 'active' : ''}}" href="{{route('offers')}}">Nos Offres</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{(request()->routeIs('thematiques') || request()->routeIs('courses')) ? 'active' : ''}}" href="{{route('thematiques')}}">Nos Thématiques</a></li>

          <li><a class="nav-link scrollto {{(request()->routeIs('blog')) ? 'active' : ''}}" href="{{route('blog')}}">Blog</a></li>

          <li><a class="nav-link scrollto {{(request()->routeIs('partnaires')) ? 'active' : ''}}" href="{{route('partnaires')}}">Entreprises </a></li>

          <li><a class="getstarted scrollto text-uppercase" href="{{route('login')}}">Se connecter</a></li>

        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->



    </div>

</header><!-- End Header -->