@extends('posts.layouts.master')
@section('title', 'Posts')
@section('content')

<h1>All Posts Details</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>USER_ID</th>
                    <th>CREATED_AT</th>
                    <th>UPDATED_AT</th>
                    <th>ACTIONS</th>
                </thead>
                <tbody>
                    @if( $posts )
                    
                        @foreach( $posts as $post )
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->user_id ? $post->user_id : 'N/A' }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td>
                                    <a href="/creator/post/{{$post->id}}" class="btn btn-primary">Creater Details</a>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/posts/{{$post->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    @else
                        <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
                    @endif
                </tbody>
            </table>
            <!-- Relative Url -->
            <!-- <a href="/crud/create">Create Project</a>   -->
            <!-- Absolute Url Result: <a href="http://myfirstproject.com/crud/create">Create Project</a>-->
            <!-- <a href="{{ url('/posts/create') }}" class="btn btn-primary">Add New</a> -->
        </div>
    </div>
</div>

@endsection