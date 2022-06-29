@extends('layout')

@section('content')
@foreach ($posts as $post)
<article>
    <h1>
        <a href="/posts/{{ $post->slug; }}">{{ $post->title; }}</a>
    </h1>
    <p>{{ $post->excerpt; }}</p>
    <p>written by <a href="/users/{{ $post->user->id; }}">{{ $post->user->name; }}</a> in <a href="/categories/{{ $post->category->slug; }}">{{ $post->category->name; }}</a></p>
</article>
@endforeach
@endsection