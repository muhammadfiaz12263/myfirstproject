@extends(  'users.layouts.master' )
@section('title', 'Users')
@section('content')
<h1 class="users-show-heading">Single users information</h1>
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
                    </thead>
                    <tbody>
                        @if( $user )
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email_verified_at ? $user->email_verified_at : 'N/V' }}</td>
                                    <td>{{ $user->remember_token ? $user->remember_token : 'N/A' }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                </tr>
                        @else
                            <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
                        @endif
                    </tbody>
                </table>
                <!-- Relative Url -->
                <!-- <a href="/crud/create">Create Project</a>   -->
                <!-- Absolute Url Result: <a href="http://myfirstproject.com/crud/create">Create Project</a>-->
                <a href="{{ url('/users') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection