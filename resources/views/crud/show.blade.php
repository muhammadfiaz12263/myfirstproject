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
    <h1>CRUD Operation: Read Data</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>DESCRIPTION</th>
                        <th>CREATED_AT</th>
                        <th>UPDATED_AT</th>
                        <th>ACTIONS</th>
                    </thead>
                    <tbody>
                        @if( $user )
                        
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->description ? $user->description : 'N/A'}}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    
                                </tr>
                        @else
                            <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
                        @endif
                    </tbody>
                </table>
                <a href="/crud" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>
</html>