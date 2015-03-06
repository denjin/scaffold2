@extends('layouts.master')

@section('header')
    <h1>Create a new Article</h1><hr />
@stop

@section('content')
    {!! Form::open(['action' => 'ArticlesController@store']) !!}
        @include('articles.forms.article_form')
    {!! Form::close() !!}
@stop