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
            <div class="col-6 mb-3">
                <h1 class="mb-3">wlwcome , {{ Auth::user()->name }}</h1>

                {{-- @can()
                    
                @endcan --}}

                @if (Gate::allows('isAdmin'))  
                  <a href="#" class="btn btn-success">Admin Panel</a>
                  @else
                  <a href="#" class="btn btn-success">Other Links</a>
                @endif
                <a href="{{ route('profile.show' , Auth::id()) }}" class="btn btn-primary">Profile</a>

                <a href="{{ route('post.show' , Auth::id()) }}" class="btn btn-warning">Post</a>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="{{ route('logout') }}" class="btn btn-success">Logout</a>
            </div>
        </div>
    </div>
</body>

</html>
