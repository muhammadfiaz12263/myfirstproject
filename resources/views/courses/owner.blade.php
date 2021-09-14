@extends('phones.layouts.master')
@section('title', 'phones')
@section('content')

@if( $owner )
    <div class="alert alert-success">
        <p>Number has assigned to following user:</p>
        <p><b>Name: </b>{{ $owner->first_name }} {{ $owner->last_name }}</p>
        <p><b>Email: </b>{{ $owner->email }}</p>
        <p><b>City: </b>{{ $owner->city }}</p>
    </div>
@else
    <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
@endif

@endsection