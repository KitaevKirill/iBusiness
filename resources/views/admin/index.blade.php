@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/adminpanel/clients">Клиенты</a><br><br>
        @include('admin._quizzes')
        <br>
        <form method="get" action="/adminpanel/quiz/create">
            @csrf
            <button>Создать новый опрос</button>
        </form>
    </div>
@endsection
