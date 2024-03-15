<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>{{ config('app.name', 'COSMCEUTICALS') }} - 404 </title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/img/logo/favicon.ico')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta https-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <style>
            .error-wrapper {
                background-color: #292929;
                height: 100%;
                padding-top: 10%
            }

            .error-wrapper .error-container {
                -webkit-transform: skew(0deg, -10deg);
                -moz-transform: skew(0deg, -10deg);
                -o-transform: skew(0deg, -10deg);
                -ms-transform: skew(0deg, -10deg);
                transform: skew(0deg, -10deg);
                background-color: #e2858c;
                padding: 60px
            }

            .error-wrapper .error-container .error {
                -webkit-transform: skew(0deg, 10deg);
                -moz-transform: skew(0deg, 10deg);
                -o-transform: skew(0deg, 10deg);
                -ms-transform: skew(0deg, 10deg);
                transform: skew(0deg, 10deg);
                margin: 0 auto;
                text-align: center;
                width: 350px
            }

            .error-wrapper .error-container .error .error-title {
                font-size: 28px;
                font-weight: 700;
                letter-spacing: 5px;
                text-transform: uppercase
            }

            .error-wrapper .error-container .error .error-number {
                font-size: 100px;
                font-weight: 700;
                letter-spacing: 5px;
                text-shadow: 0 3px 0 #292929, 0 14px 10px rgba(0, 0, 0, .15), 0 24px 2px rgba(0, 0, 0, .1), 0 34px 30px rgba(0, 0, 0, .1)
            }

            .error-wrapper .error-container .error .error-description {
                font-size: 14px;
                font-weight: 300;
                padding: 0 40px
            }

            .error-wrapper .error-container .error .error-or {
                height: 20px;
                margin: 30px 0 10px;
                position: relative;
                text-align: center
            }

            .error-wrapper .error-container .error .error-or .or-line {
                background-color: #169077;
                height: 1px;
                left: 40px;
                position: absolute;
                right: 40px;
                top: 10px
            }

            .error-wrapper .error-container .error .error-or .or {
                -lh-property: 0;
                left: -webkit-calc(50% - 30px);
                left: -moz-calc(50% - 30px);
                left: calc(50% - 30px);
                background-color: #e2858c;
                height: 20px;
                margin: 0 auto;
                position: absolute;
                text-transform: uppercase;
                top: 2px;
                width: 60px
            }

            .error-wrapper .error-container .error .error-textbox {
                padding: 0 40px
            }

            .error-wrapper .error-container .error .error-textbox .form-control {
                background-color: #292929;
                border: 0
            }

            .error-wrapper .error-container .error .error-submit {
                padding: 0 40px
            }

            .error-wrapper .error-container .error .error-submit input {
                font-size: 13px;
                font-weight: 300;
                text-transform: uppercase
            }

            .error-wrapper .error-container .error .error-actions {
                display: block;
                height: 100px;
                list-style: none;
                padding: 5px
            }

            .error-wrapper .error-container .error .error-actions a {
                display: inline-block;
                color: #292929;
                font-size: 15px
            }

            .error-wrapper .error-container .error .error-actions a i {
                color: #292929;
                font-size: 25px
            }

            .error-wrapper .error-container.error-500 {
                background-color: #ffc107
            }

            .error-wrapper .error-container.error-500 .error .error-or .or-line {
                background-color: #d39e00
            }

            .error-wrapper .error-container.error-500 .error .error-or .or {
                background-color: #ffc107
            }

            .error-wrapper .error-container.error-401 {
                background-color: #34b5dc
            }

            .error-wrapper .error-container.error-401 .error .error-or .or-line {
                background-color: #2198bd
            }

            .error-wrapper .error-container.error-401 .error .error-or .or {
                background-color: #34b5dc
            }

            @media only screen and (max-width:600px) {
                .error-wrapper {
                    padding-top: 5%
                }
                .error-wrapper .error-container {
                    -webkit-transform: skew(0deg, -5deg);
                    -moz-transform: skew(0deg, -5deg);
                    -o-transform: skew(0deg, -5deg);
                    -ms-transform: skew(0deg, -5deg);
                    transform: skew(0deg, -5deg)
                }
                .error-wrapper .error-container .error {
                    -webkit-transform: skew(0deg, 5deg);
                    -moz-transform: skew(0deg, 5deg);
                    -o-transform: skew(0deg, 5deg);
                    -ms-transform: skew(0deg, 5deg);
                    transform: skew(0deg, 5deg);
                    width: auto
                }
            }

        </style>
    </head>
    <body style="margin: 0%;
    padding: 0%;
    background: #292929 !important;">
        
        
        <div class="error-wrapper">
            <div class="error-container">
                <div class="error">
                    <div class="error-title">
                        <i class="fa-solid fa-triangle-exclamation"></i> Erreur
                    </div>
                    <div class="error-number">
                        404
                    </div>
                    <div class="error-description">
                        <i class="fa-solid fa-cart-shopping"></i> Désolé, la page que vous recherchez n'existe pas.
                    </div>
                    <div class="error-actions pt-5">
                        <a class="btn btn-light" href="{{route('home')}}">
                            <i class="fa-solid fa-house-laptop" data-toggle="tooltip" title="go to home" data-original-title="BACK"></i> Aller à la page d'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
    </body>

</html>