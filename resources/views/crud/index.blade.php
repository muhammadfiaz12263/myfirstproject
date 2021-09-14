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
                        @if( $allData )
                        
                            @foreach( $allData as $data )
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->description ? $data->description : 'N/A'}}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>{{ $data->updated_at }}</td>
                                    <td>
                                        <a href="/crud/{{ $data->id }}" class="btn btn-primary">Show</a>
                                        <a href="/crud/{{ $data->id }}/edit" class="btn btn-success">edit</a>
                                        <form action="/crud/{{ $data->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" name="delete" class="btn btn-danger" value="Delete">
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
                <a href="{{ url('/crud/create') }}" class="btn btn-primary">Create Project</a>
            </div>
        </div>
    </div>
</body>
</html>