@extends('layout')

@section('content')
    <h1>All posts</h1>
    <table class="post-list">
        <tr>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }} </td>
                <td>{{ $post->updated_at }} </td>
                <td><a href="/posts/{{ $post->id }}">View</a></td>
                <td><a href="/posts/{{ $post->id }}/edit">Edit</a></td>
            </tr>
        @endforeach
    </table>
@endsection
