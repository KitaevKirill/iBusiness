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
                <li class="page-item @if($page == 1) active @endif"><a class="page-link" href="/quiz{{$quiz}}/page1">1</a></li>
                <li class="page-item @if($page == 2) active @endif">
                    <a class="page-link" href="/quiz{{$quiz}}/page2">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item @if($page == 3) active @endif"><a class="page-link" href="/quiz{{$quiz}}/page3">3</a></li>
                {{--<li class="page-item">--}}
                    {{--<a class="page-link" href="#">Next</a>--}}
                {{--</li>--}}
            </ul>
        </nav>
        <div style="width: 40%; float: left">
            <form action="/quiz{{$quiz}}/page{{$page}}" method="POST">
                @csrf
                @for ($i = $from; $i < $to; $i++)
                    @php $value = 'value_'.$i; @endphp
                    @php $answer = 'answer_'.$i; @endphp
                    <p><b>{{$question[$i-1]->question}}</b></p>
                    <p><input type="radio" name="{{$value}}" value="yes"
                              @if (isset($practice->{$value}) && $practice->{$value} == "yes") checked @endif>Да<Br></p>
                    <p><input type="radio" name="{{$value}}" value="no"
                              @if (isset($practice->{$value}) && $practice->{$value} == "no") checked @endif>Нет<Br></p>
                    <p><textarea style="width: 100%" required
                                 name="{{$answer}}">@if(isset($practice->{$answer})) {!! $practice->{$answer} !!} @endif </textarea>
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
            @if (isset($practice->value_3))
                <ul id="main">
                    <li id="li3" @if ($practice->value_3 == "0") style="display:none">
                        @elseif ($practice->value_3 == "yes") class="good">
                        <div>C вопросом 1 всё в порядке</div>
                        @else class="bad">
                        <div>Вам надо поработать над вопросом 1</div>
                        @endif
                            <div id="shadow1" class="hover" style="">Здесь подсказка 1</div>
                    </li>
                    <li id="li6" @if ($practice->value_6 == "0") style="display:none">
                        @elseif ($practice->value_6 == "yes") class="good">
                        <div>C вопросом 2 всё в порядке</div>
                        @else class="bad">
                        <div>Вам надо поработать над вопросом 2</div>
                        @endif
                            <div id="shadow2" class="hover" style="">Здесь подсказка 2</div>
                    </li>
                    <li
                            @if ($practice->value_9 == "0") style="display:none">
                        @elseif ($practice->value_9 == "yes") class="good">
                        <div>C вопросом 3 всё в порядке</div>
                        @else class="bad">
                        <div>Вам надо поработать над вопросом 3</div>
                        @endif
                    </li>
                    <li
                            @if ($practice->value_14 == "0") style="display:none">
                        @elseif ($practice->value_14 == "yes") class="good">
                        <div>C вопросом 4 всё в порядке</div>
                        @else class="bad">
                        <div>Вам надо поработать над вопросом 4</div>
                        @endif
                    </li>
                    <li
                            @if ($practice->value_15 == "0") style="display:none">
                        @elseif ($practice->value_15 == "yes") class="good">
                        <div>C вопросом 5 всё в порядке</div>
                        @else class="bad">
                        <div>Вам надо поработать над вопросом 5</div>
                        @endif
                    </li>
                </ul>



            @endif
        </div>
    </div>

@endsection
