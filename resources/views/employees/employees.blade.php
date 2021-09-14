<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
    <link rel="stylesheet" href="/css/employee.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="/css/employee.css"> -->
    
</head>
<body class="read_data_body">
    <h1 class="employees_read_heading">CRUD Operation: Read Data</h1>
    <div class="container ">
        <div class="row read_data_row">
            <div class="col-lg-8 read_data_coloumn">
                
                <table class="table table-responsive table-dark table-hover">
                    <thead>
                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>EMAIL</th>
                        <th>EMAIL VERIFIED AT</th>
                        <th>DESIGNATION</th>
                        <th>PHONE</th>
                        <th>CREDIT CARD TYPE</th>
                        <th>CREDIT CARD NUMBER</th>
                        <th>CREDIT CARD EXPIRATION DATE</th>
                        <th>HOUSE #</th>
                        <th>STREET</th>
                        <th>CITY</th>
                        <th>STATE</th>
                        <th>COUNTRY</th>
                        <th>POST CODE</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th>PASSWORD</th>
                        <th>CREATED_AT</th>
                        <th>UPDATED_AT</th>
                        <th>ACTIONS</th>
                    </thead>
                    <tbody>
                        @if( $employees )
                        
                            @foreach( $employees as $employee )
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->email_verified_at }}</td>
                                    <td>{{ $employee->designation ? $employee->designation : 'N/A'}}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->creditCardType }}</td>
                                    <td>{{ $employee->creditCardNumber }}</td>
                                    <td>{{ $employee->creditCardExpirationDateString }}</td>
                                    <td>{{ $employee->buildingNumber }}</td>
                                    <td>{{ $employee->streetName }}</td>
                                    <td>{{ $employee->city }}</td>
                                    <td>{{ $employee->state }}</td>
                                    <td>{{ $employee->country }}</td>
                                    <td>{{ $employee->post_code }}</td>
                                    <td>{{ $employee->latitude }}</td>
                                    <td>{{ $employee->longitude }}</td>
                                    <td>{{ $employee->password }}</td>
                                    <td>{{ $employee->created_at }}</td>
                                    <td>{{ $employee->updated_at }}</td>
                                    <td>
                                        <a href="/employees/{{$employee->id}}" class="btn btn-primary">Show</a>
                                        <!-- <a href="/employees/{{$employee->id}}/edit" class="btn btn-primary">Edit</a> -->
                                        <form action="/employees/{{$employee->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        @else
                            <tr><td colspan="6" class="text-danger text-center">No data available</td></tr>
                        @endif
                    </tbody>
                </table>
                <!-- Relative Url -->
                <!-- <a href="/crud/create">Create Project</a>   -->
                <!-- Absolute Url Result: <a href="http://myfirstproject.com/crud/create">Create Project</a>-->
                
            </div>
        </div>
        <a href="{{ url('/employees/create') }}" class="btn btn-primary">Create Project</a>
    </div>
</body>
</html>