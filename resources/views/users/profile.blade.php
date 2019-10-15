@extends('layouts.master')

@section('content')
    <h1>{{ Auth::user()->name }}'s Profile</h1>
    <p>ID: {{ Auth::user()->id }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
@endsection