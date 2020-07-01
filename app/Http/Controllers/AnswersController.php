<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Question;
use App\Models\QuestionElement;
use App\Models\Answer_sheet;
use App\Models\Answer;
class AnswersController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $id = $request->surveyid;
        $ip = $request->ip();
        $e = 0;

        $request->validate([
            'surveyid' => 'required|integer|min:1',
        ]);

        for($i = 0; $i < count($request->question); $i++) {
            $request->validate([
                'question.' . $i => 'required|integer',
            ]);
            if ($request->questiontype[$i] == 'number') {
                $request->validate([
                    'answer.' . $i => 'required_if:isrequired.' . $i . ',1',
                ]);
            }
            else if ($request->questiontype[$i] == 'range') {
                $request->validate([
                    'answer.' . $i => 'required_if:isrequired.' . $i . ',1|integer',
                ]);
            }
            else if ($request->questiontype[$i] == 'date') {
                $request->validate([
                    'answer.' . $i => 'required_if:isrequired.' . $i . ',1',
                ]);
            }
            else if ($request->questiontype[$i] == 'simple') {
                $request->validate([
                    'answer.' . $i => 'required_if:isrequired.' . $i . ',1',
                ]);
            }
            else if ($request->questiontype[$i] == 'paragraph') {
                $request->validate([
                    'answer.' . $i => 'required_if:isrequired.' . $i . ',1',
                ]);
            }
            else if ($request->questiontype[$i] == 'multiple') {
                $request->validate([
                    'answer.' . $i => 'required_if:isrequired.' . $i . ',1',
                ]);
            }
            else if ($request->questiontype[$i] == 'checkbox') {
                $request->validate([
                    'answer.' . $i => 'required_if:isrequired.' . $i . ',1',
                ]);
            }
        }

        $answer_sheet = Answer_sheet::create(['ip' => $ip, 'survey_id' => $id]);


        for ($i = 0; $i < count($request->question); $i++) {
            if (isset($request->answer[$i]) && $request->answer[$i] == '-element-question-') {
                $content = '';
                for($y = 0; $y < $request->nbelement[$i]; $y++) {
                    if (isset($request->element[$e])) {
                        if ($content != '') {
                            $content = $content . ',' . $request->element[$e];
                        }
                        else {
                            $content = $content . $request->element[$e];
                        }
                    }
                    $e++;
                }
                if (isset($content) and $content != null) {
                    Answer::create(['content' => $content, 'answer_sheet_id' => $answer_sheet->id, 'question_id' => $request->question[$i], 'survey_id' => $id, 'question_type' => $request->questiontype[$i]]);
                }
            }
            else {
                if (isset($request->answer[$i]) and $request->answer[$i] != null) {
                    Answer::create(['content' => $request->answer[$i], 'answer_sheet_id' => $answer_sheet->id, 'question_id' => $request->question[$i], 'survey_id' => $id, 'question_type' => $request->questiontype[$i]]);
                }
            }
        }

        return view('surveys.send');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $id)
    {
        $survey = Survey::findOrFail($id);
        $questions = Question::where('survey_id', $id)->orderBy('id', 'desc')->get();
        $elements = QuestionElement::where('survey_id', $id)->orderBy('id', 'desc')->get();
        $answer_sheets = Answer_sheet::where('survey_id', $id)->orderBy('id', 'desc')->get();
        $answers = Answer::where('survey_id', $id)->orderBy('id', 'desc')->get();

        return response()->json(compact('survey', 'questions', 'elements', 'answer_sheets', 'answers'));
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
    public function destroy($id)
    {
        //
    }
}
