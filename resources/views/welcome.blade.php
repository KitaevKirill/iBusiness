@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добро пожаловать</h1>
        Доступные Вам опросы:<br>
        @foreach ($quizzes as $quiz)
            <a href="/quiz{{$quiz->id}}/page1">{{$quiz->title}}</a><br>
        @endforeach

        @if(Auth::check() && Auth::user()->role == 1)
            <form action="/adminpanel">
                <button>Войти в панель администратора</button>
            </form>
        @endif
    </div>
@endsection