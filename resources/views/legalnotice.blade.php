@extends('layouts.app')

@section('content')

<div id="welcomebody" >

    <section class="pt-5">
        <div class="container text-center my-auto">
            <h1 class="mb-1 colortextCA3E47">{{ __('messages.footer.legal') }}</h1>
        </div>
    </section>

    <section class="p-5">
        <div class="p-3 text-white my-auto">
            <h2 class="colortextCA3E47 text-center pb-2">{{ __('messages.legal.introduction') }}</h2>
            {!! __('messages.legal.texte1') !!}
        </div>
        <div class="p-3 text-white my-auto">
            <h2 class="colortextCA3E47 text-center pb-2">{{ __('messages.legal.droit') }}</h2>
            {!! __('messages.legal.texte2') !!}
        </div>
        <div class="p-3 text-white my-auto">
            <h2 class="colortextCA3E47 text-center pb-2">{{ __('messages.legal.vie') }}</h2>
            {!! __('messages.legal.texte3') !!}
        </div>
        <div class="p-3 text-white my-auto">
            <h2 class="colortextCA3E47 text-center pb-2">{{ __('messages.legal.security') }}</h2>
            {!! __('messages.legal.texte4') !!}
        </div>
        <div class="p-3 text-white my-auto">
            <h2 class="colortextCA3E47 text-center pb-2">{{ __('messages.legal.account') }}</h2>
            {!! __('messages.legal.texte5') !!}        
        </div>
        <div class="p-3 text-white my-auto">
            <h2 class="colortextCA3E47 text-center pb-2">{{ __('messages.legal.update') }}</h2>
            {!! __('messages.legal.texte6') !!}        
        </div>
    </div>
    </section>

</div>


@endsection