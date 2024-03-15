@extends('layouts.front.main')

@section('menu')

@endsection


@section('content')

<!-- ======= Login Section ======= -->
<section id="login" class="login">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('home')}}" class="authlogo me-auto">
        <img src="{{asset('assets/logo/nzconseils.png')}}" alt="" class="img-fluid">
      </a>

      <h2>Connexion</h2>
      <p>Bon retour</p>
    </div>

    <div class="row d-flex justify-content-center">

      <div class="col-sm-8 col-md-6 col-lg-5 mt-5 mt-lg-0 d-flex align-items-stretch">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">

          <div class="row">

            <div class="form-group col-md-12">
              <label for="name">Adresse e-mail</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="nom@email.com" required>
            </div>

            <div class="form-group col-md-12">
              <label for="name">Mot de passe</label>
              <input type="password" name="name" class="form-control" id="name" placeholder="Saisir votre mot de passe" required>
            </div>

          </div>

          <div class="text-center"><button class="btn-submit" type="submit">Connexion</button></div>

          <div class="mt-3 d-flex">
            <hr class="my-auto flex-grow-1">
            <div class="px-4"><span>ou</span></div>
            <hr class="my-auto flex-grow-1">            
          </div>

          
          <div class="row">
            <a title="Google" class="col-12 btn btn-block btn-social btn-md socialaccount_provider btn-google" href="/accounts/google/login/?process=+login+">
              <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 128 128" {...$$props}>
                <path fill="#fff" d="M44.59 4.21a63.28 63.28 0 0 0 4.33 120.9a67.6 67.6 0 0 0 32.36.35a57.13 57.13 0 0 0 25.9-13.46a57.44 57.44 0 0 0 16-26.26a74.33 74.33 0 0 0 1.61-33.58H65.27v24.69h34.47a29.72 29.72 0 0 1-12.66 19.52a36.16 36.16 0 0 1-13.93 5.5a41.29 41.29 0 0 1-15.1 0A37.16 37.16 0 0 1 44 95.74a39.3 39.3 0 0 1-14.5-19.42a38.31 38.31 0 0 1 0-24.63a39.25 39.25 0 0 1 9.18-14.91A37.17 37.17 0 0 1 76.13 27a34.28 34.28 0 0 1 13.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.22 61.22 0 0 0 87.2 4.59a64 64 0 0 0-42.61-.38" />
                <path fill="#e33629" d="M44.59 4.21a64 64 0 0 1 42.61.37a61.22 61.22 0 0 1 20.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.28 34.28 0 0 0-13.64-8a37.17 37.17 0 0 0-37.46 9.74a39.25 39.25 0 0 0-9.18 14.91L8.76 35.6A63.53 63.53 0 0 1 44.59 4.21" />
                <path fill="#f8bd00" d="M3.26 51.5a62.93 62.93 0 0 1 5.5-15.9l20.73 16.09a38.31 38.31 0 0 0 0 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 0 1-5.5-40.9" />
                <path fill="#587dbd" d="M65.27 52.15h59.52a74.33 74.33 0 0 1-1.61 33.58a57.44 57.44 0 0 1-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0 0 12.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68" />
                <path fill="#319f43" d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0 0 44 95.74a37.16 37.16 0 0 0 14.08 6.08a41.29 41.29 0 0 0 15.1 0a36.16 36.16 0 0 0 13.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 0 1-25.9 13.47a67.6 67.6 0 0 1-32.36-.35a63 63 0 0 1-23-11.59A63.73 63.73 0 0 1 8.75 92.4" />
              </svg> Connectez-vous avec Google
            </a>
          </div>
          
        </form>

      </div>

    </div>

    <div class="row mt-3 d-flex justify-content-center">
      <div class="col-sm-8 col-md-6 col-lg-5 mt-lg-0 d-flex justify-content-center">
        <p class="text-center">
          Vous débutez chez {{env('APP_NAME', 'NZCONSEILS')}} ? <a href="{{route('register')}}">S'inscrire</a> <br>
          <a class="general-conditions-of-use" href="{{route('register')}}" data-toggle="modal" data-target="#generalconditionsModalLong">Conditions générales d'utilisations</a>
        </p>
      </div>
    </div>

  </div>
</section><!-- End Contact Section -->

@include('components.front.modalgeneralcondition')

@endsection