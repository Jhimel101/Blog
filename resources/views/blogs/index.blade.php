@extends('layouts.app')

@section('content')

@foreach ($blogs as $blog)
    <div class="container">
        <div class="col-md-4">
            @if($blog->image)
            <img src="/images/{{ $blog->image ? $blog->image: '' }}" alt="{{ str_limit($blog->title, 50) }}" class="img-fluid image">
            @endif
        </div>
        </br>
        <h2><a href="{{route('blogs.show', $blog->id) }}" class="link-item">{{ $blog->title }}</a></h2>
        <p>{{ $blog->description }}</p>

        @if($blog->user)
        Author: <a href="{{ route('users.show', $blog->user) }}">{{ $blog->user->name }}</a> Posted: {{ $blog->created_at->diffForHumans() }}
        @endif
        <hr>
    </div>
@endforeach
@endsection