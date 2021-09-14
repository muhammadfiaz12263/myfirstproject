<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>CRUD Operation: Create Data</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="/employees/{{ $employee->id }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="first_name" value="{{ $employee->first_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="second_name" value="{{ $employee->second_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $employee->email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" value="{{ $employee->designation }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" value="{{ $employee->password }}" class="form-control">
                    </div>
                    <input type="submit" name="create" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>