@extends('layouts.app')

@section('content')
    <h1>Update Post</h1>

    <form method="POST" action="/posts/{{$post->id}}" class="posts">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <input name="title" placeholder="title" type="text" value="{{ $post->title }}"/>
        <textarea name="article_content" placeholder="Content">{{ $post->content }}</textarea>
        <button type="submit">Update post</button>
    </form>

    <form method="POST" action="/posts/{{$post->id}}" class="posts">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit">DELETE post</button>
    </form>


@endsection
