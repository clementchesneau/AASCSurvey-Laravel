@extends('layouts.app')

@section('content')

<div class="bodyconnection">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <div class="card bordercard noborder shadow p-2 color45464B text-white">
                    <div class="d-flex justify-content-center pt-4">
                        <h2>{{ __('messages.login.connect') }}</h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>{{ __('messages.login.compte') }}</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-link" href="{{ route('register', app()->getLocale()) }}">
                        {{ __('messages.login.inscrire') }}
                        </a>
                    </div>




                    <div class="card-body">
                        <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col ml-5 mr-5">
                                    <input id="email" type="email" class="form-control form-control-lg noborder p-2 inputsize @error('email') is-invalid @enderror" autofocus name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col ml-5 mr-5">
                                    <input id="password" type="password" class="form-control form-control-lg noborder p-2 inputsize @error('password') is-invalid @enderror" autofocus name="password" placeholder="Mot de Passe" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col text-white text-center">
                                <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /><label class="form-check-label" for="remember"><p class="ml-2">{{ __('Remember Me') }}</p></label>
                            </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request', app()->getLocale()) }}">
                                {{ __('messages.login.mdp') }}
                                </a>
                                @endif
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col d-flex justify-content-center">
                                    <button class="btn btnsurvey btn-danger noborder" id="buttonsubmitlogin" type="submit" class="btn btn-primary">
                                    {{ __('messages.login.connect') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection