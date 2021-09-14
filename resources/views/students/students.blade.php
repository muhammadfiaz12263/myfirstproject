@extends('students.layouts.master')
@section('title', 'Students')
@section('content')

<h1>All Students Details</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>EMAIL VERIFIED AT</th>
                    <th>CITY</th>
                    <th>PASSWORD</th>
                    <th>CREATED_AT</th>
                    <th>UPDATED_AT</th>
                    <th>ACTIONS</th>
                </thead>
                <tbody>
                    @if( $students )
                    
                        @foreach( $students as $student )
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->email_verified_at ? $student->email_verified_at : 'N/V' }}</td>
                                <td>{{ $student->city  }}</td>
                                <td>{{ $student->password }}</td>
                                <td>{{ $student->created_at }}</td>
                                <td>{{ $student->updated_at }}</td>
                                <td>
                                    <a href="/students/phone-details/{{$student->id}}" class="btn btn-primary">Phone Number</a>
                                    <a href="/{{$student->id}}/posts" class="btn btn-primary">Posts</a>
                                    <a href="/{{$student->id}}/courses" class="btn btn-primary">Courses</a>
                                    <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/students/{{$student->id}}" method="post">
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
            <a href="{{ url('/students/create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
</div>


@endsection
