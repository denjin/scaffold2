@extends('layouts.master')

@section('header')

@stop

@section('content')
    <div class="container">
        @foreach($articles as $article)
            @include('articles.article_link', array('title' => $article->title, 'body' => $article->body, 'slug' => $article->slug, 'created_at' => $article->created_at, 'author' => $article->user->username))
        @endforeach

        {!! $articles->render() !!}
    </div>
@stop

@section('footer')

@stop