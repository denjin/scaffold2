@extends('layouts.master')

@section('header')

@stop

@section('content')
    <div class="container">
        <h1>Hello</h1>
        @foreach($articles as $article)
            @include('articles.article_link', array('title' => $article->title, 'body' => $article->body))
        @endforeach
    </div>
@stop

@section('footer')

@stop