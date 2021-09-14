@extends('students.layouts.master')
@section('title', 'Students')
@section('content')

<h1>CRUD Operation: Create Data</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ url('/students') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="first name">First Name</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="last name">Last Name</label>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="courses[]" id="subjects">
                        <label class="form-check-label" for="PHP Procedural">PHP Procedural</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=2 name="courses[]" id="subjects">
                        <label class="form-check-label" for="PHP Object Oriented">PHP Object Oriented</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=3 name="courses[]" id="subjects">
                        <label class="form-check-label" for="PHP MVC">PHP MVC</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" name="courses[]" id="subjects">
                        <label class="form-check-label" for="MYSQL">MYSQL</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="5" name="courses[]" id="subjects">
                        <label class="form-check-label" for="C++">C++</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="6" name="courses[]" id="subjects">
                        <label class="form-check-label" for="Java">Java</label>
                    </div>
                    <input type="submit" name="create" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>


@endsection
