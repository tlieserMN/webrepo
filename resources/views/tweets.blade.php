@extends("layouts/mainlayout")

@section("title")
{{$title}}
@endsection

@section("content")
<div>
    <ul>
    @foreach($tweetss as $tweet)
        <li><a href="/tweets/{{$tweet->id}}">{{$tweet->body}}</a></li>
    @endforeach
    </ul>
</div>
@endsection