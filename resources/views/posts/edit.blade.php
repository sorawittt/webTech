@extends('layouts.master')

@section('content')
<h1>
    Edit Post
</h1>

@if ($errors->any())
<div class="alert alert-danger">

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('put')
    <div>
        <label for="title">Post title</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title', $post->title) }}">

        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="detail">Post Detail</label>
        <textarea name="detail" id="detail" cols="30" rows="10">{{ old('detail', $post->detail) }}</textarea>
    </div>

    <div>
        <button type="submit">Update and Publish Now</button>
    </div>
</form>


@endsection
