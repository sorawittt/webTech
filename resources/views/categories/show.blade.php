@extends('layouts.master')

@section('content')
    <h1>Category: {{ $category->name }}</h1>    

    @foreach ($category->posts as $post)
        <p>{{ $post->view_count }}</p>  
        <p>{{$post->title}}</p>
    @endforeach
@endsection