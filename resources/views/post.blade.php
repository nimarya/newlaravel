@extends('layout')

@section('content')
<article>
    <h1>{{$post->title;}}</h1>
    <p>{!! $post->body; !!}</p>
</article>
<p><a href="/posts">go to the main page</a></p>
@endsection