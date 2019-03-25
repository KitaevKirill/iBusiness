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

        $lastID = $quizzes->last()->id;

        return view('admin.access', ['quizzes' => $quizzes, 'lastID' => $lastID, 'accesses' => $accesses, 'id' => $id]);
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

    public function fullaccess($id)
    {
        $user = User::FindOrFail($id);

        if ($user->access == '1') {
            $user->access = '0';
            $user->save();
        } else {
            $user->access = '1';
            $user->save();
        }

        return back();
    }

    public function delete($id)
    {
        $user = User::FindOrFail($id);

        $user->quizzes()->detach();

        $user->delete();

        return back();
    }
}
