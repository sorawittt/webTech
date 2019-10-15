@extends('layouts.master')

@section('content')


    @auth
        <h1>All Posts for {{ Auth::user()->name }}</h1>
    @else
        <h1>All Post</h1>
    @endauth
    
    @can ('create', \App\Post::class)
      <div>
        <a class="btn btn-outline-primary" href="{{ route('posts.create') }}">Create New Post</a>
      </div>
    @endcan

    @foreach ($posts as $post)

    <div class="card" >
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }} ({{ $post->view_count }})</h5>
          <p>
            Created: {{ $post->created_at->diffForHumans() }}
          </p>
          <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-info">Read More</a>
        </div>
      </div>
        
    @endforeach
@endsection