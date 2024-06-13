<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3>Posts</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->id }}</td>
                                    <td><a href="{{ route('post.update' , $post->id) }}" class="btn btn-suceess">Update</a></td>
                                    <td><a href="" class="btn btn-suceess">Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
