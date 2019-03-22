<?php

namespace App\Http\Controllers;

use App\Practice;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use App\Quiz;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {

        $quizzes = Quiz::all();

//        $yesterday =  date('Y-m-d H:i:s', mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));

//        $last = Practice::where('created_at', '>', $yesterday)->get();

        return view('admin.index', ['quizzes' => $quizzes]);
    }

    public function view()
    {

        return view('admin.view');

    }

    public function clients()
    {

        $clients = User::where('role', '>', 1)->get();

        return view('admin.clients', ['clients' => $clients]);
    }

    public function access($id)
    {

        $accesses = User::findOrFail($id)->quizzes()->get()->pluck('id')->toArray();

        $quizzes = Quiz::all();

        $countOfQuestion = $quizzes->count();

//        return $quizzes->find(1)->id;

        return view('admin.access', ['quizzes' => $quizzes, 'countOfQuestion' => $countOfQuestion, 'accesses' => $accesses, 'id' => $id]);
    }

    public function changeAccess(Request $request, $id)
    {

        if ($request->quiz == 'on') {
            User::findOrFail($id)->quizzes()->attach($request->quiz_id);
        } else {
            User::findOrFail($id)->quizzes()->detach($request->quiz_id);
        }

        return back();
    }
}
