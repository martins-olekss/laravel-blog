@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <h3>{{ $post->title }}</h3>
        <div class="content">{!! $post->content !!}</div>
    @endforeach
@endsection
