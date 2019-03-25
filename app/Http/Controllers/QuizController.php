<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Question;

class QuizController extends Controller
{
    public $questionsOnPage = 5;

    public function __construct()
    {
        $this->middleware(['auth', 'accessed']);
    }

    /**
     *
     * @param $quiz
     * @param $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($quiz, $page)
    {
        $question = Question::where('quiz_id', $quiz)->get();
        if ($question->count() == 0) {
            return view('absent');
        };
        $answers = Answer::where('user_id', Auth::user()->id)->where('quiz_id', $quiz)->get();
        $countOfQuestion = $question->count();
        $countOfPage = ceil($countOfQuestion / $this->questionsOnPage);
        $questionOnLastPage = $countOfQuestion % $this->questionsOnPage;
        if ($questionOnLastPage == 0) {
            $questionOnLastPage = $this->questionsOnPage;
        }
        $from = 1 + ($page - 1) * $this->questionsOnPage;

        if ($page == $countOfPage) {
            $to = $from + $questionOnLastPage;
        } else {
            $to = $from + $this->questionsOnPage;
        }

        return view('indexNEW', ['answers' => $answers, 'question' => $question, 'from' => $from, 'to' => $to, 'page' => $page, 'quiz' => $quiz, 'countOfPage' => $countOfPage]);
    }

    /**
     * @param Request $request
     * @param $quiz
     * @param $page
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function post(Request $request, $quiz, $page)
    {
        $countOfQuestion = Question::where('quiz_id', $quiz)->get()->count();
        $countOfPage = ceil($countOfQuestion / $this->questionsOnPage);

        if ($page != 100) {
            $from = 1 + ($page - 1) * $this->questionsOnPage;
            $to = 1 + $page * $this->questionsOnPage;
        } else {
            $from = 1;
            $to = $countOfQuestion;
        }

        for ($i = $from; $i < $to; $i++) {

            $value = 'value' . $i;
            $answ = 'answer' . $i;
            $answer = Answer::firstOrNew(['user_id' => Auth::user()->id, 'quiz_id' => $quiz, 'number' => $i]);


//            request()->validate([
//                $answ => 'required|min:3|max:100',
//            ]);

            if (isset($request->{$value})) {
                $answer->value = $request->{$value};
            }
            if (isset($request->{$answ})) {
                $answer->answer = $request->{$answ};
            }

            $answer->save();
        }

        $nextPage = $page + 1;

        if ($page < $countOfPage) {
            return redirect('/quiz' . $quiz . '/page' . $nextPage);
        } else {
            return redirect('/quiz' . $quiz . '/results');
        }
    }

    public function results($quiz)
    {

        $answers = Answer::where('user_id', Auth::user()->id)
            ->where('quiz_id', $quiz)->get();

        $questions = Question::where('quiz_id', $quiz)->get();

        $goodAnswersId = Answer::where('user_id', Auth::user()->id)
            ->where('quiz_id', $quiz)
            ->where('answer', '!=', null)
            ->where('value', '!=', '0')->get()->pluck('number')->toArray();
        $countOfQuestion = Question::where('quiz_id', $quiz)->get()->count();

        $idarr = range(0, $countOfQuestion);

        $problemAnswersId = array_diff($idarr, $goodAnswersId);

        array_shift($problemAnswersId);

        return view('result', ['answers' => $answers, 'questions' => $questions, 'problemAnswersId' => $problemAnswersId, 'quiz' => $quiz]);
    }

//    public function resultsOLD()
//    {
//        $practice = Practice::where('id', Auth::user()->id)->first();
//
//        for ($i = 1; $i <= $this->numberOfQuestion; ++$i) {
//
//            $value = 'value_' . $i;
//            $answer = 'answer_' . $i;
//            $tmp[$answer] = $practice->{$answer};
//            $tmp[$value] = $practice->{$value};
//            $arr = $tmp;
//        }
//
//        $arr = array_filter($arr, function ($var) {
//            return (($var == null) || ($var == '0'));
//        });
//
//        $arr = array_keys($arr);
//
//        foreach ($arr as $str) {
//            $arrNumeric[] = preg_replace("/[^0-9]/", '', $str);
//        }
//
//        $arrNotAnswered = array_unique($arrNumeric);
//
//        $question = Question::all();
//
//        return view('result', ['practice' => $practice, 'question' => $question, 'page' => 3, 'notAnswered' => $arrNotAnswered]);
//    }
}
