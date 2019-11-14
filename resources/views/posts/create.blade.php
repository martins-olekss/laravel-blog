@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    <form method="POST" action="/posts" class="posts">
        {{ csrf_field() }}
        <input name="title" placeholder="title" type="text"/>
        <textarea name="article_content" placeholder="Content"></textarea>
        <button type="submit">Create post</button>
    </form>

@endsection
