<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurveyRequest;
use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Question;
use App\Models\QuestionElement;
use App\Models\Answer_sheet;
use App\Models\Answer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request, $locale, $id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $locale)
    {   

        $request->validate([
            'question.*' => 'required|min:3|max:255|string',
            'equestion.*' => 'required|min:3|max:255|string',
            'iquestion.*' => 'required|integer',
            'id' => 'required|integer|min:1',
        ]);

        $id = $request->id;
        $i = 0;
        $e = 0;
        $q = 0;
        $c = 0;
        
        for ($q; $q < count($request->question); $q++) {
            $box = true;
            if ($request->required[$q] == "true") {
                $required = 1;
            }
            else {
                $required = 0;
            }

            $question = Question::create(['title' => $request->question[$q], 'type' => $request->select[$q], 'required' => $required, 'survey_id' => $id]);
            
            for ($y = 0; $y < $request->nbelement[$q]; $y++) {
                if ($request->select[$q] == "number" or $request->select[$q] == "range") {
                    if ($box) {
                        QuestionElement::create(['content' => $request->cquestion[$c], 'survey_id' => $id, 'question_id' => $question->id]);
                        $c++;
                        $box = false;
                    }
                    else {
                        QuestionElement::create(['content' => $request->iquestion[$i], 'survey_id' => $id, 'question_id' => $question->id]);
                        $i++;
                    }
                }
                else {
                    QuestionElement::create(['content' => $request->equestion[$e], 'survey_id' => $id, 'question_id' => $question->id]);
                    $e++;
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, $id)
    {
        $questions = Question::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();
        $elements = QuestionElement::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();
        $answer_sheets = Answer_sheet::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();
        $answers = Answer::where('survey_id', $id)->orderBy('id', 'desc')->get()->reverse();

        foreach ($questions as $question){
            Question::destroy($question->id);
        }

        foreach ($elements as $element){
            QuestionElement::destroy($element->id);
        }

        foreach ($answer_sheets as $answer_sheet){
            Answer_sheet::destroy($answer_sheet->id);
        }

        foreach ($answers as $answer){
            Answer::destroy($answer->id);
        }
    }
}
