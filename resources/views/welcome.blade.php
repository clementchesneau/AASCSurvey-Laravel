@extends('layouts.app')

@section('content')

<div id="welcomebody">

    <!-- Header -->
    <div class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1 colortextCA3E47">AASC Survey</h1>
            <h3 class="colortextCA3E47">
                <em>AASC us any things. Your answer is our Mission.</em>
            </h3>
            <div class="p-5">
                <a href="{{ route('surveys.create', app()->getLocale()) }}">
                    <button type="button" class="btn btn-danger noborder MakeAccount">{{ __('messages.surveys.create.create2') }}</button>
                </a>
            </div>
        </div>
    </div>

    <section class="pt-5 pb-5 color45464B">

        <div class="mb-5">
            <div class="container mb-4 mt-2">
                <div class="text-center my-auto text-white pb-5">
                    <h1 class="text-white">{{ __('messages.welcome.advantage') }}</h1>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6 mb-4 ">
                        <div class="card h-100 bgcolor525252">
                            <img class="card-img-top" src="\img\meeting_1.png" alt="">
                            <div class="card-body">
                                <p class="card-text text-white">{{ __('messages.welcome.card1') }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 bgcolor525252">
                            <img class="card-img-top" src="\img\meeting_2.png" alt="">
                            <div class="card-body">
                                <p class="card-text text-white">{{ __('messages.welcome.card2') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 bgcolor525252">
                            <img class="card-img-top" src="\img\meeting_3.png" alt="">
                            <div class="card-body">
                                <p class="card-text text-white">{{ __('messages.welcome.card3') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="p-2">
        <h1 class="p-5 text-white text-center">{{ __('messages.welcome.protection') }} </h1>
        <div class="shadow container p-5 d-flex justify-content-md-center">
            <div class="row d-flex justify-content-md-center">
                <div class="col-3">
                    <i class="colortextCA3E47 fas fa-cogs fa-10x"></i>
                </div>
                <div class="col text-center text-white">
                    <div>
                        <h3>{{ __('messages.welcome.presentation') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-2">
        <div class="shadow container p-5 pt-2 d-flex justify-content-md-center">
            <div class="row d-flex justify-content-md-center">
                <div class="col text-center text-white">
                    <div>
                        <h3>{{ __('messages.welcome.secure') }}</h3><br>
                        <h3>{{ __('messages.welcome.joinus') }}</h3><a class="colortextCA3E47" href="{{ route('legalnotice', app()->getLocale()) }}">{{ __('messages.welcome.learnmore') }}</a>
                    </div>
                </div>
                <div class="col-2">
                    <i class="colortextCA3E47 fas fa-user-shield fa-10x"></i>
                </div>
            </div>
        </div>
    </div>


    <section class="pt-5 pb-5">
        <h1 class="text-white text-center">{{ __('messages.welcome.speackofus') }}</h1>
        <div class="mb-5">
            <div class="container mb-5 mt-5">
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-30 text-center my-auto color45464B">
                            <div class="card-body text-white">
                                <p class="card-text"><em>{{ __('messages.welcome.comment1') }}</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-30 text-center my-auto color45464B">
                            <div class="card-body text-white">
                                <p class="card-text"><em>{{ __('messages.welcome.comment2') }}</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-30 text-center my-auto color45464B">
                            <div class="card-body text-white">
                                <p class="card-text"><em>{{ __('messages.welcome.comment3') }}</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-30 text-center my-auto color45464B">
                            <div class="card-body text-white">
                                <p class="card-text"><em>{{ __('messages.welcome.comment4') }}</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-30 text-center my-auto color45464B">
                            <div class="card-body text-white">
                                <p class="card-text"><em>{{ __('messages.welcome.comment5') }}</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-30 text-center my-auto color45464B">
                            <div class="card-body text-white">
                                <p class="card-text"><em>{{ __('messages.welcome.comment6') }}</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection