@extends('layouts.master')

@section('content')
    <h1>
        Create new Post
    </h1>

    @if ($errors->any())
    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $errors)
                <li>{{ $errors }}</li>   
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Post title</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>

        <div>
            <label for="detail">Post Detail</label>
            <textarea name="detail" id="detail" cols="30" rows="10">{{ old('detail') }}</textarea>
        </div>

        <div>
            <button type="submit">Publish this post</button>
        </div>
    </form>


@endsection