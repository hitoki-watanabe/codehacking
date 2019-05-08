@extends('layouts.admin')


@section('content')

    <h1>Edit Users</h1>

    <div class="row">


    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->file : "http://placehold.it/400x400"}}" alt="" class="img-responsive img-rounded">
        
        
    </div>
    
    <div class="col-sm-9">

    <form method="POST" action="./" accept-charset="utf-8" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH" >

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}">
        </div>

        <div class="form-group">
            <label for="role_id">Role:</label>
            <select name="role_id" id="role_id" class="form-control">
                <option value="{{$user->role->id}}" >{{$user->role->name}}</option>
                @foreach ($roles as $key => $role)
                    <option value="{{ $key }}">{{$role}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="is_active">Status:</label>
            <select   id="is_active" name="is_active"  class="form-control">
                @if($user->is_active == 1)
                <option value="1">Active</option>
                @else
                    <option value="0">Not Active</option>
                @endif
                <option value="1">Active</option>
                <option value="0">Not Active</option>
            </select>
        </div>

        <div class="form-group">
            <label for="photo_id">Photo:</label>
            <input type="file" name="photo_id" id="photo_id" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" value="Create User" class="btn btn-primary">
        </div>

    </form>
    </div>

    </div>

    <div class="row">

        @include('includes.form_error')


    </div>

@stop