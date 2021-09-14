@extends('teachers.layouts.master')
@section('title', 'Teachers')
@section('content')

<h1>All Students Details</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @if( session('status1') )
            <div class="alert alert-success">
                <p>{{ session('status1') }}</p>
            </div>
            @elseif(session('status2') )
            <div class="alert alert-danger">
                    <p>{{ session('status2') }}</p>
            </div>
            @endif

            
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ACTIONS</th>
                </thead>
                <tbody>
                    @if( $teachers )
                        @foreach( $teachers as $teacher )
                            <tr>
                                <td>{{ $teacher->id }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>
                                    @if( $teacher->trashed())
                                    <form action="/teachers/restore/{{ $teacher->id }}" method="post">
                                    @csrf
                                        <input type="submit" value="Restore" name="restore" class="btn btn-success">
                                    </form>
                                    @else
                                    <form action="/teachers/{{ $teacher->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <input type="submit" value="Soft Delete" name="delete" class="btn btn-primary">
                                    </form>
                                    @endif
                                    <form action="/teachers/delete/{{ $teacher->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <input type="submit" value="Hard Delete" name="delete" class="btn btn-danger">
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
            <div class="pull-left">
                <form action="/teachers/restore/all" class="pull-left" method="post">
                    @csrf
                        <input type="submit" value="All Restore" name="restore" class="btn btn-success">
                </form>
                <form action="/teachers/all" class="pull-left" method="post">
                    @csrf
                    @method('DELETE')
                        <input type="submit" value="All Soft Delete" name="delete" class="btn btn-primary">
                </form>
                <form action="/teachers/delete/all" class="pull-left" method="post">
                    @csrf
                    @method('DELETE')
                        <input type="submit" value="All Hard Delete" name="delete" class="btn btn-danger">
                </form>
                
            </div>
            <!-- <a href="{{ url('/teachers/all_restore') }}" class="btn btn-success">All Restore</a> -->
            <!-- <a href="{{ url('/teachers/soft_delete') }}" class="btn btn-primary">All Soft Delete</a>
            <a  href="{{ url('/teachers/hard_delete') }}" class="btn btn-danger">All Hard Delete</a> -->
        </div>
    </div>
</div>


@endsection
