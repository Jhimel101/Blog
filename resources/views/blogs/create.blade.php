@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
        <h1>Create new blog</h1>
    </div>

    <div class="col-md-12">
        <form action="{{ route('blogs.store')}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="title" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="slug" name="slug" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="image">Featured Image</label>
                <input type="file" name="image" class="form-control"></input>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Create a new Blog</button>

            {{@csrf_field()}}
        </form>
    </div>
</div>
    
@endsection