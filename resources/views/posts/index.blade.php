@extends('layouts.app')

@section('content')
            <h1>All posts</h1>
            <table class="post-list">
                <tr>
                    <th>Title</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    @auth
                        <th></th>
                        <th></th>
                    @endauth
                </tr>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at }} </td>
                        <td>{{ $post->updated_at }} </td>
                        @auth
                            <td><a href="/posts/{{ $post->id }}">View</a></td>
                            <td><a href="/posts/{{ $post->id }}/edit">Edit</a></td>
                        @endauth
                    </tr>
                @endforeach
            </table>
@endsection
