@extends('students.layouts.master')
@section('title', 'Number')
@section('content')

@if( $phone )
    <div class="alert alert-success">
        <p>This user has assigned following number:</p>
        <!-- <p>{{ $phone->number }}</p> -->
        <p>{{ $phone->number }}</p>
    </div>
@else
    <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
@endif

@endsection