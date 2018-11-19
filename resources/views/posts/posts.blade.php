@extends('layouts.app')

@section('content')
    @foreach( $posts as $post )
        {{ $post->title }}
        {{ $post->category->name }}
        {{ $post->excerpt }}
        {{ $post->body }}
        {{ $post->created_at }}
        @foreach($post->tags as $tag)
            {{ $tag->name}}
        @endforeach
    @endforeach
@endsection
