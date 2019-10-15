@extends('layouts.master')

@section('content')
    <h1>All Category</h1>    

    @foreach ($categories as $category)
        <li>
            <a href="{{ route('categories.show', ['category'=>$category->id]) }}">{{ $category->name }}</a>
        </li>
    @endforeach
@endsection