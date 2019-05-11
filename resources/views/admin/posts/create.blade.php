@extends('layouts.admin')




@section('content')


    <h1>Create Posts</h1>

    <div class="row">

    <form method="POST" action="./" accept-charset="utf-8" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="POST">

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" class="form-control">
            @foreach($categories as $key => $category)
                <option value="{{$key}}">{{$category}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="photo_id">Photo:</label>
            <input type="file" name="photo_id" id="photo_id" >
        </div>


        <div class="form-group">
            <label for="body">Description:</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>


        <div class="form-group">
            <input type="submit" value="Create Post" class="btn btn-primary">
        </div>

    </form>

    </div>

    <div class="row">

    @include('includes.form_error')

    </div>
@stop