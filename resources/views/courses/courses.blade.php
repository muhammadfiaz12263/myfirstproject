@extends('phones.layouts.master')
@section('title', 'Courses')
@section('content')

<h1>All Phones Details</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CREATED_AT</th>
                    <th>UPDATED_AT</th>
                    <th>ACTIONS</th>
                </thead>
                <tbody>
                    @if( $courses )
                    
                        @foreach( $courses as $course )
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->created_at }}</td>
                                <td>{{ $course->updated_at }}</td>
                                <td>
                                    <a href="/course/assigned-students/{{$course->id}}" class="btn btn-primary">Assigned Students</a>
                                    <a href="/courses/{{$course->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/courses/{{$course->id}}" method="post">
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
            <a href="{{ url('/courses/create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
</div>

@endsection