@extends('students.layouts.master')
@section('title', 'Number')
@section('content')

@if( $posts )
    
        <p>This user has created following posts:</p>
        @foreach( $posts as $post)
        <div class="alert alert-success">
            <h3><b>TITLE: </b>{{ $post->title }}</h3>
            <p><b>DESCRIPTION: </b>{{ $post->description }}</p>
            <small><p><b>CREATED_AT: </b>{{ $post->created_at }}</p></small>
            <small><p><b>UPDATED_AT: </b>{{ $post->updated_at }}</p></small>
        </div>
        @endforeach
    
@else
    <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
@endif

@endsection