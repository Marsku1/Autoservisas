@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">User edit</div>
        <div class="card-body">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
                </ul>
        @endif
            <form action="{{ url('UserList/' .$user->id .'/edit') }}" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" />
                <label>City</label></br>
                <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control"></br>
                <label>Name</label></br>
                <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control"></br>
                <label>Street</label></br>


                <select class="form-control" name="role" id="role">
                    <option value="">Select</option>
                    <option value="user"@if($user->role=='user') selected='selected' @endif >User</option>
                    <option value="admin"@if($user->role=='admin') selected='selected' @endif >Admin</option>
                </select>

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        </div>
    </div>
@endsection
