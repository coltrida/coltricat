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
                    <h2 style="display: none">GDPR Rimini</h2>
                    <h2 class="subheading">GDPR Notizie</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex">
                    <div class="coach align-items-stretch">
                        @foreach($notizie as $notizia)
                        <div class="text bg-white p-4 ftco-animate" style="color: black">
                            {{--<span class="subheading">Co-Founder</span>--}}
                            <h2><a href="#">{{$notizia->titolo}}</a></h2>
                            <p style="text-align: justify; text-justify: inter-word;">
                                {{$notizia->testo}}
                            </p>
                            <small class="form-text text-muted">{{$notizia->created_at->format('d M Y')}}</small>
                        </div>

                            <p></p>
                        @endforeach
                        {{$notizie->links()}}
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection