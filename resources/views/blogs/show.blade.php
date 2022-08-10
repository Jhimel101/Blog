@extends('layouts.app')

@section('content')

<div class="container">
    <article>
        <div class="container">

       
            <div class="col-md-12 p-2 bg-white"> 
                <h2>{{ $blog->title }}</h2>
            </div>
        

        <div class="col-md-12">
            <div class="btn-group">
                <a href="{{route ('blogs.edit', $blog->id) }}" class="btn btn-primary btn-xs pull-left" >Edit</a> 

                <form action="{{ route('blogs.delete', $blog->id) }}" method="post">
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-danger btn-xs pull-left">Delete</button>
                {{@csrf_field()}}
                </form>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="col-md-12">
                <p>{{ $blog->description }}</p>
            </div>
        </div>

        <h4>Display Comments</h4>
  
                    <hr />
                    @include('blogs.commentsDisplay', ['comments' => $blog->comments, 'blog_id' => $blog->id])
   
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}" />
                        </div><br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add Comment" />
                        </div>
                    </form>
    </article>
</div>
    
@endsection