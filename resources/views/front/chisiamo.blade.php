@extends('layouts.template')

@section('content')
    {{--------------- slider iniziale ----------------}}
    <section class="home-slider owl-carousel" style="height: 80px!important;">
        <div style="background-image: url(images/chisiamo.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text  justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-sm-6  text-center">
                        <h1 class="mb-4">&nbsp;</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ------------ fine slider iniziale ----------------}}

    <section class="ftco-section bg-light" style="padding-top: 30px">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h3 class="subheading">Chi Siamo</h3>
                    <h2 class="mb-1">Our Staff</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex">
                    <div class="coach align-items-stretch">
                        <div class="img" style="background-image: url(images/trainer-1.jpg);"></div>
                        <div class="text bg-white p-4 ftco-animate" style="color: black">
                            {{--<span class="subheading">Co-Founder</span>--}}
                            <h3><a href="#">La nostra Azienda</a></h3>
                            <p>
                                Ci occupiamo di tute le esigenze delle medie e piccole aziende in relazione alla nuova normativa Europea GDPR UE 679/2016.
                                <br>
                                Nello specifico effettuiamo sopralluoghi presso le aziende per verificare le corrette operazioni che le aziende dovrebbero rispettare per essere in regola con la nuova normativa.
                                <br>
                                A seguito del sopralluogo viene redatto un preventivo che, dettagliatamente, classifica i documenti che verranno prodotti per essere in compliance con la GDPR.
                                <br>
                                I nostri professionisti forniranno inoltre suggerimenti inerenti la sicurezza e conservazione dei dati aziendali.
                                <br>
                                Su richiesta del cliente operiamo anche nel settore Web per la creazione di Siti e Web App.
                            </p>
                            <ul class="ftco-social-media d-flex mt-4">
                                <li class="ftco-animate"><a title="indietro" href="{{route('index')}}" class="mr-2 d-flex justify-content-center align-items-center"><i class="fas fa-arrow-circle-left" style="color: white"></i></a></li>
                            </ul>

                            <p></p>
                        </div>
                    </div>
                </div>
              {{--
                <div class="col-lg-12 d-flex">
                    <div class="coach d-md-flex flex-column-reverse align-items-stretch">
                        <div class="text bg-white p-4 ftco-animate">
                            <span class="subheading">Owner / Head Coach</span>
                            <h3><a href="#">Marco Catania</a></h3>
                            <p style="text-align: justify; text-justify: inter-word; color: black">
                                Da anni effettuo consulenza strategica per PMI ed in particolar modo negli ultimi anni nel processo di adeguamento al General Data Protection Regulation (“GDPR”) e successivo supporto continuativo di consulenza e assistenza per il mantenimento della compliance;
                                attività formativa in materia di data protection rivolto ai ruoli apicali e al personale aziendale coinvolti nel trattamento di dati personali;
                            </p>
                            <p style="text-align: justify; text-justify: inter-word; color: black">
                                Attività recenti:

                                gestione del processo di adeguamento al GDPR per una società innovativa di ricerca e selezione del personale mediante una piattaforma informatica messa a disposizione degli utenti. Assistenza e supporto al Data Manager per l’effettuazione della valutazione di impatto prevista dall’articolo 35 GDPR;

                                attività formativa svolta – a favore di diverse aziende operanti nel canale b2b – all’esito dei relativi processi di adeguamento al GDPR, rivolta alle figure aziendali maggiormente coinvolte nel trattamento dei dati personali (DPO, Data Manager, responsabili di funzioni IT, responsabili delle risorse umane);

                                assistenza e supporto al Data Manager di una società di smaltimento rifiuti per il processo di implementazione di un sistema di rilevazione biometrica di impronte digitali per il controllo degli accessi in stabilimento;

                                predisposizione registro dei trattamenti (ex articolo 30 del GDPR) per PMI con attività b2b;

                                definizione strategica per l’adeguamento al GDPR a favore di aziende b2b e predisposizione del sistema di gestione dei dati personali, comprendente documenti, procedure e linee guida per la conformità alla normativa UE e nazionale; attività formativa per il personale in ambito di trattamento dei dati personali in azienda.
                            </p>
                            --}}{{--<ul class="ftco-social-media d-flex mt-4">
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                            </ul>--}}{{--
                            <p></p>
                        </div>
                    </div>
                </div>
--}}
                <div class="col-lg-12 d-flex">
                    <div class="col-lg-6 col-md-12 ">
                        <div class="coach flex-column-reverse align-items-stretch">
                            <div class="img" style="background-image: url(images/cv1.jpg);"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 ">
                        <div class="coach  flex-column-reverse align-items-stretch">
                            <div class="img" style="background-image: url(images/cv2.jpg);"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 d-flex">
                    <div class="col-lg-6 col-md-12 ">
                        <div class="coach flex-column-reverse align-items-stretch">
                            <div class="img" style="background-image: url(images/attestato.jpg);"></div>
                        </div>
                    </div>

                    {{--<div class="col-lg-6 col-md-12 ">
                        <div class="coach  flex-column-reverse align-items-stretch">
                            <div class="img" style="background-image: url(images/cv2.jpg);"></div>
                        </div>
                    </div>--}}
                </div>

            </div>
        </div>
    </section>

@endsection