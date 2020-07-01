@extends('layouts.app')

@section('content')

<div id="bodyprofil">
    <div class="shadow-sm p-2 color45464B">
        <div class="ml-5 pl-5">
            <h2 class="mb-1 text-white">{{ __('messages.home.title') }} <span class="colortextCA3E47">{{ Auth::user()->name }}</span>
            </h2>
        </div>
    </div>
    <div class="container p-5 text-white">
        <h2 class="colortextCA3E47 text-center">{{ __('messages.login.infos') }}</h2>
        <form action="{{ route('account.update', app()->getLocale()) }}" method="POST" enctype="multipart/form-data">
        @csrf
                    <div class="p-3">
                        <div class="shadow p-5">
                            <div class="col-sm form-group justify-content-end">
                                    <label class="col-sm-2 col-form-label" for="name">{{ __('messages.dashboard.nom') }}</label>
                                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" value="{{ Auth::user()->name }}" autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="shadow p-5">
                        <div class="col-sm form-group">
                                    <label class="col-sm-2 col-form-label" for="prenom">{{ __('messages.dashboard.prenom') }}</label>
                                    <input type="text" id="firstname" name="firstname" class="form-control @error('firstname') is-invalid @enderror" placeholder="Prénom" value="{{ Auth::user()->firstname }}" autocomplete="firstname">
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="shadow p-5 pb-2">
                        <div class="col-sm form-group">
                                    <label class="col-sm-2 col-form-label" for="email">{{ __('messages.dashboard.mail') }}</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required value="{{ Auth::user()->email }}" autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                <div class="d-flex justify-content-center p-2">
                        <button type="submit" class="btn btn-danger noborder MakeAccount">{{ __('messages.surveys.edit.save') }}</button>
                        </div>
            </div>
        </form>

</div>

@endsection