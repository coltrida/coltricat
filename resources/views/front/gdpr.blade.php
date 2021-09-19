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
                    <h3 class="subheading">IL NUOVO REGOLAMENTO EUROPEO</h3>
                    <h2 class="mb-1">GDPR</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex">
                    <div class="coach align-items-stretch">
                        <div class="img" style="background-image: url(images/trainer-1.jpg);"></div>
                        <div class="text bg-white p-4 ftco-animate" style="color: black">
                            {{--<span class="subheading">Co-Founder</span>--}}
                            <h3><a href="#">EU-GDPR 2016/679</a></h3>
                            <p style="text-align: justify; text-justify: inter-word;">
                                Il GDPR sarà obbligatorio dal 25 Maggio 2018, termine entro il quale tutte le aziende europee devono adottare le misure adeguate in base al nuovo Regolamento Europeo per la Protezione Dati EU-GDPR 2016/679. GDPR …questo sconosciuto! Benché se ne parli già da tempo, nei vari convegni e sul web, molte aziende ancora non hanno ben chiaro di che cosa si tratta e soprattutto, cosa comporta in termini di procedure da adottare, come metterle in pratica, con quali risorse e in che ordine ma anche, come manutenerle. Cerchiamo di fare maggior chiarezza riassumendo quello che serve sapere per orientarsi. CHE COS’È innanzitutto il GDPR: il Regolamento UE 2016/679 Il nuovo Regolamento (UE) 2016/679 per la Protezione dei Dati o GDPR (General Data Protection Regulation) determina le “linee guida” da adottare in materia di Protezione delle Persone Fisiche con riguardo al Trattamento dei Dati nonché alla libera circolazione di tali dati. È importante sottolineare il fatto che, bensì l’obbligo sia per tutte le aziende, i “Dati” a cui si riferisce il Regolamento sono quelli che riconducono o che si possono in qualche modo ricondurre a Persone Fisiche e non giuridiche (aziende). RGPD (Regolamento Generale Protezione Dati) UE 2016/679 E che fine farà la “Legge Privacy” Dlgs 196/2003? Il D.lgs 196 del 2003, meglio conosciuto come “Legge Privacy”, è stato abrogato definitivamente nel Marzo 2018. Sono comunque attualmente in corso di emanazione, da parte del Garante Privacy Italiano, nuove norme integrative che dovrebbero “raccordarsi” e fare “maggiore chiarezza” sul nuovo Regolamento Europeo. Il Regolamento UE 2016/679 GDPR abroga completamente la vecchia Direttiva 95/46, dalla quale sono nate tutte le Leggi Privacy dei vari Stati Membri, tra cui anche la nostra Dlgs 196/2003. Trattandosi appunto di “Regolamento” e non di “Direttiva”, il GDPR non è soggetto stavolta a “recepimento” e non potrà quindi essere modificato dagli Stati Membri, né sul contenuto né, tanto meno, sulle date di applicazione essendo applicabile, fin dall’inizio, esattamente così com’è. Le aziende che avevano già adottato a suo tempo le misure previste nella “Legge Privacy” come, ad esempio, il DPS o Documento Programmatico della Sicurezza (poi abrogato dal 2013), saranno sicuramente avvantaggiate perché non dovranno partire da zero, se non altro come “cultura” da introdurre in azienda.
                                I VANTAGGI del Nuovo Regolamento UE 2016/679 o GDPR sono: con questo Regolamento, il Consiglio Europeo, oltre ad armonizzare e ad aggiornare le normative privacy in tutta la UE, si pone come secondo obiettivo, quello di ridefinire l’approccio delle aziende in materia di protezione dati, in virtù dei continui attacchi informatici di cui sono oggetto da alcuni anni le imprese di ogni dimensione e settore, fornendo una guida utile anche in questa direzione. I principali vantaggi del GDPR sono:
                                - norme uniche per tutta l’UE
                                - condizione di parità per tutte le imprese UE
                                - norme adatte alla web-economy
                                - norme “scalabili” ed “adattabili” ai cambiamenti tecnologici ed ai futuri scenari economici.
                            </p>
                            <ul class="ftco-social-media d-flex mt-4">
                                <li class="ftco-animate"><a title="indietro" href="{{route('index')}}" class="mr-2 d-flex justify-content-center align-items-center"><i class="fas fa-arrow-circle-left" style="color: white"></i></a></li>
                            </ul>

                            <p></p>
                        </div>
                    </div>
                </div>
                {{--<div class="col-lg-3 d-flex">
                    <div class="coach d-md-flex flex-column-reverse align-items-stretch">
                        <div class="img" style="background-image: url(images/trainer-2.jpg);"></div>
                        <div class="text bg-white p-4 ftco-animate">
                            <span class="subheading">Owner / Head Coach</span>
                            <h3><a href="#">Sarah Henderson</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <ul class="ftco-social-media d-flex mt-4">
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="coach align-items-stretch">
                        <div class="img" style="background-image: url(images/trainer-3.jpg);"></div>
                        <div class="text bg-white p-4 ftco-animate">
                            <span class="subheading">Owner / Head Coach</span>
                            <h3><a href="#">George Hump</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <ul class="ftco-social-media d-flex mt-4">
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="coach d-md-flex flex-column-reverse align-items-stretch">
                        <div class="img" style="background-image: url(images/trainer-4.jpg);"></div>
                        <div class="text bg-white p-4 ftco-animate">
                            <span class="subheading">Owner / Head Coach</span>
                            <h3><a href="#">Victor Hump</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <ul class="ftco-social-media d-flex mt-4">
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>

@endsection