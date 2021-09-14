@extends('students.layouts.master')
@section('title', 'Number')
@section('content')

@if( $courses )
        <div class="alert alert-success">   
        <p>This user has assigned following courses:</p>
            <?php
                $sr=1;
            ?>
            @foreach( $courses as $course)
        
            <h3><b><?= $sr;  ?>: </b>{{ $course->name }}</h3>
            <?php $sr++;  ?>
        @endforeach
        </div>
    
@else
    <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
@endif

@endsection