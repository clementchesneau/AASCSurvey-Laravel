@extends('layouts.app')

@section('content')


<!-- Page Content -->

<div id="bodyhome">


    <div class="shadow-sm p-2">
        <div class="ml-5 pl-5">
            <h2 class="mb-1 text-white">{{ __('messages.home.title') }}<span class="colortextCA3E47"> {{ Auth::user()->firstname }}</span>
            </h2>
        </div>
    </div>
    <!-- /.col-lg-3 -->
    @if(! $surveys->isEmpty())
        <div class="d-flex justify-content-center pt-3">
            <h2 class="colortextCA3E47">{{ __('messages.home.recent') }}</h2>
        </div>
        <div class="container pb-3 mt-5">
            <div class="row justify-content-center">
                @php
                    $i = 0
                @endphp
                @foreach($surveys->reverse() as $survey)
                    @if($i < 3)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h1 class="card-title text-center">
                                        <a class="text-danger" href="{{ route('surveys.show', [app()->getLocale(), $survey]) }}">
                                            {{ $survey->title }}
                                        </a>
                                    </h1>
                                    <p class="my-4">{{ __('messages.surveys.index.datecreation') }} :{{ $survey->created_at->format('Y/m/d') }}</p>
                                    <p class="my-4">{{ __('messages.surveys.index.datemodifications') }} :{{ $survey->updated_at->format('Y/m/d')}}</p>
                                    <a href="{{ route('surveys.edit', [app()->getLocale(), $survey]) }}">
                                        <div class="d-flex justify-content-center">
                                                    <div class="p-1">
                                                        <button type="button" id="EditSurvey" class="btn btnsurvey btn-danger noborder">{{ __('messages.surveys.index.edit') }}</button>
                                                    </div>
                                            </a>

                                            <div class="p-1">
                                                <button type="button" class="btn btnsurvey btn-danger noborder" data-toggle="modal" data-target="#vraimentsupprimer">
                                                {{ __('messages.surveys.show.delete') }}
                                                </button>
                                            </div>
                                        
                                </div>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <a href="{{ route('surveys.show', [app()->getLocale(), $survey]) }}"class="m-3 text-dark"><i title="{{ __('messages.surveys.index.stats') }}" class="fas fa-chart-line fa-2x"></i></a>
                                    <a data-toggle="modal" data-target="#modallink" href="#"class="m-3 text-dark"><i title="{{ __('messages.surveys.index.partager') }}"class="fas fa-share-alt-square fa-2x"></i></i></a>
                                    <a href="#"class="m-3 text-dark"><i title="{{ __('messages.surveys.index.download') }}" class="fas fa-download fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    
                        <!-- modal -->
                        <div class="modal fade noborder" id="vraimentsupprimer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog noborder" role="document">
                                <div class="modal-content noborder">
                                    <div class="modal-header color45464B noborder">
                                        <h3 class="modal-title col-12 modal-title text-center text-white" id="exampleModalLabel">{{ __('messages.surveys.index.sure') }}</h3>
                                    </div>
                                    <div class="modal-body border text-center">
                                        <h5>{!! __('messages.surveys.index.sondsuppr') !!}</h5>

                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary noborder" data-dismiss="modal">{{ __('messages.surveys.index.fermer') }}</button>
                                        <form action="{{ route('surveys.destroy', [app()->getLocale(), $survey]) }}" method="POST">
                                            @csrf

                                            {{ method_field('DELETE') }}
                                            <div class="p-1">
                                                <input type="submit" class="btn btnsurvey btn-danger noborder" value="{{ __('messages.surveys.index.delete') }}">
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MODAL LINK -->
                        <div class="modal fade noborder" id="modallink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog noborder" role="document">
                                <div class="modal-content noborder">
                                    <div class="modal-header color45464B noborder">
                                        <h3 class="modal-title col-12 modal-title text-center text-white" id="exampleModalLabel">{{ __('messages.surveys.index.lienpartage') }}</h3>
                                    </div>
                                    <div class="modal-body text-center">
                                        <label>{{ __('messages.surveys.index.lien') }}: </label><input type="text" class="form-control" value="{{ route('surveys.show', [app()->getLocale(), $survey]) }}">
                                        <a onclick="copyclipboard(this)" class="m-3 text-dark"><i class="fas fa-copy fa-2x"></i></a>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary noborder" data-dismiss="modal">{{ __('messages.surveys.index.fermer') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @php
                        $i++
                    @endphp
                @endforeach
            </div>
        </div>

    @else
        <div class="d-flex justify-content-center pt-3">
            <h2 class="colortextCA3E47">{{ __('messages.dashboard.firstsurvey') }}</h2>
        </div>
    @endif
    <div class="d-flex justify-content-center">
        <a href="{{ route('surveys.create', app()->getLocale()) }}">
            <button type="button" id="MakeSurvey" class="btn btnsurvey btn-danger noborder">{{ __('messages.surveys.index.create') }}</button>
        </a>
    </div>


    <div>
        <div class="container pb-3 mt-5">
            <div class="row mb-5">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 color45464B shadow">
                        <div class="card-body">
                            <h4 class="text-center colortextCA3E47">{{ __('messages.dashboard.informations') }}</h4>
                            <p class="card-text text-white">{{ __('messages.dashboard.nom') }} {{ Auth::user()->firstname }}</p>
                            <p class="card-text text-white">{{ __('messages.dashboard.prenom') }} {{ Auth::user()->name }}</p>
                            <p class="card-text text-white">{{ __('messages.dashboard.mail') }} {{ Auth::user()->email }}</p>
                            <p class="card-text text-white">{{ __('messages.dashboard.premium') }} </p>
                            <div class="text-center p-4" >
                                <a href="{{ route('account.edit', app()->getLocale()) }}">
                                    <button type="button" id="MakeSurvey" class="btn btnsurvey btn-danger noborder">{{ __('messages.dashboard.edit') }}</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 color45464B shadow">
                        <div class="card-body">
                            <h4 class="text-center colortextCA3E47">{{ __('messages.dashboard.state') }}</h4>
                            <p class="card-text text-white">
                                <div class="p-3 d-flex justify-content-center">
                                    <button type="button" class="btn btnsurvey mb-2 noborder text-white" disabled>{{ __('messages.surveys.index.nbsond') }} <span class="badge badge-light">{{ count($surveys) }}</span></button>
                                </div>
                                <div class="pt-0  d-flex justify-content-center">
                                    <button type="button" class="btn btnsurvey mb-2 noborder text-white" disabled>{{ __('messages.surveys.index.nbpart') }} <span class="badge badge-light">{{ $answersnb }}</span></button>
                                </div>
                                <div class="p-4 text-center">
                                    <br>
                                    <a href="{{ route('surveys.index', app()->getLocale()) }}">
                                        <button type="button" class="btn btnsurvey mb-2 noborder text-white">{{ __('messages.header.surveys') }}</button>
                                    </a>
                                </div>
                                
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 color45464B shadow">
                        <div class="card-body">
                            <h4 class="text-center colortextCA3E47">{{ __('messages.dashboard.astuces') }}</h4>
                            <div class="p-3">
                                <h5 class="text-white">{{ __('messages.dashboard.astuce1') }}</h5>
                            </div>
                            <div class="p-3">
                                <h5 class="text-white">{{ __('messages.dashboard.astuce2') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/copy.js') }}"></script>
@endsection