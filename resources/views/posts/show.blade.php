@extends('layouts.master')

@section('content')
<h1>{{ $post->title }}</h1>
<h5>{{ $post->category->name }}</h5>

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->detail }}</p>
          <p class="card-text">{{ $post->user->name }}</p>
        </div>
      </div>

  
      @can ('update', $post)
      <div>
        <a href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
      </div>
      @endcan

      <hr>
      @can ('delete', $post)
      <div>
        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
      @endcan
@endsection