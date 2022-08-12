@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>{{ $user->name }}'s Blogs</h3>
        <hr>
        @foreach ($user->blogs as $blog)
            <h4><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h4>
        @endforeach
    </div>

@endsection