@extends('layout')

@section('content')
@foreach ($posts as $post)
<article>
    <h1>
        <a href="posts/{{ $post->slug; }}">{{ $post->title; }}</a>
    </h1>
    <p>{{ $post->excerpt; }}</p>
    <p>{{ $post->category->name; }}</p>
</article>
@endforeach
@endsection