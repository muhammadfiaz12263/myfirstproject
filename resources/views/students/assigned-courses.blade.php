@extends('students.layouts.master')
@section('title', 'Number')
@section('content')

@if( $students )
    
        <p> @if($course) {{ $course->name }} @endif has assigned following Students:</p>
        <?php $sr=1; ?>
        @foreach( $students as $student )
            <div class="alert alert-success">
                    <p><?= $sr; ?></p>
                    <p><b>NAME: </b>{{ $student->first_name }} {{ $student->last_name }}</p>
                    <p><b>EMAIL: </b>{{ $student->email }}</p>
                    <p><b>CITY: </b>{{ $student->city }}</p>
            </div>
            <?php $sr++; ?>
        @endforeach
        
    
@else
    <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
@endif

@endsection