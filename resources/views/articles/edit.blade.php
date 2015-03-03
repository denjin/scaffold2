@extends('layouts.master')

@section('header')
    <h1>Edit {{ $article->title }}</h1><hr />
@stop

@section('content')
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.forms.article_form', [])
    {!! Form::close() !!}
@stop