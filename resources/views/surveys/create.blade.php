@extends('layouts.app')

@section('content')
<div id="bodycreate">
      <div class="shadow-sm text-center hauteur pt-5 pb-3">
          <nav class="navunderline">
              <a class="text-white underline" id="create-nav-link1" href="#">{{ __('messages.surveys.create.zero') }}</a>
              <a class="text-white" id="create-nav-link2" href="#">{{ __('messages.surveys.create.existant') }}</a>
          </nav>
      </div>

  <div class="pr-3 pl-2 container">
    <div>
      <!-- /.col-lg-3 -->
      <div class="element-create">
        <div class="shadow m-5">
          <div class="d-flex justify-content-center ">
            <h1 class="my-4 colortextCA3E47">{{ __('messages.surveys.create.pagetitle') }}</h1>
          </div>

          <form action="{{ route('surveys.store', app()->getLocale()) }}" method="POST">
            @csrf
            <div class="text-center d-flex justify-content-center">
              <input id="survey_title" name="survey_title" type="text" class="form-control col-4 @error('survey_title') is-invalid @enderror noborder" value="{{ old('survey_title') }}" autocomplete="survey_title" placeholder="{{ __('messages.surveys.create.formtitleholder') }}" required>

            </div>
            @error('survey_title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="form-group row p-1">
              <div class="col text-white text-center">
                <input id="published" type="checkbox" name="published" checked /><label class="text-center p-2" for="published">{{ __('public') }}</label>
              </div>
            </div>
            <div class="text-center d-flex justify-content-center pb-5">
              <input type="submit" id="createindex" class="btn btn-lg btn-danger btn-custom-lg noborder" value="{{ __('messages.surveys.create.create') }}">
            </div>
          </form>
        </div>
      </div>




      <!-- /.col-lg-3 -->
      <div class="container col-lg-9 element-create" id="firsthidden">

        <div class="p-3">
          <h1 class="text-white text-center my-auto ">A venir.</h1>
        </div>
      </div>
      <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
  </div>


</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/create.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbarCreate.js') }}"></script>
@endsection