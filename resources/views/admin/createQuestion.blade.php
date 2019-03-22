@extends('layouts.app')

@section('content')
    <div class="container">
<form method="post">
    @csrf
    Номер Вопроса<br>
    <input type="number" name="number" value="{{$nextNumber}}" style="width: 40px"><br><br>
    Текст вопроса<br>
    <input type="text" name="question" required><br><br>
    Ключевой вопрос?<br>
    <input type="checkbox" name="important"><br><br>
    <input type="submit" formaction="/adminpanel/quiz{{$quiz}}/question/create">

</form>
    </div>
    <div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
