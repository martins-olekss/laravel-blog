@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{!! $post->content !!} </p>

    <ul>
        <li>Created: {{ $post->created_at }} </li>
        <li>Updated: {{ $post->updated_at }} </li>
        <li><a href="/posts/{{ $post->id }}/edit">Edit</a></li>
    </ul>
@endsection
