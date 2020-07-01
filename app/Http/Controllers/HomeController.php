<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Answer_sheet;
use App\Models\Survey;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $surveys = Survey::where('user_id', Auth::id())->orderBy('id', 'desc')->get()->reverse();
            $answersnb = 0;
            foreach($surveys as $survey) {
                $answers = Answer_sheet::where('survey_id', $survey->id)->orderBy('id', 'desc')->get()->reverse();
                $answersnb += count($answers);
            }
            return view('home', compact('surveys', 'answersnb'));
        }
        else {
            return view('auth.login');
        }
    }
}
