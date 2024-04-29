@extends('layout')

@section('title')
    Add new User
@endsection

@section('content')

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label for="useremail" class="form-label">UserEmail</label>
        <input type="email" class="form-control" name="useremail">
    </div>
    <div class="mb-3">
        <label for="username" class="form-label"> User Age</label>
        <input type="number" class="form-control" name="userage">
    </div>
    <div class="mb-3">
        <label for="usercity" class="form-label">User City</label>
        <input type="text" class="form-control" name="usercity">
    </div>
    <div class="mb-3">
        <input type="submit" value="Save" class="btn btn-success">
        <a href="{{ route('user.index') }}" class ="btn btn-danger">Back</a>
    </div>
    </form>

@endsection


