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
                    <h3 class="subheading">Inserisci Notizia</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex">
                    <div >
                        <form method="post" action="{{route('creanotizia')}}">
                            @csrf
                            <div class="form-group" style="padding-left: 35px">
                                <label for="titolo">Titolo</label>
                                <input type="text" class="form-control" id="titolo" name="titolo" aria-describedby="emailHelp" placeholder="Titolo">
                            </div>
                            <div class="form-group" style="padding-left: 35px">
                                <textarea rows="14" cols="96" name="testo" id="testo"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-left: 35px">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection