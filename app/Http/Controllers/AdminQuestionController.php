<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class AdminQuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function create($quiz)
    {

        $nextNumber = Question::where('quiz_id', $quiz)->get()->pluck('number')->max() + 1;

        return view('admin.createQuestion', ['quiz' => $quiz, 'nextNumber' => $nextNumber]);

    }

    public function store(Request $request, $quiz)
    {

        $newQuestion = new Question;

        $minNumber = Question::where('quiz_id', $quiz)->get()->pluck('number')->max() + 1;

        request()->validate([
            'question' => 'required|min:7|max:100',
            'number' => 'numeric|min:' . $minNumber,
        ]);

        $newQuestion->quiz_id = $quiz;
        $newQuestion->number = $request->number;
        $newQuestion->question = $request->question;
        if ($request->important = 'on') {
            $newQuestion->important = '1';
        }

        $newQuestion->save();

        return redirect('/adminpanel/quiz' . $quiz . '/question');

    }

    public function index($quiz)
    {

        $questions = Question::where('quiz_id', $quiz)->get();

        return view('admin.view', ['questions' => $questions, 'quiz' => $quiz]);
    }

    public function patch($quiz, $id)
    {

        $question = Question::find($id);

        $question->question = request('question');

        if(request('important') == 'on'){
            $question->important = '1';
        } else {$question->important = '0';}

        $question->save();

        return back();
    }

    public function delete($quiz, $id)
    {

        $question = Question::find($id);

        $question->delete();

        return back();
    }
}
