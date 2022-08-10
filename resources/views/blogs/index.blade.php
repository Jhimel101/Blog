@extends('layouts.app')

@section('content')

@foreach ($blogs as $blog)
   <div class="container">
        <h2><a href="{{route('blogs.show', $blog->id) }}" class="link-item">{{ $blog->title }}</a></h2>
        <p>{{ $blog->description }}</p>
    </div>
@endforeach
@endsection