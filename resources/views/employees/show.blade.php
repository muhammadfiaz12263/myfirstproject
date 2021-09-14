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
    <h1>CRUD Operation: Show Data</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>SECOND NAME</th>
                        <th>EMAIL</th>
                        <th>DESIGNATION</th>
                        <th>PASSWORD</th>
                        <th>CREATED_AT</th>
                        <th>UPDATED_AT</th>
                        <th>ACTIONS</th>
                    </thead>
                    <tbody>
                        @if( $employee )
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->second_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->designation ? $employee->designation : 'N/A'}}</td>
                                    <td>{{ $employee->password }}</td>
                                    <td>{{ $employee->created_at }}</td>
                                    <td>{{ $employee->updated_at }}</td>
                                </tr>
                        @else
                            <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
                        @endif
                    </tbody>
                </table>
                <!-- Relative Url -->
                <!-- <a href="/crud/create">Create Project</a>   -->
                <!-- Absolute Url Result: <a href="http://myfirstproject.com/crud/create">Create Project</a>-->
                <a href="{{ url('/employees') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>
</html>