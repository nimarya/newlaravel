@extends('layout')

@section('content')
<article>
    <h1>{{$post->title;}}</h1>
    <p>{!! $post->body; !!}</p>
</article>
<p>written by <a href="/users/{{ $post->author->id; }}">{{ $post->author->name; }}</a> in <a href="/categories/{{ $post->category->slug; }}">{{ $post->category->name; }}</a></p>
<p><a href="/posts">go to the main page</a></p>
@endsection