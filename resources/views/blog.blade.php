@extends('layout')

@section('body')
    <h1>Blog</h1>
    <p> {{ $post->body }} </p>
@endsection
