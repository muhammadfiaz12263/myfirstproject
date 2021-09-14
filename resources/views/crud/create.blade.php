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
                <!-- <form action="/crud" method="post"> -->
                <form action="{{ url('/crud')}} " method="post">
                    @csrf
                    <!-- {{ csrf_field() }} old method -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <input type="submit" name="create" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>