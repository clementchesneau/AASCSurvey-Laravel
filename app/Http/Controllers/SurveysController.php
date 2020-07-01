<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurveyRequest;
use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Answer_sheet;
use App\Models\Answer;
use App\Models\QuestionElement;
use Illuminate\Support\Facades\Auth;

class SurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        if (Auth::check()) {
            $surveys = Survey::where('user_id', Auth::id())->orderBy('id', 'desc')->get()->reverse();
            $answersnb = 0;
            foreach($surveys as $survey) {
                $answers = Answer_sheet::where('survey_id', $survey->id)->orderBy('id', 'desc')->get()->reverse();
                $answersnb += count($answers);
            }

            return view('surveys.index', compact('surveys', 'answersnb'));
        }
        else {
            return view('auth.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($locale)
    {
        if (Auth::check()) {
            return view('surveys.create');
        }
        else {
            return view('auth.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SurveyRequest $request, $locale)
    {   
        $published_a = false;

        if (isset($request->published)) {
            $published_a = true;
        }
        
        $survey = Survey::create(['title' => $request->survey_title, 'published' => $published_a, 'user_id' => Auth::id(), 'required' => true]);
        Question::create(['survey_id' => $survey->id]);

        return redirect()->route('surveys.edit', [app()->getLocale(), $survey]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $id, Request $request)
    {
        $survey = Survey::findOrFail($id);
        $questions = Question::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();
        $elements = QuestionElement::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();
        $answer_sheets = Answer_sheet::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();

        if (Auth::check() && Auth::id() == $survey->user_id) {
            return view('surveys.show', compact('survey', 'questions', 'elements'));
        }

        if ($survey->published) {
            $ipuse = false;
            foreach($answer_sheets as $answer_sheet) {
                if ($answer_sheet->ip == $request->ip()) {
                    $ipuse = true;
                }
            }
            if ($ipuse) {
                return view('surveys.already', compact('survey'));
            }
            else {
                return view('surveys.show', compact('survey', 'questions', 'elements'));
            }
        }

        return view('surveys.notaccess', compact('survey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, $id)
    {   
        if (Auth::check()) {
            $survey = Survey::findOrFail($id);
            $questions = Question::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();
            $elements = QuestionElement::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();

            if (Auth::id() == $survey->user_id) {
                return view('surveys.edit', compact('survey', 'questions', 'elements'));
            }
            else {
                return view('home');
            }
        }
        else {
            return redirect()->route('login', $locale);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SurveyRequest $request, $locale, $id)
    {
        $published_a = false;
        $survey = Survey::findOrFail($id);

        if (isset($request->published)) {
            $published_a = true;
        }

        $survey->update(['title' => $request->survey_title, 'published' => $published_a]);

        return $survey->title;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, $id)
    {
        $survey = Survey::findOrFail($id);
        $questions = Question::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();
        $elements = QuestionElement::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();
        $answer_sheets = Answer_sheet::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();

        if (Auth::check() and Auth::id() == $survey->user_id) {
            foreach ($answer_sheets as $answer_sheet) {
                $answers = Answer::where('answer_sheet_id', $answer_sheet->id)->orderBy('id', 'desc')->get()->reverse();
                foreach ($answers as $answer) {
                    Answer::destroy($answer->id);
                }
                Answer_sheet::destroy($answer_sheet->id);
            }

            foreach ($elements as $element) {
                QuestionElement::destroy($element->id);
            }

            foreach ($questions as $question) {
                Question::destroy($question->id);
            }
            Survey::destroy($id);

            return redirect()->route('surveys.index', $locale);
        }
    } 
}
