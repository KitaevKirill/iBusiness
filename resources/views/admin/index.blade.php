@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        <a href="/adminpanel/clients">Клиенты</a><br><br>
        @include('admin._quizzes')
        <br>
        <form method="get" action="/adminpanel/quiz/create">
            @csrf
            <button>Создать новый опрос</button>
        </form>
    </div>
@endsection
