@extends(  'users.layouts.master' )
@section('title', 'Users | Create')
@section('content')
<h1 class="users-create-heading">CRUD Operation: Create Data</h1>
<div class="container">
    <div class="row users-create-form-section">
            @if( session('success') )
            <div class="alert alert-success">
                {{  session('success')  }} <br>
            </div>
            @elseif( session('danger'))
            <div class="alert alert-danger">
                {{  session('danger')  }} <br>
            </div>
            @endif
        <br>
        <div class="col-lg-12 ">
            <!-- <form action="/crud" method="post"> -->
            <form action="{{ url('/users')}} " class="" method="post">
                @csrf
                <!-- {{ csrf_field() }} old method -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <input type="submit" name="create" class="btn btn-primary" value="Submit">
            </form>
            
            <br>
            
                @if( $errors->count() )
                <div class="alert alert-danger">
                    @foreach( $errors->all() as $error )
                        {{  $error  }} <br>
                    @endforeach
                </div>
                @endif
            
        </div>
    </div>
    <a href="{{ url('/users') }}" class="btn btn-primary ">Back</a>
</div>

@endsection