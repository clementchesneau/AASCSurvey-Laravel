@extends('layouts.app')

@section('content')

<div id="bodyprofil">
    <div class="shadow-sm p-2 color45464B">
        <div class="ml-5 pl-5">
            <h2 class="mb-1 text-white">{{ __('messages.home.title') }} <span class="colortextCA3E47">{{ Auth::user()->firstname }}</span>
            </h2>
        </div>
    </div>
    <div class="container p-5 text-white">
        <div class="p-3 ">
            <div class="shadow p-5 d-flex justify-content-between">
                <h1 class="colortextCA3E47 text-center">{{ Auth::user()->firstname }} {{ Auth::user()->name }}</h1>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('account.edit', app()->getLocale()) }}">
                        <button type="button" id="MakeSurvey" class="btn btnsurvey btn-danger noborder">{{ __('messages.surveys.index.edit') }}</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-3">
            <div class="shadow p-5">
                <h2 class="colortextCA3E47">{{ __('messages.login.about') }}</h2>
                <p>{{ Auth::user()->name }}</p>
                <p>{{ Auth::user()->firstname }}</p>
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
        <div class="p-3">
            <div class="shadow p-5">
                <h2 class="colortextCA3E47">{{ __('messages.login.infos') }}</h2>

                <p>{{ __('messages.login.last') }} {{ Auth::user()->created_at }}</p>
                <p>{{ __('messages.login.modif') }} {{ Auth::user()->updated_at }}</p>
            </div>
        </div>
    </div>
</div>

@endsection