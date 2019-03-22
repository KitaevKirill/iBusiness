@extends('layouts.app')

@section('content')
    <div class="container">
        <table>
            @foreach($quizzes as $quiz)
                <tr>
                    <td>
                        {{$quiz->find($quiz->id)->title}}
                    </td>
                    <td>
                        <form method="POST" action="/adminpanel/clients/{{$id}}">
                            @csrf
                            <input type="text" name="quiz_id" value="{{$quiz->id}}" hidden>
                            <input type="checkbox"
                                   name=quiz onChange="this.form.submit()"
                                   @if ( in_array($quiz->id, $accesses)) checked @endif>
                            <br>

                            </label>
                        </form>
                    </td>
                </tr>
            @endforeach
            {{--@for($i = 1; $i <= $lastID; $i++)--}}
            {{--<tr><td>--}}
            {{--{{$quizzes->find($i)->title}}--}}
            {{--</td><td>--}}
            {{--<form method="POST" action="/adminpanel/clients/{{$id}}">--}}
            {{--@csrf--}}
            {{--<input type="text" name="quiz_id" value="{{$i}}" hidden>--}}
            {{--<input type="checkbox"--}}
            {{--name=quiz onChange="this.form.submit()" @if ( in_array($i, $accesses)) checked @endif>--}}
            {{--<br>--}}

            {{--</label>--}}
            {{--</form>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--@endfor--}}
        </table>
    </div>
@endsection
