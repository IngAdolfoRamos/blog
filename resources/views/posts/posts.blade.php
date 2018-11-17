@extends('layouts.app')

@section('content')
    @foreach( $posts as $post )
        {{ $post->title }}
        {{ $post->category->name }}
        {{ $post->excerpt }}
        {{ $post->body }}
        {{ $post->created_at }}
    @endforeach
@endsection
