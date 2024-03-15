@extends('layouts.front.main')

@section('menu')



    <!-- Header Main -->

    @include('components.front.header')

    <!-- ======= Breadcrumbs ======= -->

    @include('components.front.breadcrumds1')

    <!-- ======= Breadcrumbs ======= -->

@endsection



@section('content')

<!-- ======= Thematique Section ======= -->

<section id="thematique" class="thematique">

    <div class="container">



      <div class="section-title">

        <h2 data-aos="fade-up">Choisissez le type de formation adapté à vos besoins</h2>

      </div>



      <div class="row">

      <!-- Compare Table -->
      <table class="comparison-table">
        <thead>
            <th>&nbsp;</th>
            <th class="text-center">
                <h2 class="recommended-title"><i class="fa fa-file"></i> Cours en libre accès</h2>
                <p class="recommended-paragraph">Développer vos connaissances</p>
                <a href="http://" class="btn-learn-more"> Voir les cours</a>
            </th>
            <th class="text-center">
                <span class="recommended">Recommandé</span>
                <h2 class="recommended-title"><i class="fa fa-graduation-cap"></i> Formations diplômantes</h2>
                <p class="recommended-paragraph">Apprendre un métier grâce à des projets professionnalisants</p>
                <a href="http://" class="btn-learn-more"> Voir les cours</a>
            </th>
        </thead>
        <tbody>
          <tr>
            <td><i class="fas fa-wifi"></i> <span>Flexibilité</span></td>
            <td>100% en ligne, toute l’année, et à votre rythme</td>
            <td>100% en ligne, toute l’année, et à votre rythme</td>
          </tr>
          <tr>
            <td><i class="fa fa-calendar"></i> <span>Durée</span></td>
            <td>Quelques heures</td>
            <td>De 6 à 24 mois (temps plein ou alternance)</td>
          </tr>
          <tr>
            <td><i class="fa fa-tag"></i> <span>Coût</span></td>
            <td>Gratuit avec un compte</td>
            <td>Jusqu’à 100% financées</td>
          </tr>
          <tr>
            <td><i class="fa fa-graduation-cap"></i> <span>Diplôme</span></td>
            <td>❌</td>
            <td>Des certifications professionnelles de niveau reconnu par l’État</td>
          </tr>
          <tr>
            <td><i class="fa fa-users"></i> <span>Mentorat</span></td>
            <td>❌</td>
            <td>Session individuelle hebdomadaire avec un mentor</td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark"></i> <span>Projet</span></td>
            <td>❌</td>
            <td>Des projets concrets issus de scénarios métiers</td>
          </tr>
          <tr>
            <td><i class="fa fa-comment-dots"></i> <span>Communauté</span></td>
            <td>❌</td>
            <td>Groupe Slack étudiants</td>
          </tr>
          {{-- <tr>
            <td><i class="fa-solid fa-tag"></i> <span>Coût</span></td>
            <td>❌</td>
            <td>✅</td>
          </tr>
          <tr>
            <td><i class="fa-solid fa-tag"></i> <span>Coût</span></td>
            <td>❌</td>
            <td>✅</td>
          </tr>
          <tr>
            <td><i class="fa-solid fa-tag"></i> <span>Coût</span></td>
            <td>❌</td>
            <td>✅</td>
          </tr> --}}
        </tbody>
      </table>

    </div>

</section><!-- End Thematique Section -->

@include('components.front.footer')

@endsection