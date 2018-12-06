@extends("layouts/app")

@section("title", $title)

@section("content")
<div>
    <label>This is the main page</label>
    <form action="/create" method="POST">
        @csrf
        <textarea name="tweetbody">
        </textarea>
        <button type="submit">Click Me</button>
    </form>

    <form action="/oauth/clients" method="POST">
        @csrf
        <input type='text' name="name" />
        <input type='text' name='redirect' value="http://localhost"/>
        <button type="submit">Register Client</button>
    </form>
</div>
@endsection