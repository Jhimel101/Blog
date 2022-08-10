@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
        <h1>Edit</h1>
    </div>

    <div class="col-md-12">
        <form action="{{ route('blogs.update', $blog->id) }}" method="post">
            {{ method_field('patch') }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="title" name="title" class="form-control" value="{{ $blog->title }}">
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="slug" name="slug" class="form-control" value="{{ $blog->slug }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control">{{ $blog->description }}</textarea>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Update Blog</button>

            {{@csrf_field()}}
        </form>
    </div>
</div>
    
@endsection