@extends('layouts.app')

@section('content')



<div class="container p-2">
    <div class="row justify-content-center">
        <div class="col">
            <div class="d-flex justify-content-center p-4 colortextCA3E47">
                <h1 class="text-white">{{ __('messages.surveys.edit.pagetitle') }}</h1>
            </div>
            <div class="shadow">
                <div class="p-4">
                    <div class="d-flex justify-content-around p-2 m-2">
                        <h2 id="survey_title_text" class="colortextCA3E47">{{ $survey->title }}</h2>
                        <div class="d-flex justify-content-end">
                            <span class="d-flex justify-content-end">
                                <button type="button" class="btn btn btnsurvey btn-danger noborder" id="show-edit">{{ __('messages.surveys.edit.edit') }}</button>
                            </span>
                        </div>
                    </div>

                    <!-- Survey Form edition -->
                    <form id="surveyform" action="{{ route('surveys.update', [app()->getLocale(), $survey]) }}" method="POST">
                        @csrf

                        {{ method_field('PUT') }}
                        <div class="d-flex justify-content-center">
                            <div class="row d-flex col col-lg-6">
                                <input id="survey_title" name="survey_title" type="text" class="form-control form-control-lg noborder p-2" value="{{ old('survey_title') ?? $survey->title }}" autocomplete="survey_title" placeholder="{{ __('messages.surveys.edit.formtitleholder') }}" required>
                            </div>
                            <button type="submit" id="edit-form" class="btn btn-success noborder">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="d-flex col-6 justify-content-start">
                            <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                        <div class="text-white d-flex col-6 justify-content-end">
                            @if(null !== old('published') and old('published'))
                            
                            <div class="mt-1 p-1">
                                <input id="published" class="text-center" type="checkbox" name="published" checked />
                            </div>
                            
                            <div class="text-center p-2">
                                <label for="published">{{ __('public') }}</label>
                            </div>
                            @elseif($survey->published)
                            <div class="mt-1 p-1">
                                <input id="published" class="text-center" type="checkbox" name="published" checked />
                            </div>
                            
                            <div class="text-center p-2">
                                <label for="published">{{ __('public') }}</label>
                            </div>
                            @else
                            <div class="mt-1 p-1">
                                <input id="published" class="text-center" type="checkbox" name="published" />
                            </div>
                            
                            <div class="text-center p-2">
                                <label for="published">{{ __('public') }}</label>
                            </div>
                            @endif
                        </div>
                    </form>
                    
                </div>
            </div>


            <!-- Questions Form edition -->
            <form id="questionform" action="{{ route('questions.store', app()->getLocale()) }}" method="POST" novalidate>
                @csrf

                <input type="hidden" value="{{ $survey->id }}" id="surveyid" name="surveyid">

                <div id="questions-container">
                    @if(! $questions->isEmpty())
                        @foreach($questions as $question)
                            <div class="question container text-white p-2 my-3 shadow">
                                @switch($question->type)
                                    @case('simple')
                                        <div class="row justify-content-md-center p-2">
                                            <div class="col col-lg">
                                                <span>
                                                    <input type="text" class="form-control form-control-lg noborder p-2" name="question" value="{{ $question->title }}" required>
                                                </span>
                                            </div>

                                            <div class="col-md-auto">
                                                <select name="select" class="custom-select col">
                                                    <option class="simple" value="simple" selected>{{ __('messages.surveys.edit.question') }}</option>
                                                    <option class="paragraph" value="paragraph">{{ __('messages.surveys.edit.paragraphe') }}</option>
                                                    <option class="multiple" value="multiple">{{ __('messages.surveys.edit.choix') }}</option>
                                                    <option class="checkbox" value="checkbox">{{ __('messages.surveys.edit.cases') }}</option>
                                                    <option class="number" value="number">{{ __('messages.surveys.edit.nombre') }}</option>
                                                    <option class="range" value="range">{{ __('messages.surveys.edit.echelle') }}</option>
                                                    <option class="date" value="date">{{ __('messages.surveys.edit.date') }}</option>
                                                    <!-- <option class="file" value="file">{{ __('messages.surveys.edit.fichier') }}</option> -->
                                                </select>
                                            </div>

                                            @if($question->required)
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" checked class="text-center" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @else
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" class="text-center" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @endif

                                            <span class="pr-2">
                                                <button type="button" class="delete-question btn btn-secondary mb-2 noborder">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                        @break

                                    @case('paragraph')
                                        <div class="row justify-content-md-center p-2">
                                            <div class="col col-lg">
                                                <span>
                                                    <input type="text" class="form-control form-control-lg noborder p-2" name="question" value="{{ $question->title }}" required>
                                                </span>
                                            </div>

                                            <div class="col-md-auto">
                                                <select name="select" class="custom-select col">
                                                <option class="simple" value="simple" >{{ __('messages.surveys.edit.question') }}</option>
                                                    <option class="paragraph" value="paragraph"selected>{{ __('messages.surveys.edit.paragraphe') }}</option>
                                                    <option class="multiple" value="multiple">{{ __('messages.surveys.edit.choix') }}</option>
                                                    <option class="checkbox" value="checkbox">{{ __('messages.surveys.edit.cases') }}</option>
                                                    <option class="number" value="number">{{ __('messages.surveys.edit.nombre') }}</option>
                                                    <option class="range" value="range">{{ __('messages.surveys.edit.echelle') }}</option>
                                                    <option class="date" value="date">{{ __('messages.surveys.edit.date') }}</option>
                                                    <!-- <option class="file" value="file">{{ __('messages.surveys.edit.fichier') }}</option> -->
                                                </select>
                                            </div>

                                            @if($question->required)
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" checked class="text-center" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @else
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" class="text-cente" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @endif
                                            <span class="pr-2">
                                                <button type="button" class="delete-question btn btn-secondary mb-2 noborder">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                        @break

                                    @case('number')
                                        <div class="row justify-content-md-center p-2">
                                            <div class="col col-lg">
                                                <span>
                                                    <input type="text" class="form-control form-control-lg noborder p-2" name="question" value="{{ $question->title }}" required>
                                                </span>
                                            </div>

                                            <div class="col-md-auto">
                                                <select name="select" class="custom-select col">
                                                    <option class="simple" value="simple" >{{ __('messages.surveys.edit.question') }}</option>
                                                    <option class="paragraph" value="paragraph">{{ __('messages.surveys.edit.paragraphe') }}</option>
                                                    <option class="multiple" value="multiple">{{ __('messages.surveys.edit.choix') }}</option>
                                                    <option class="checkbox" value="checkbox">{{ __('messages.surveys.edit.cases') }}</option>
                                                    <option class="number" value="number"selected>{{ __('messages.surveys.edit.nombre') }}</option>
                                                    <option class="range" value="range">{{ __('messages.surveys.edit.echelle') }}</option>
                                                    <option class="date" value="date">{{ __('messages.surveys.edit.date') }}</option>
                                                    <!-- <option class="file" value="file">{{ __('messages.surveys.edit.fichier') }}</option> -->
                                                </select>
                                            </div>

                                            @if($question->required)
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" checked class="text-center" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @else
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" class="text-cente" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @endif
                                            <span class="pr-2">
                                                <button type="button" class="delete-question btn btn-secondary mb-2 noborder"><i class="far fa-trash-alt"></i></button>
                                            </span>
                                        </div>  
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>

                                        <div class="e-container col-8 d-flex justify-content-center">
                                            @php
                                                $i = 0
                                            @endphp
                                            @if(! $elements->isEmpty())
                                                @foreach($elements as $element)
                                                    @if($element->question_id == $question->id)
                                                        @if($i == 0)
                                                            @if($element->content == "true")
                                                                <div class="mt-1 p-1">
                                                                    <input class="e-question checkbox-edit " type="checkbox" name="c-question" checked />
                                                                </div>
                                                                <div class="text-center p-2">
                                                                    <label>{{ __('messages.surveys.edit.delimiter') }}</label>
                                                                </div>
                                                            @else
                                                                <div class="mt-1 p-1">
                                                                    <input class="e-question checkbox-edit " type="checkbox" name="c-question"  />
                                                                </div>
                                                                <div class="text-center p-2">
                                                                    <label>{{ __('messages.surveys.edit.delimiter') }}</label>
                                                                </div>
                                                            @endif

                                                            @php
                                                                $i += 1
                                                            @endphp
                                                        @else
                                                            <input class="e-question form-control col-4 form-control-lg noborder p-2" type="number" name="i-question" value="{{ $element->content }}" required>

                                                            <span class="invalid-feedback" role="alert">
                                                                <strong></strong>
                                                            </span>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        @break

                                    @case('range')
                                        <div class="row justify-content-md-center p-2">
                                            <div class="col col-lg">
                                                    <span>
                                                <input type="text" name="question" class="form-control form-control-lg noborder p-2" value="{{ $question->title }}" required>
                                                    </span>
                                            </div>
                                            <div class="col-md-auto">
                                                <select name="select" class="custom-select col">
                                                    <option class="simple" value="simple" >{{ __('messages.surveys.edit.question') }}</option>
                                                    <option class="paragraph" value="paragraph">{{ __('messages.surveys.edit.paragraphe') }}</option>
                                                    <option class="multiple" value="multiple">{{ __('messages.surveys.edit.choix') }}</option>
                                                    <option class="checkbox" value="checkbox">{{ __('messages.surveys.edit.cases') }}</option>
                                                    <option class="number" value="number">{{ __('messages.surveys.edit.nombre') }}</option>
                                                    <option class="range" value="range"selected>{{ __('messages.surveys.edit.echelle') }}</option>
                                                    <option class="date" value="date">{{ __('messages.surveys.edit.date') }}</option>
                                                    <!-- <option class="file" value="file">{{ __('messages.surveys.edit.fichier') }}</option> -->
                                                </select>
                                            </div>

                                            @if($question->required)
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" checked class="text-center" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @else
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" class="text-cente" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @endif
                                            <span class="pr-2">
                                                <button type="button" class="delete-question btn btn-secondary mb-2 noborder"><i class="far fa-trash-alt"></i></button>
                                            </span>
                                        </div>

                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>

                                        <div class="e-container col-8 d-flex justify-content-center">
                                            @php
                                                $i = 0
                                            @endphp

                                            @if(! $elements->isEmpty())
                                                @foreach($elements as $element)
                                                    @if($element->question_id == $question->id)
                                                        @if($i == 0)
                                                            @if($element->content == "true")
                                                                <div class="mt-1 p-1">
                                                                    <input class="e-question checkbox-edit " type="checkbox" name="c-question" checked />
                                                                </div>
                                                                <div class="text-center p-2">
                                                                    <label>{{ __('messages.surveys.edit.delimiter') }}</label>
                                                                </div>
                                                            @else
                                                                <div class="mt-1 p-1">
                                                                    <input class="e-question checkbox-edit " type="checkbox" name="c-question"  />
                                                                </div>
                                                                <div class="text-center p-2">
                                                                    <label>{{ __('messages.surveys.edit.delimiter') }}</label>
                                                                </div>
                                                            @endif

                                                            @php
                                                                $i += 1
                                                            @endphp
                                                        @else
                                                            <input class="e-question form-control col-4 form-control-lg noborder p-2" type="number" name="i-question" value="{{ $element->content }}" required>
                                                            
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong></strong>
                                                            </span>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div> 
                                        @break

                                    @case('date')
                                        <div class="row justify-content-md-center p-2">

                                            <div class="col col-lg">
                                                <span>
                                                    <input type="text" class="form-control form-control-lg noborder p-2" name="question" value="{{ $question->title }}" required>
                                                </span>
                                            </div>

                                            <div class="col-md-auto">           
                                                <select name="select" class="custom-select col">
                                                    <option class="simple" value="simple" >{{ __('messages.surveys.edit.question') }}</option>
                                                    <option class="paragraph" value="paragraph">{{ __('messages.surveys.edit.paragraphe') }}</option>
                                                    <option class="multiple" value="multiple">{{ __('messages.surveys.edit.choix') }}</option>
                                                    <option class="checkbox" value="checkbox">{{ __('messages.surveys.edit.cases') }}</option>
                                                    <option class="number" value="number">{{ __('messages.surveys.edit.nombre') }}</option>
                                                    <option class="range" value="range">{{ __('messages.surveys.edit.echelle') }}</option>
                                                    <option class="date" value="date"selected>{{ __('messages.surveys.edit.date') }}</option>
                                                    <!-- <option class="file" value="file">{{ __('messages.surveys.edit.fichier') }}</option> -->
                                                </select>
                                            </div>

                                            @if($question->required)
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" checked class="text-center" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @else
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" class="text-cente" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @endif
                                            <span class="pr-2">
                                                <button type="button" class="delete-question btn btn-secondary mb-2 noborder">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>


                                        </div> 

                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                        @break

                                    @case('file')
                                        <div class="row justify-content-md-center p-2">
                                            <div class="col col-lg">
                                                <span>
                                                    <input type="text" class="form-control form-control-lg noborder p-2" name="question" value="{{ $question->title }}" required>
                                                </span>
                                            </div> 

                                            <div class="col-md-auto">                 
                                                <select name="select" class="custom-select col">
                                                    <option class="simple" value="simple" >{{ __('messages.surveys.edit.question') }}</option>
                                                    <option class="paragraph" value="paragraph">{{ __('messages.surveys.edit.paragraphe') }}</option>
                                                    <option class="multiple" value="multiple">{{ __('messages.surveys.edit.choix') }}</option>
                                                    <option class="checkbox" value="checkbox">{{ __('messages.surveys.edit.cases') }}</option>
                                                    <option class="number" value="number">{{ __('messages.surveys.edit.nombre') }}</option>
                                                    <option class="range" value="range">{{ __('messages.surveys.edit.echelle') }}</option>
                                                    <option class="date" value="date">{{ __('messages.surveys.edit.date') }}</option>
                                                    <option class="file" value="file"selected>{{ __('messages.surveys.edit.fichier') }}</option>
                                                </select>
                                            </div>

                                            @if($question->required)
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" checked class="text-center" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @else
                                            <div class="mt-1 p-1">
                                                <input type="checkbox" class="text-cente" name="required" />
                                            </div>

                                            <div class="text-center p-2">
                                                <label>{{ __('messages.surveys.edit.requis') }}</label>
                                            </div>

                                            @endif
                                            <span class="pr-2">
                                                <button type="button" class="delete-question btn btn-secondary mb-2 noborder">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                            
                                        </div>

                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                        @break
                                    
                                    @case('multiple')
                                        <div class="row justify-content-md-center p-2">
                                            <div class="col col-lg">
                                                <span>
                                                    <input type="text" class="form-control form-control-lg noborder p-2" name="question" value="{{ $question->title }}" required>
                                                </span>
                                            </div>

                                            <div class="col-md-auto">   
                                                <select name="select" class="custom-select col">
                                                    <option class="simple" value="simple" >{{ __('messages.surveys.edit.question') }}</option>
                                                    <option class="paragraph" value="paragraph">{{ __('messages.surveys.edit.paragraphe') }}</option>
                                                    <option class="multiple" value="multiple"selected>{{ __('messages.surveys.edit.choix') }}</option>
                                                    <option class="checkbox" value="checkbox">{{ __('messages.surveys.edit.cases') }}</option>
                                                    <option class="number" value="number">{{ __('messages.surveys.edit.nombre') }}</option>
                                                    <option class="range" value="range">{{ __('messages.surveys.edit.echelle') }}</option>
                                                    <option class="date" value="date">{{ __('messages.surveys.edit.date') }}</option>
                                                    <!-- <option class="file" value="file">{{ __('messages.surveys.edit.fichier') }}</option> -->
                                                </select>
                                            </div>

                                            @if($question->required)
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" checked class="text-center" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @else
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" class="text-cente" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                        <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @endif
                                            <span class="pr-2">
                                                <button type="button" class="delete-question btn btn-secondary mb-2 noborder">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>

                                        <div class="e-container">
                                            @php
                                                $i = 0
                                            @endphp

                                            @if(! $elements->isEmpty())
                                                @foreach($elements as $element)
                                                    @if($element->question_id == $question->id)
                                                        @if($i < 2)
                                                            <div class="p-2 ml-5 pl-2">
                                                                <input class="e-question form-control col-4 form-control-lg noborder p-2" type="text" name="e-question" value="{{ $element->content }}" required>
                                                            </div>  
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong></strong>
                                                            </span>
                                                            @php
                                                                $i += 1
                                                            @endphp
                                                        @else
                                                            <div class="p-2 ml-5 pl-2 d-flex justify-content-start">
                                                                <input class="e-question form-control col-4 form-control-lg noborder p-2" type="text" name="e-question" value="{{ $element->content }}" required>
                                                            
                                                                <button type="button" class="del-e btn btnsurvey btn-danger noborder">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>

                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong></strong>
                                                                </span>
                                                            
                                                            </div>

                                                            @php
                                                                $i += 1
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        @if($i < 10)
                                            <div class="col-sm-3 d-flex justify-content-end">
                                                <button type="button" class="add-e btn btnsurvey btn-danger noborder">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        @endif
                                        @break

                                    @case('checkbox')
                                        <div class="row justify-content-md-center p-2">
                                            <div class="col col-lg">
                                                <span>
                                                    <input type="text" class="form-control form-control-lg noborder p-2" name="question" value="{{ $question->title }}" required>
                                                </span>
                                            </div>  

                                            <div class="col-md-auto">  
                                                <select name="select" class="custom-select col">
                                                    <option class="simple" value="simple" >{{ __('messages.surveys.edit.question') }}</option>
                                                    <option class="paragraph" value="paragraph">{{ __('messages.surveys.edit.paragraphe') }}</option>
                                                    <option class="multiple" value="multiple">{{ __('messages.surveys.edit.choix') }}</option>
                                                    <option class="checkbox" value="checkbox"selected>{{ __('messages.surveys.edit.cases') }}</option>
                                                    <option class="number" value="number">{{ __('messages.surveys.edit.nombre') }}</option>
                                                    <option class="range" value="range">{{ __('messages.surveys.edit.echelle') }}</option>
                                                    <option class="date" value="date">{{ __('messages.surveys.edit.date') }}</option>
                                                    <!-- <option class="file" value="file">{{ __('messages.surveys.edit.fichier') }}</option> -->
                                                </select>
                                            </div>

                                            @if($question->required)
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" checked class="text-center" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @else
                                                <div class="mt-1 p-1">
                                                    <input type="checkbox" class="text-cente" name="required" />
                                                </div>
                                                <div class="text-center p-2">
                                                        <label>{{ __('messages.surveys.edit.requis') }}</label>
                                                </div>
                                            @endif

                                            <span class="pr-2">
                                                <button type="button" class="delete-question btn btn-secondary mb-2 noborder">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>

                                        <div class="e-container">
                                            @php
                                                $i = 0
                                            @endphp

                                            @if(! $elements->isEmpty())
                                                @foreach($elements as $element)
                                                    @if($element->question_id == $question->id)
                                                        @if($i < 2)
                                                            <div class="p-2 ml-5 pl-2">
                                                                <input class="e-question form-control col-4 form-control-lg noborder p-2" type="text" name="e-question" value="{{ $element->content }}" required>
                                                            </div>  
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong></strong>
                                                            </span>
                                                            @php
                                                                $i += 1
                                                            @endphp
                                                        @else
                                                            <div class="p-2 ml-5 pl-2 d-flex justify-content-start">
                                                                <input class="e-question form-control col-4 form-control-lg noborder p-2" type="text" name="e-question" value="{{ $element->content }}" required>
                                                            
                                                                <button type="button" class="del-e btn btnsurvey btn-danger noborder">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>

                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong></strong>
                                                                </span>
                                                            
                                                            </div>

                                                            @php
                                                                $i += 1
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        
                                        @if($i < 10)
                                            <div class="col-sm-3 d-flex justify-content-end">
                                                <button type="button" class="add-e btn btnsurvey btn-danger noborder">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        @endif
                                            
                                        @break

                                    @default
                                        <span>We have a problem sir !</span>
                                @endswitch
                                
                            </div>
                        @endforeach
                    @else
                        <div class="question container text-white shadow p-2 m-2">
                            <div class="row justify-content-md-center p-2">
                                <div class="col col-lg">
                                    <span>
                                        <input type="text" class="form-control form-control-lg noborder p-2" name="question" value="" required>
                                    </span>
                                </div>

                                <div class="col-md-auto">
                                    <select name="select" class="custom-select col">
                                        <option class="simple" value="simple"selected>{{ __('messages.surveys.edit.question') }}</option>
                                        <option class="paragraph" value="paragraph">{{ __('messages.surveys.edit.paragraphe') }}</option>
                                        <option class="multiple" value="multiple">{{ __('messages.surveys.edit.choix') }}</option>
                                        <option class="checkbox" value="checkbox">{{ __('messages.surveys.edit.cases') }}</option>
                                        <option class="number" value="number">{{ __('messages.surveys.edit.nombre') }}</option>
                                        <option class="range" value="range">{{ __('messages.surveys.edit.echelle') }}</option>
                                        <option class="date" value="date">{{ __('messages.surveys.edit.date') }}</option>
                                        <!-- <option class="file" value="file">{{ __('messages.surveys.edit.fichier') }}</option> -->
                                    </select>
                                </div>

                                
                                <div class="mt-1 p-1">
                                    <input type="checkbox" class="text-center" name="required" checked />
                                </div>
                                <div class="text-center p-2">
                                    <label>{{ __('messages.surveys.edit.requis') }}</label>
                                </div>
                                

                                <span class="pr-2">
                                    <button type="button" class="delete-question btn btn-secondary mb-2 noborder">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </span>
                            </div>
                            <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                    @endif

                </div>

                <div class="d-flex justify-content-center p-5">
                    <span class="p-2">
                        <input type="button" class="btn btnsurvey btn-danger noborder" id="add-question" value="{{ __('messages.surveys.edit.create_question') }}">
                    </span>
                    <span class="p-2">
                    <input type="submit" class="btn btnsurvey btn-danger noborder" id="edit-form" value="{{ __('messages.surveys.edit.save') }}">
                    </span>
                </div>

            </form>   
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/edit.js') }}"></script>
@endsection