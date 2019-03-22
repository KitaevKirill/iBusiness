@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <script src="{{ asset('js/my.js') }}" defer></script>
    <div class="container">
        <nav aria-label="...">
            <ul class="pagination">
                {{--<li class="page-item disabled">--}}
                {{--<a class="page-link" href="#" tabindex="-1">Previous</a>--}}
                {{--</li>--}}
                @for ($j = 1; $j <= $countOfPage; $j++)
                    <li class="page-item @if($page == $j) active @endif"><a class="page-link"
                                                                            href="/quiz{{$quiz}}/page{{$j}}">{{$j}}</a>
                    </li>
                @endfor
                {{--<li class="page-item">--}}
                {{--<a class="page-link" href="#">Next</a>--}}
                {{--</li>--}}
            </ul>
        </nav>
        <div style="width: 40%; float: left">
            <form action="/quiz{{$quiz}}/page{{$page}}" method="POST">
                @csrf
                @for ($i = $from; $i < $to; $i++)
                    <p><b>{{$question->where('number', '=', $i)->first()->question}}</b></p>
                    <p><input type="radio" name="value{{$i}}" value="yes"
                              @if (isset($answers->where('number', '=', $i)->first()->value) && $answers->where('number', '=', $i)->first()->value == "yes") checked @endif>Да<Br>
                    </p>
                    <p><input type="radio" name="value{{$i}}" value="no"
                              @if (isset($answers->where('number', '=', $i)->first()->value) && $answers->where('number', '=', $i)->first()->value == "no") checked @endif>Нет<Br>
                    </p>
                    <p><textarea style="width: 100%" required
                                 name="answer{{$i}}">@if(isset($answers->where('number', '=', $i)->first()->answer)) {!! $answers->where('number', '=', $i)->first()->answer !!} @endif </textarea>
                    </p>
                    <br>
                @endfor
                <p><input type="submit"></p>
            </form>

            <hr>
        </div>
        <div style="width: 50%; float: right">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <ul id="main">
                @foreach ($question->where('important', '1') as $important)
                    @isset($answers->where('number', '=', $important->number)->first()->value)
                        <li id="li{{$important->number}}"
                            @if ($answers->where('number', '=', $important->number)->first()->value == "0") style="display:none">
                            @elseif ($answers->where('number', '=', $important->number)->first()->value == "yes")
                                class="good">
                                <div>C вопросом {{$important->number}} всё в порядке</div>
                            @else class="bad">
                            <div>Вам надо поработать над вопросом {{$important->number}}</div>
                            @endif
                            <div id="shadow1" class="hover" style="">Здесь подсказка {{$important->number}}</div>
                        </li>
                    @endisset
                @endforeach
            </ul>
        </div>
    </div>

@endsection
