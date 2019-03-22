<div>
    @foreach($quizzes as $quiz)
        <a href="/adminpanel/quiz{{$quiz->id}}/question">{{$quiz->title}}</a>
        <form method="post" action="/adminpanel/quiz{{$quiz->id}}/delete">
                @csrf
                {{method_field('delete')}}
                <button>Удалить</button>
        </form><br>
    @endforeach
</div>