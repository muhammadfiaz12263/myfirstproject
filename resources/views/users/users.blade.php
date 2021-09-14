@extends(  'users.layouts.master' )
@section('title', 'Users')
@section('content')
<h1 class="users-users-heading">All users information</h1>
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>EMAIL VERIFIED AT</th>
                        <th>REMEMBER TOKEN</th>
                        <th>PASSWORD</th>
                        <th>CREATED_AT</th>
                        <th>UPDATED_AT</th>
                        <th>ACTIONS</th>
                    </thead>
                    <tbody>
                        @if( $users )
                        
                            @foreach( $users as $user )
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email_verified_at ? $user->email_verified_at : 'N/V' }}</td>
                                    <td>{{ $user->remember_token ? $user->remember_token : 'N/A' }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        <a href="/users/{{$user->id}}" class="btn btn-primary">Show</a>
                                        <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
                                        <form action="/users/{{$user->id}}" method="post">
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
                <a href="{{ url('/users/create') }}" class="btn btn-primary">Create Project</a>
            </div>
        </div>
    </div>
@endsection