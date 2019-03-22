@extends('layouts.app')

@section('content')
    <div class="container">
<form method="post">
    @csrf
    Название опроса<br>
    <input type="text" name="title" required><br><br>
    <input type="submit" formaction="/adminpanel/quiz/create">

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
