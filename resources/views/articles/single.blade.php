@extends('layouts.master')

@section('content')
    <h1>{{$article->title}}</h1>
    <p>{{$article->body}}</p>
    @if(!Auth::check())
        @include('social.social_login')
    @else
        @include('comments.comment_form', ['article' => $article->id])
    @endif

    @foreach($article->comments as $comment)
        <strong>{{ $comment->user->username }}</strong> said:
        {{ $comment->comment }}<hr />
    @endforeach
@stop