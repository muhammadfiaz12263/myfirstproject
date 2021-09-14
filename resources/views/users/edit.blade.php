@extends(  'users.layouts.master' )
@section('title', 'Users | Create')
@section('content')
<h1 class="users-create-heading">CRUD Operation: Create Data</h1>
<div class="container">
    <div class="row users-edit-form-section">   
        <div class="col-lg-12 ">
            <!-- <form action="/crud" method="post"> -->
            <form action="{{ url('/users')}}/{{ $user->id }} " class="" method="post">
                @csrf
                @method('PATCH')
                <!-- {{ csrf_field() }} old method -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                </div>
                <!-- <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" value="{{ $user->password }}" class="form-control">
                </div> -->
                <input type="submit" name="update" class="btn btn-primary" value="Submit">
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
</div>

@endsection