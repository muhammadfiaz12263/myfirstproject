@extends('phones.layouts.master')
@section('title', 'phones')
@section('content')

<h1>All Phones Details</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>NUMBER</th>
                    <th>USER_ID</th>
                    <th>CREATED_AT</th>
                    <th>UPDATED_AT</th>
                    <th>ACTIONS</th>
                </thead>
                <tbody>
                    @if( $phones )
                    
                        @foreach( $phones as $phone )
                            <tr>
                                <td>{{ $phone->id }}</td>
                                <td>{{ $phone->number }}</td>
                                <td>{{ $phone->user_id }}</td>
                                <td>{{ $phone->created_at }}</td>
                                <td>{{ $phone->updated_at }}</td>
                                <td>
                                    <a href="/owner/{{$phone->number}}" class="btn btn-primary">Owner Details</a>
                                    <a href="/phones/{{$phone->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/phones/{{$phone->id}}" method="post">
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
            <a href="{{ url('/phones/create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
</div>

@endsection