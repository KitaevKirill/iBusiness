@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach($questions as $question)
            <table style="width: 100%">
                <tr>

                    <td style="width: 30px">
                        {{$question->number}}
                    </td>
                    <td style="width: 75vw">
                        <form method="post" action="/adminpanel/quiz{{$quiz}}/question{{$question->id}}">
                            @csrf
                            {{method_field('patch')}}
                            <input type="text" name="question" value="{{$question->question}}" style="width: 85%">

                            <input type="submit"
                                   value="Изменить"  style="float: right"></form>
                    </td>
                    <td  style="width:auto; float: right">
                        <form method="post" action="/adminpanel/quiz{{$quiz}}/question{{$question->id}}">
                            @csrf
                            {{method_field('delete')}}
                            <button
                                    style="background: #ff2828; border-radius: 7px ">Удалить
                            </button>
                        </form>
                    </td>
                </tr>
            </table>
        @endforeach
        <br>
        <button onclick="window.location.href='/adminpanel/quiz{{$quiz}}/question/create'"
                style="background: #4aff98; border-radius: 7px ">Добавить вопрос
        </button>
    </div>
@endsection
