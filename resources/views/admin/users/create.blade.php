@extends('layouts.admin')


@section('content')

    <h1>Create Users</h1>

    <form method="POST" action="./" accept-charset="utf-8" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="POST">

       <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control">
       </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="role_id">Role:</label>
            <select name="role_id" id="role_id" class="form-control">
                <option value="">Choose option</option>
                @foreach ($roles as $key => $role)
                    <option value="{{ $key }}">{{$role}}</option>
                    @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="is_active">Status:</label>
            <select id="is_active" name="is_active"  class="form-control">
                <option value="1">Active</option>
                <option value="0" selected>Not Active</option>
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

    @include('includes.form_error')


    @stop