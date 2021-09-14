<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="/watch/movie" method="post">
                @csrf
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Type your age here" name="age" id="age">
                    <input type="submit" class="btn btn-primary" value="Let's go">
                </div>
            </form>
        </div>
    </div>
</body>
</html>