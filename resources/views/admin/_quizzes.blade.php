<div>
    @foreach($quizzes as $quiz)
        <a href="/adminpanel/quiz{{$quiz->id}}/question">{{$quiz->title}}</a><br>
    @endforeach
</div>