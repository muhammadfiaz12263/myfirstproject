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
    <h1>CRUD Operation: Update Data</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- <form action="/crud/{{ $user->id }}" method="post"> -->
                <form action="{{ url('/crud')}}/{{ $user->id }} " method="post">
                    @csrf
                    @method('PATCH')
                    <!-- {{ csrf_field() }} old method -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="{{ $user->description }}" class="form-control">
                    </div>
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                </form>
            </div>
        </div>
    </div>
</body>
</html>