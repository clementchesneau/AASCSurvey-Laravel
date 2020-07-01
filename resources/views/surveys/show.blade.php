@extends('layouts.app')

@section('content')
<div class="container p-5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="shadow">
                    <div class="d-flex justify-content-center pt-3 p-2">
                        <h1 class="colortextCA3E47">{{ $survey->title }}</h1>
                    </div>
                    <p class="text-center text-white">* are required questions</p>

                    @if(isset(Auth::user()->id) and Auth::user()->id == $survey->user_id)
                        <div class="d-flex justify-content-center pb-4">     
                            <span class="mr-5">
                                <a href="{{ route('surveys.edit', [app()->getLocale(), $survey]) }}">
                                    <button type="button" class="btn btnsurvey btn-danger noborder">{{ __('messages.surveys.show.edit') }}</button>
                                </a>
                            </span>

                            <form action="{{ route('surveys.destroy', [app()->getLocale(), $survey]) }}" method="POST">
                                @csrf

                                {{ method_field('DELETE') }}
                                <span class="ml-5">
                                <input type="submit" class="btn btn-secondary noborder" value="{{ __('messages.surveys.show.delete') }}">
                                </span>
                            </form>
                        </div>
                        <p id="answersnumber" class="text-center text-white"></p>
                        <div class="shadow-sm text-center hauteur pt-3 pb-3">
                            <nav class="navunderline">
                                <a class="text-white underline" id="create-nav-link1" href="#">Sondage</a>
                                <a class="text-white" id="create-nav-link2" href="#">Analyse</a>
                            </nav>
                        </div>
                    @endif
                </div>

            <!-- Questions Form edition -->
            <form onsubmit="return answersubmit()" id="answerform" action="{{ route('answers.store', app()->getLocale()) }}" method="POST">
                @csrf

                <input type="hidden" value="{{ $survey->id }}" id="surveyid" name="surveyid">

                <div id="questions-container">
                    @if(! $questions->isEmpty())
                            @foreach($questions as $question)
                                <div class="question text-white p-2 my-3 shadow">
                                    <input type="hidden" value="{{ $question->id }}" name="questionid">
                                    <input type="hidden" class="isrequired" value="{{ $question->required }}" name="isrequired">
                                    <input type="hidden" class="nbelement" value="0" name="nbelement">
                                    <input type="hidden" value="{{ $question->type }}" name="questiontype">
                                    @switch($question->type)
                                        @case('simple')
                                            @if($question->required)
                                                <span class="pl-4">*</span>
                                            @endif
                                            <h2 class="p-2 pl-1 ml-4">{{ $question->title }}</h2>
                                            <div class="p-4 pl-4">
                                                <div class="col col-lg d-flex justify-content-center">
                                                    <span class="col">
                                                    @if($question->required)
                                                        <input type="text" class="form-control form-control form-control-lg noborder p-2" name="answer" required>
                                                    @else
                                                        <input type="text" class="form-control form-control form-control-lg noborder p-2" name="answer">
                                                    @endif
                                                        
                                                    </span>
                                                </div>
                                            </div>
                                            @break

                                        @case('paragraph')
                                            @if($question->required)
                                                <span class="pl-4">*</span>
                                            @endif
                                            <h2 class="p-2 pl-1 ml-4">{{ $question->title }}</h2>
                                            <div class="p-4 pl-4">
                                                <div class="col col-lg d-flex justify-content-center">
                                                    <span class="col">
                                                        @if($question->required)
                                                            <textarea type="textarea" class="form-control form-control-lg noborder p-2" name="answer" required></textarea>
                                                        @else
                                                            <textarea type="textarea" class="form-control form-control-lg noborder p-2" name="answer"></textarea>
                                                        @endif
                                                        
                                                    </span>
                                                </div>
                                            </div>
                                            @break

                                        @case('multiple')
                                            @if($question->required)
                                                <span class="pl-4">*</span>
                                            @endif
                                            <h2 class="p-2 pl-1 ml-4">{{ $question->title }}</h2>
                                            <div class="e-container p-4 pl-5">
                                                @if(! $elements->isEmpty())
                                                    @foreach($elements as $element)
                                                        @if($element->question_id == $question->id)
                                                            <div class="form-check mb-3">  
                                                                @if($question->required)
                                                                    <input type="radio" class="form-check-input" name="answer" value="{{ $element->content }}" id="element" required /> <label class="pl-2" for="element">{{ $element->content }}</label>
                                                                @else
                                                                    <input type="radio" class="form-check-input" name="answer" value="{{ $element->content }}" id="element" /> <label class="pl-2" for="element">{{ $element->content }}</label>
                                                                @endif
                                                            </div>
                                                            @endif
                                                    @endforeach
                                                @else
                                                    <p>Cette question ne contient aucun element !</p>
                                                @endif
                                            </div>
                                            @break

                                        @case('checkbox')
                                            @if($question->required)
                                                <span class="pl-4">*</span>
                                            @endif
                                            <h2 class="p-2 pl-1 ml-4 mb-4">{{ $question->title }}</h2>
                                            <input type="hidden" value="-element-question-" name="answer">
                                            <div class="e-container pl-5">
                                                @if(! $elements->isEmpty())
                                                    @foreach($elements as $element)
                                                        @if($element->question_id == $question->id)
                                                            <div class="form-check mb-3">  
                                                                <input type="checkbox" class="form-check-input" name="element" value="{{ $element->content }}" id="element" /> <label class="pl-2" for="element">{{ $element->content }}</label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <p>Cette question ne contient aucun element !</p>
                                                @endif
                                            </div>
                                            @break

                                        @case('number')
                                            @if($question->required)
                                                <span class="pl-4">*</span>
                                            @endif
                                            @php 
                                                $x = 0 
                                            @endphp
                                            @if(! $elements->isEmpty())
                                                @foreach($elements as $element)
                                                    @if($element->question_id == $question->id)
                                                        @if($x == 1)
                                                            @php
                                                                $element1 = $element
                                                            @endphp
                                                        @elseif ($x == 2)
                                                            @php
                                                                $element2 = $element
                                                            @endphp
                                                        @endif
                                                        @php
                                                            $x += 1
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            @endif
                                            <h2 class="p-2 pl-1 ml-4">{{ $question->title }}</h2>
                                            <div class="p-4 pl-4">
                                                <div class="col col-lg d-flex">
                                                    <span class="col-5-lg">
                                                        @if($question->required)
                                                            <input type="number" class="form-control form-control-lg noborder p-2" name="answer" step="1" min="{{ $element1->content ?? '' }}" max="{{ $element2->content ?? '' }}" required>
                                                        @else
                                                            <input type="number" class="form-control form-control-lg noborder p-2" name="answer" step="1" min="{{ $element1->content ?? '' }}" max="{{ $element2->content ?? '' }}">
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            @break

                                        @case('range')
                                            @if($question->required)
                                                <span class="pl-4">*</span>
                                            @endif
                                            @php 
                                                $x = 0 
                                            @endphp
                                            @if(! $elements->isEmpty())
                                                @foreach($elements as $element)
                                                    @if($element->question_id == $question->id)
                                                        @if($x == 1)
                                                            @php
                                                                $element1 = $element
                                                            @endphp
                                                            
                                                        @elseif ($x == 2)
                                                            @php
                                                                $element2 = $element
                                                            @endphp
                                                        @endif
                                                        @php
                                                            $x += 1
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            @endif
                                            <h2 class="p-2 pl-1 ml-4">{{ $question->title }}</h2>
                                            <div class="p-4 pl-4">
                                                <div class="col col-lg d-flex justify-content-center">
                                                    <span class="col">
                                                        @if($question->required)
                                                            <input type="range" class="form-control-range" name="answer" step="1" min="{{ $element1->content ?? '' }}" max="{{ $element2->content ?? '' }}" required>
                                                        @else
                                                            <input type="range" class="form-control-range" name="answer" step="1" min="{{ $element1->content ?? '' }}" max="{{ $element2->content ?? '' }}">
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            @break

                                        @case('date')
                                            @if($question->required)
                                                <span class="pl-4">*</span>
                                            @endif
                                            <h2 class="p-2 pl-1 ml-4">{{ $question->title }}</h2>
                                            <div class="p-4 pl-4">
                                                <div class="col col-lg d-flex">
                                                        <span class="col-5-lg">
                                                            @if($question->required)
                                                                <input type="date" class="form-control form-control-lg noborder p-2" name="answer" required>
                                                            @else
                                                                <input type="date" class="form-control form-control-lg noborder p-2" name="answer">
                                                            @endif
                                                        </span>
                                                </div>
                                            </div>
                                            @break
                                        
                                        @case('file')
                                            @if($question->required)
                                                <span class="pl-4">*</span>
                                            @endif
                                            <h2 class="p-2 pl-1 ml-4">{{ $question->title }}</h2>
                                            <div class="d-flex p-4 pl-5"> 
                                                @if($question->required)
                                                    <input type="file" name="answer" required>
                                                @else
                                                    <input type="file" name="answer">
                                                @endif   
                                            </div>    
                                            @break

                                        @default
                                            <span>We have a problem sir !</span>
                                    @endswitch
                                </div>
                            @endforeach
                    @else

                        <p>Ce sondage ne contient pas de questions !</p>

                    @endif
                </div>

                <div class="d-flex justify-content-center p-3">
                    <input type="submit" class="btn btnsurvey btn-danger noborder" id="send-answers" value="{{ __('Envoyer') }}">
                </div>

            </form>

            @if(isset(Auth::user()->id) and Auth::user()->id == $survey->user_id)
                <div id="firsthidden">
                    <p class="d-none" id="chartroute">{{ route('answers.show', [app()->getLocale(), $survey]) }}</p>
                    @if(! $questions->isEmpty())
                        @foreach($questions as $question)
                        <div class="answer">
                            @switch($question->type)
                                @case('simple')
                                    <h2 class="text-center text-white py-4">{{ $question->title }}</h2>
                                    <p class="text-center text-white mb-5">{{ __('messages.surveys.show.pasanalyse') }} - <a href="" class="showanswers">Show answers</a></p>
                                    <div id="answercontent"></div>
                                    @break

                                @case('paragraph')
                                    <h2 class="text-center text-white py-4">{{ $question->title }}</h2>
                                    <p class="text-center text-white mb-5">{{ __('messages.surveys.show.pasanalyse') }} - <a href="" class="showanswers">Show answers</a></p>
                                    <div id="answercontent"></div>
                                    @break
                                    
                                @case('multiple')
                                    <h2 class="text-center text-white py-4">{{ $question->title }}</h2>
                                    <canvas id="chartmultiple" class="mb-5"></canvas>
                                    @break
                                    
                                @case('checkbox')
                                    <h2 class="text-center text-white py-4">{{ $question->title }}</h2>
                                    <canvas id="chartcheckbox" class="mb-5"></canvas>
                                    @break
                                    
                                @case('number')
                                    <h2 class="text-center text-white py-4">{{ $question->title }}</h2>
                                    <canvas id="chartnumber" class="mb-5"></canvas>
                                    @break
                                    
                                @case('range')
                                    <h2 class="text-center text-white py-4">{{ $question->title }}</h2>
                                    <canvas id="chartrange" class="mb-5"></canvas>
                                    @break
                                    
                                @case('date')
                                    <h2 class="text-center text-white py-4">{{ $question->title }}</h2>
                                    <p class="text-center text-white mb-5">{{ __('messages.surveys.show.pasanalyse') }} - <a href="" class="showanswers">Show answers</a></p>
                                    <div id="answercontent"></div>
                                    @break
                                    
                                @case('file')
                                    <h2 class="text-center text-white py-4">{{ $question->title }}</h2>
                                    <p class="text-center text-white mb-5">{{ __('messages.surveys.show.pasanalyse') }} - <a href="" class="showanswers">Show answers</a></p>
                                    <div id="answercontent"></div>
                                    @break
                                    
                                @default
                                    <span>We have a problem sir !</span>
                            @endswitch
                        </div>
                        @endforeach
                    @else
                        {{ __('Pas de question') }}
                    @endif
                </div>
            @endif
        </div>
</div>      
    

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/show.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/navbarCreate.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
@endsection

@section('headscripts')
@endsection