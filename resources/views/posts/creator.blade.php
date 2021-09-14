@extends('posts.layouts.master')
@section('title', 'Creator')
@section('content')

@if( $creator )
    <div class="alert alert-success">
        <p>This Post has created by following user:</p>
        <p><b>Name: </b>{{ $creator->first_name }} {{ $creator->last_name }}</p>
        <p><b>Email: </b>{{ $creator->email }}</p>
        <p><b>City: </b>{{ $creator->city }}</p>
    </div>
@else
    <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
@endif

@endsection