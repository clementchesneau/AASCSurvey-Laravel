@extends('layouts.app')

@section('content')

<div id="welcomebody" >

    <section class="pt-5 pb-5">
        <div class="container text-center my-auto">
            <h1 class="mb-1 colortextCA3E47">{{ __('messages.footer.whoarewe') }}</h1>
        </div>
    </section>

    <section class="pt-2 pb-5 ml-5 mr-5" >
        <div class="text-center pl-5 pr-5 my-auto text-white">
            <h5>{!! __('messages.about.start') !!}</h5>
        </div>
        <div class="row pt-2 justify-content-center">
            <div class="p-3">
                <div class="color45464B card p-1" style="width:300px">
                    <img class="card-img-top" src="\img\arnaud.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title colortextCA3E47">Arnaud Wacht</h4>
                        <p class="card-text text-white">{{ __('messages.about.arnaud') }}</p>
                    </div>
                </div>
            </div>
            <div class="p-3">    
                <div class="card color45464B p-1" style="width:300px">
                    <img class="card-img-top" src="\img\alban.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title colortextCA3E47">Alban Obert</h4>
                        <p class="card-text text-white">{{ __('messages.about.alban') }}</p>
                    </div>
                </div>
            </div>
            <div class="p-3">    
                <div class="card color45464B p-1" style="width:300px">
                    <img class="card-img-top" src="\img\sam.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title colortextCA3E47">Samuel Weissgerber</h4>
                        <p class="card-text text-white">{{ __('messages.about.sam') }}</p>
                    </div>
                </div>
            </div>
            <div class="p-3">     
                <div class="card color45464B p-1" style="width:300px">
                    <img class="card-img-top" src="\img\clement1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title colortextCA3E47">Clément Chesnau</h4>
                        <p class="card-text text-white">{{ __('messages.about.clem') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pl-5 pr-5 my-auto text-white">
            <h5>{!! __('messages.about.end') !!}</h5> 
            <h4 class="colortextCA3E47"><br>AASC us anythings. Your answer is our Mission.</h4>
        </div>    
    </section>

</div>

@endsection