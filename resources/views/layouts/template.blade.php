<!DOCTYPE html>
<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119522082-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119522082-5');
</script>


    <title>ColtriCat - Privacy and GDPR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <meta name="description" content="Coltricat - GDPR e Privacy web">
    <meta name="keywords" content="GDPR, GDPR consulenza, Coltricat, Colctricat.eu, GDPR Rimini, GDPR Firenze, GDPR Rimini Coltricat, GDPR Firenze Coltricat, GDPR Coltricat Rimini, GDPR Coltricat Firenze, General Data Protection Regulation, Privacy, Toscana, Marche, Emilia Romagna, ICT, Dati">

    <link rel="stylesheet" href='{{asset('css/open-iconic-bootstrap.min.css')}}'>
    <link rel="stylesheet" href='{{asset('css/animate.css')}}'>
    <link rel="stylesheet" href='{{asset('css/owl.carousel.min.css')}}'>
    <link rel="stylesheet" href='{{asset('css/owl.theme.default.min.css')}}'>
    <link rel="stylesheet" href='{{asset('css/magnific-popup.css')}}'>
    <link rel="stylesheet" href='{{asset('css/aos.css')}}'>
    <link rel="stylesheet" href='{{asset('css/ionicons.min.css')}}'>
    <link rel="stylesheet" href='{{asset('css/bootstrap-datepicker.css')}}'>
    <link rel="stylesheet" href='{{asset('css/jquery.timepicker.css')}}'>
    <link rel="stylesheet" href='{{asset('css/flaticon.css')}}'>
    <link rel="stylesheet" href='{{asset('css/icomoon.css')}}'>
    <link rel="stylesheet" href='{{asset('css/style.css')}}'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

@include('cookie-consent::index')

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand py-2 px-3" href="{{route('notizie')}}">NOTIZIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('chisiamo')}}" class="nav-link">Chi Siamo</a></li>
                <li class="nav-item"><a href="{{route('gdpr')}}" class="nav-link">Privacy</a></li>
{{--                <li class="nav-item"><a href="schedule.html" class="nav-link">Schedule</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>--}}
                <li class="nav-item"><a href="/#contatti" class="nav-link">Contatti</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="ftco-footer ftco-section img" id="contatti">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p style="text-align: justify;">
                        ColtriCat nasce dall'esperienza ventennale di professionisti Ingegneri, Esperti Informatici, Automazione, Robotica e Legale per gestire tutti gli aspetti Privacy, GDPR e Sicurezza.
                    </p>
                    {{--<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a title="LinkedIn" href="#"><span><i class="fab fa-linkedin-in"></i></span></a></li>
                        <li class="ftco-animate"><a title="Facebook" href="#"><span><i class="fab fa-facebook"></i></span></a></li>
                    </ul>--}}
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">FAQ</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Perchè devo fare la GDPR?</a></li>
                        <li><a href="#" class="py-2 d-block">A quali sanzioni vado incontro?</a></li>
                        <li><a href="#" class="py-2 d-block">Cosa devo fare?</a></li>
                        <li><a href="#" class="py-2 d-block">Quali documenti devo avere?</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Servizi</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Analisi Problemi</a></li>
                        <li><a href="#" class="py-2 d-block">Produzione Documenti</a></li>
                        <li><a href="#" class="py-2 d-block">Aggiornamenti Continui</a></li>
                        <li><a target="_blank" href="{{route('sitemap')}}" class="py-2 d-block">SiteMap</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Dove Siamo</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span><i class="fas fa-map-marker-alt"></i></span><span class="text">
                                    &nbsp;Via Roma, 37 - Montevarchi (AR)
                                </span></li>
                            <li><a href="#"><span><i class="fas fa-phone"></i></span><span class="text">&nbsp;+39 392 312 6074</span></a></li>
                            <li><a href="#"><span><i class="fas fa-envelope"></i></span><span class="text"><span class="__cf_email__" data-cfemail="640d0a020b241d0b1116000b09050d0a4a070b09">
                                            &nbsp;info@coltricat.eu
                                        </span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

@section('footer')
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/aos.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scrollax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/google-map.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    {{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>--}}
@show

</body>
</html>
