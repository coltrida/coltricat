@extends('layouts.template')

@section('content')
    <h2 class="nascondi">GDPR Rimini</h2>
    <h2 class="nascondi">GDPR Firenze</h2>
    <h2 class="nascondi">GDPR Valdarno</h2>
    {{--------------- slider iniziale ----------------}}
    <section class="home-slider js-fullheight owl-carousel ftco-degree-bottom sliderbox">
        <div class="slider-item js-fullheight subsliderbox" style="background-image: url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-sm-6 ftco-animate text-center">
                        <h1 class="mb-4">La Tua Azienda</h1>
                        <h2 class="subheading">In Compliance con la Privacy</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight subsliderbox" style="background-image: url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-sm-7 ftco-animate text-center">
                        <h1 class="mb-4">Proteggi i tuoi Dati</h1>
                        <h2 class="subheading">GDPR</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ------------ fine slider iniziale ----------------}}

    {{--------------- lista attività ----------------}}
    <section class="ftco-section-services ftco-degree">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 d-flex align-self-stretch">
                    <div class="align-self-stretch"><img src="{{asset('images/about.jpg')}}" class="img-fluid" alt=""></div>
                </div>
                <div class="col-xl-6 align-self-stretch pt-5">
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h3 class="subheading">GDPR - Privacy</h3>
                            <h2 class="mb-4">Cosa Facciamo?</h2>
                        </div>
                    </div>
                    <div class="services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span><i class="fas fa-search"></i></span>
                        </div>
                        <div class="text ml-5">
                            <h3>Analizziamo le Tue Criticità</h3>
                            <p>Effettuiamo un primo sopralluogo per analizzare la situazione dell'azienda, dal software, all'hardware, alla documentazione</p>
                        </div>
                    </div>
                    <div class="services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span><i class="fas fa-check"></i></span>
                        </div>
                        <div class="text ml-5">
                            <h3>Valutiamo le Mancanze</h3>
                            <p>In seguito al sopralluogo, forniamo una prima valutazione delle criticità aziendali dal punto di vista privacy e GDPR</p>
                        </div>
                    </div>
                    <div class="services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span><i class="fas fa-pencil-alt"></i></span>
                        </div>
                        <div class="text ml-5">
                            <h3>Produciamo i ducumenti necessari</h3>
                            <p>Analizzata la struttura aziendale, produrremo tutti i documenti necessari ed obbligatori per rispettare le nuove normative</p>
                        </div>
                    </div>
                    <div class="services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span><i class="far fa-envelope"></i></span>
                        </div>
                        <div class="text ml-5">
                            <h3>Ti teniamo aggiornato</h3>
                            <p>Non solo porteremo in Compliance GDPR la tua azienda, ma ti terremo costantemente aggiornato con le nuove normative</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--------------- fine lista attività ----------------}}

    {{--------------- numeri ----------------}}
    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="5000">0</strong>
                                    <span>Nr. Sanzioni Privacy 2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1854600">0</strong>
                                    <span>Sanzioni Privacy 2018 in euro</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="570">0</strong>
                                    <span>Aziende in Compliance 2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Registri Privacy Compilati</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--------------- fine numeri ----------------}}

{{--    <section class="ftco-about d-md-flex bg-light">
        <div class="one-half img" style="background-image: url(images/about-2.jpg);">
            <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                <span class="icon-play"></a>
            </a>
        </div>
        <div class="one-half ftco-animate">
            <div class="heading-section ftco-animate ">
                <h3 class="subheading">About Muscle</h3>
                <h2 class="mb-5">Welcome <br>To Our Gym</h2>
            </div>
            <div>
                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
            </div>
        </div>
    </section>--}}

    {{--------------- professionisti ----------------}}
    {{--<section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h3 class="subheading">Shape Your Body</h3>
                    <h2 class="mb-1">Our Coaches</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 d-flex">
                    <div class="coach align-items-stretch">
                        <div class="img" style="background-image: url(images/trainer-1.jpg);"></div>
                        <div class="text bg-white p-4 ftco-animate">
                            <span class="subheading">Owner / Head Coach</span>
                            <h3><a href="#">Mark Brook</a></h3>
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
                </div>
            </div>
        </div>
    </section>--}}
    {{--------------- fine professionisti ----------------}}

    {{--------------- persone ----------------}}
    {{--<section class="ftco-section">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h3 class="subheading">Gym Classes</h3>
                    <h2 class="mb-1">Workout Classes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="package-program ftco-animate">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/about-2.jpg);">
                            <span>Learn More</span>
                        </a>
                        <div class="text mt-3">
                            <h3><a href="#">Body Building</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="package-program ftco-animate">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-2.jpg);">
                            <span>Learn More</span>
                        </a>
                        <div class="text mt-3">
                            <h3><a href="#">Aerobic Classes</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="package-program ftco-animate">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-3.jpg);">
                            <span>Learn More</span>
                        </a>
                        <div class="text mt-3">
                            <h3><a href="#">Weight Lifting</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="package-program ftco-animate">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-4.jpg);">
                            <span>Learn More</span>
                        </a>
                        <div class="text mt-3">
                            <h3><a href="#">Yoga Classes</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4 justify-content-center ftco-animate">
                <div class="col-md-4 text-center">
                    <a href="#" class="btn-custom py-4">View More Program <span class="ion-ios-arrow-down ml-2"></span></a>
                </div>
            </div>
        </div>
    </section>--}}
    {{--------------- fine persone ----------------}}

    {{--------------- Prezzi ----------------}}
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h3 class="subheading">Prezzi Pacchetti</h3>
                    <h2 class="mb-1">Abbonamenti</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate ombra">
                    <div class="block-7">
                        <div class="text-center">
                            <h2 class="heading">Pacchetto Base</h2>
                            {{--<span class="price"><sup>$</sup> <span class="number">7</span></span>--}}
                            <span class="excerpt d-block">Assistenza Continuativa Gratis</span>
                            <a href="#appuntamento" class="btn btn-primary d-block px-2 py-4 mb-4">Mi Interessa</a>
                            <h3 class="heading-2 mb-4">Contenuti</h3>
                            <ul class="pricing-text">
                                <li>Primo Sopralluogo</li>
                                <li>Valutazione Hardware Sicurezza</li>
                                <li>Valutazione Software Sicurezza</li>
                                <li>Produzione Documentazione GDPR</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate ombra">
                    <div class="block-7">
                        <div class="text-center">
                            <h2 class="heading">Pacchetto Standard</h2>
                            {{--<span class="price"><sup>$</sup> <span class="number">65</span></span>--}}
                            <span class="excerpt d-block">Assistenza Continuativa Gratis</span>
                            <a href="#appuntamento" class="btn btn-primary d-block px-3 py-4 mb-4">Mi Interessa</a>
                            <h3 class="heading-2 mb-4">Contenuti</h3>
                            <ul class="pricing-text">
                                <li>Pacchetto Base</li>
                                <li>Valutazione Sicurezza sito Web</li>
                                <li>Analisi infrastruttura di Rete</li>
                                <li>&nbsp;</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate ombra">
                    <div class="block-7">
                        <div class="text-center">
                            <h2 class="heading">Pacchetto Full</h2>
                            {{--<span class="price"><sup>$</sup> <span class="number">125</span></span>--}}
                            <span class="excerpt d-block">Assistenza Continuativa Gratis</span>
                            <a href="#appuntamento" class="btn btn-primary d-block px-3 py-4 mb-4">Mi Interessa</a>
                            <h3 class="heading-2 mb-4">Contenuti</h3>
                            <ul class="pricing-text">
                                <li>Pacchetto Standard</li>
                                <li>Creazione Sito Web in compliance GDPR</li>
                                <li>Creazione Web App in compliance GDPR</li>
                                <li>&nbsp;</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--------------- Fine Prezzi ----------------}}

{{--    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h3 class="subheading">Testimony</h3>
                    <h2 class="mb-1">Successful Stories</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="text">
                                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="name">Gabby Smith</p>
                                            <span class="position">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="text">
                                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="name">Floyd Weather</p>
                                            <span class="position">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="text">
                                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="name">James Dee</p>
                                            <span class="position">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="text">
                                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="name">Lance Roger</p>
                                            <span class="position">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="text">
                                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="name">Kenny Bufer</p>
                                            <span class="position">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

{{--    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h3 class="subheading">Articles</h3>
                    <h2 class="mb-1">Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="meta">
                                <div><a href="#">December 23, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Young Women Doing Abdominal</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="meta">
                                <div><a href="#">December 23, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Young Women Doing Abdominal</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="meta">
                                <div><a href="#">December 23, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Young Women Doing Abdominal</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <section class="ftco-appointment" id="appuntamento">
        <div class="overlay"></div>
        <div class="container-wrap">
            <div class="row no-gutters d-md-flex align-items-center">
                <div class="col-md-6 d-flex align-self-stretch img" style="background-image: url(images/appuntamento.jpg);">
                </div>
                <div class="col-md-6 appointment ftco-animate">
                    <h3 class="mb-3">Fissa un appuntamento</h3>
                    <form action="{{route('inviaMessaggio')}}" class="appointment-form" method="post">
                        @csrf
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" name="cognome" class="form-control" placeholder="Cognome" required>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" name="ditta" class="form-control" placeholder="Ditta" required>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" name="mail" class="form-control" placeholder="e-mail" required>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="messaggio" cols="30" rows="2" class="form-control" placeholder="Messaggio"></textarea>
                            </div>

                        </div>
                        <div class="d-md-flex">
                            <div class="form-group boxinformativa" style="color: white">
                                <input class="form-check-input" type="checkbox" id="consenso" name="consenso" required>Ho letto <a href="informativa.pdf" target="_blank" style="font-size: 18px; font-style: italic">l'Informativa</a> sulla Privacy e acconsento al trattamento dei dati personali
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Invia" id="inviamail" class="btn btn-primary py-3 px-4 not-active">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <div class="gallery ftco-gradient d-flex justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div class="col-md-12 heading-section ftco-animate text-center">
                                <h3 class="subheading">Gallery Photo</h3>
                                <h2 class="mb-1">Instagram</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-7.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-8.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>--}}
@endsection

@section('footer')
    @parent
    <script>
        $('document').ready(function () {

            //--------inizializzazione checkbox a false ----------------//
            $('#consenso').prop('checked', false);

            //--------funzionalità del checkbox ----------------//
            $("#consenso").change(function() {
                if(this.checked) {
                    $("#inviamail").removeClass('not-active');
                }else{
                    $("#inviamail").addClass('not-active');
                }
            });

            //--------pulsante invia mail cliccato ----------------//
            /*$('#inviamail').on('click', function (ele) {
                $("#inviamail").addClass('not-active');
            });*/

        });
    </script>
@endsection