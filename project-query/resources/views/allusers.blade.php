<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        nav .w-5{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>all users data</h1>
                <td><a href="/newuser" class="btn btn-success btn-sm">Add new</a></td>
                <table class="table table-border table-striped">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id => $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->city }}</td>
                        <td><a href="{{ route('view.user', $user->id ) }}" class="btn btn-primary btn-sm">View</a></td>
                        <td><a href="{{ route('delete.user', $user->id ) }}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td><a href="{{ route('update.page', $user->id ) }}" class="btn btn-warning btn-sm">Update</a></td>
                    </tr>
                    @endforeach
                </table>
                <div class="mt-5">
                    {{-- {{ $data->links("pagination::bootstrap-5") }} --}}
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>




